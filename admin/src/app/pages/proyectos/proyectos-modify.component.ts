import { CommonModule } from '@angular/common';
import { Component, OnInit } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { ProyectosService } from '../../services/proyectos.service';
import { ActivatedRoute, Router } from '@angular/router';
import { QuillModule } from 'ngx-quill';
import { API_URL } from '../../constants/app.constants';
@Component({
  selector: 'app-proyectos-modify',
  imports: [CommonModule,FormsModule,QuillModule],
  templateUrl: './proyectos-modify.component.html',
})
export class ProyectosModifyComponent implements OnInit {
  modules = {
    toolbar: [
      [{ size: ['small', false, 'large', 'huge'] }], // Built-in sizes
      ['bold', 'italic', 'underline'],
      [{ list: 'ordered' }, { list: 'bullet' }],
      ['link']
    ]
  };
  id :string = '';
  api_url = API_URL;
  proyecto = {
    id: '',
    title: '',
    description_short: '',
    description_long: '',
    location_details: '[]',
    features: '[]',
    investment_info: '[]',
    facebook_link: '',
    type: '',
    address: '',
    status: '',
    land_area: '',
    construction_area: '',
    price: '',
    images: [],
    map_src: '',
    created_at: '',
    updated_at: '',
    image_mini:  null
  };

  constructor(

     public svc: ProyectosService,
     private router: Router,
     private route: ActivatedRoute
  ) {}

  ngOnInit(): void {

    this.route.params.subscribe(params => {
      this.id = params['id'];
      if (this.id) {
        this.svc.getProjectById(this.id).subscribe(
          (data: any) => {
            this.proyecto = data;

          },
          (error) => {
            console.error('Error fetching proyecto:', error);
          }
        );
      } else {
        //this.proyecto.id = this.generateGUID();
      }
    });
  }

  cancel() {
     this.router.navigate(['/proyectos']);
  }

  generateGUID(): string {
    return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
      const r = Math.random() * 16 | 0;
      const v = c === 'x' ? r : (r & 0x3 | 0x8);
      return v.toString(16);
    });
  }
  onImagesSelected(event: any) {
    const files = event.target.files;
    if (files && files.length > 0) {
      this.proyecto.images = Array.from(files);
    } else {
      this.proyecto.images = [];
    }
  }

  onImageMiniSelected(event: any) {
    const file = event.target.files[0];
    if (file) {
      this.proyecto.image_mini = file; // Store the file object
    } else {
      this.proyecto.image_mini = null; // Reset if no file selected
    }
  }

  onSubmit() {
    const formData = new FormData();

    // Append all fields to FormData
    formData.append('id', this.proyecto.id);
    formData.append('title', this.proyecto.title ?? '');
    formData.append('description_short', this.proyecto.description_short ?? '');
    formData.append('description_long', this.proyecto.description_long ?? '');
    formData.append('facebook_link', this.proyecto.facebook_link ?? '');
    formData.append('type', this.proyecto.type ?? '');
    formData.append('address', this.proyecto.address ?? '');
    formData.append('status', this.proyecto.status ?? '');
    formData.append('land_area', this.proyecto.land_area ?? '');
    formData.append('construction_area', this.proyecto.construction_area ?? '');
    formData.append('price', this.proyecto.price ?? '');
    formData.append('map_src', this.proyecto.map_src ?? '');
    formData.append('created_at', this.proyecto.created_at ?? '');
    formData.append('updated_at', this.proyecto.updated_at ?? '');

    // Handle images array
    if (Array.isArray(this.proyecto.images)) {
      this.proyecto.images.forEach((file: File, index: number) => {
      formData.append('images[]', file);
      });
    }

    // Handle image_mini file
    if (this.proyecto.image_mini) {
      formData.append('image_mini', this.proyecto.image_mini);
    }

    if(this.id === '' || this.id === undefined || this.id === 'null') {
      // If id is empty, create a new project
      this.svc.saveProject(formData).subscribe(
        (data: any) => {
        this.proyecto = data;
        this.router.navigate(['/proyectos']);
        },
        (error) => {
        console.error('Error al guardar proyecto:', error);
        }
      );
      return;
    }
    this.svc.update(this.id, formData).subscribe(
      (data: any) => {
      this.proyecto = data;
      this.router.navigate(['/proyectos']);
      },
      (error) => {
      console.error('Error al guardar proyecto:', error);
      }
    );
  }
}
