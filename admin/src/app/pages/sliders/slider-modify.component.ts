import { CommonModule } from '@angular/common';
import { Component, OnInit } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { API_URL } from '../../constants/app.constants';
import { SlidersService } from '../../services/sliders.service';
import { ActivatedRoute, Router } from '@angular/router';
import dayjs from 'dayjs';

@Component({
  selector: 'app-slider-modify',
  imports: [CommonModule,FormsModule],
  templateUrl: './slider-modify.component.html',
})
export class SliderModifyComponent implements OnInit{
  main_uri = API_URL;
  imagePreview:any;
  selectedFile: File|null = null;
  slider = {
    id: 0,
    type: "",
    title: "",
    subtitle: "",
    button1_text: "",
    button1_link: "",
    button2_text: "",
    button2_link: "",
    image: "",
    position: "",
    active: "",
    created_at:"",
    updated_at:"",
    deleted_at:""
  };
  constructor(private sliderService: SlidersService,private router:Router, private route:ActivatedRoute) { }
  ngOnInit(){
    this.route.params.subscribe(params => {
      this.slider.id = params['id'];
    });
    if(this.slider.id){
      this.loadSliderByID();
    }else{
      this.slider.created_at = dayjs().format('YYYY-MM-DD HH:mm:ss');
      this.slider.updated_at = dayjs().format('YYYY-MM-DD HH:mm:ss');
      this.slider.deleted_at = "";
    }
  }

  loadSliderByID(){
    this.sliderService.getSlider(this.slider.id).subscribe(
      (data:any) => {
        this.slider = data;
        this.imagePreview = this.main_uri + data.image;
      },
      (error) => {
        console.error('Error fetching products:', error);
      }
    );
  }

  onFileSelected(event: Event): void {
    const input = event.target as HTMLInputElement;
    if (input.files && input.files.length > 0) {
      this.selectedFile = input.files[0];
      const reader = new FileReader();

      reader.onload = () => {
        this.imagePreview = reader.result;
      };

      reader.readAsDataURL(this.selectedFile); // This will trigger reader.onload
    }
  }

  cancel(){
    this.router.navigate(['/sliders']);
  }

  onSubmit() {
    const formData = new FormData();

    // Add the other slider properties to FormData
    formData.append('title', this.slider.title);
    formData.append('subtitle', this.slider.subtitle);
    formData.append('button1_text', this.slider.button1_text);
    formData.append('button1_link', this.slider.button1_link);
    formData.append('button2_text', this.slider.button2_text);
    formData.append('button2_link', this.slider.button2_link);
    formData.append('position', this.slider.position);
    formData.append('active', this.slider.active);

    // Add the selected image to FormData if present
    if (this.selectedFile) {
      formData.append('imageFile', this.selectedFile!);  // This must be a File object
    }

    this.sliderService.update(this.slider.id,formData).subscribe(
      (data:any) => {
        this.slider = data;
        this.router.navigate(['/sliders']);
      },
      (error) => {
        console.error('Error fetching products:', error);
      }

    );
  }
}
