import { CommonModule } from '@angular/common';
import { Component, OnInit } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { TestimoniosService } from '../../services/testimonios.service';
import { ActivatedRoute, Router } from '@angular/router';
import { YouTubeVideo } from '../../models/products';

@Component({
  selector: 'app-testimonio-modify',
  imports: [CommonModule,FormsModule],
  templateUrl: './testimonio-modify.component.html',
  styleUrl: './testimonio-modify.component.css'
})
export class TestimonioModifyComponent implements OnInit {
  testimonio = {
    id: "",
    uri: "",
    orden: 0,
    active:false,
  };

  constructor(public svc: TestimoniosService,private router:Router, private route:ActivatedRoute) {}
  ngOnInit(): void {
   this.route.params.subscribe(params => {
      const id = params['id'];
      if (id) {
        this.svc.getTestimonios(id).subscribe(
          (data:any) => {
            this.testimonio = data;
            this.testimonio.active = data.active === '1' ? true : false;
            if (!this.testimonio.id) {
              this.testimonio.id = this.generateGUID();
            }
          },
          (error) => {
            console.error('Error fetching testimonios:', error);
          }
        );
      } else {
        this.testimonio.id = this.generateGUID();
      }
    });
  }

  cancel(){
    this.router.navigate(['/testimonios']);
  }
  generateGUID(): string {
    // The 'x' and 'y' placeholders are replaced with random hexadecimal digits.
    // 'x' can be any hexadecimal digit.
    // 'y' can be 8, 9, A, or B.
    return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
      const r = Math.random() * 16 | 0; // Generate a random number between 0 and 15 (inclusive)
      const v = c === 'x' ? r : (r & 0x3 | 0x8); // If 'x', use r; if 'y', use r & 0x3 | 0x8
      return v.toString(16); // Convert the number to its hexadecimal representation
    });
  }

  onSubmit() {

    let videoURL = new YouTubeVideo(this.testimonio.uri);
    if (videoURL.id) {
      this.testimonio.uri =videoURL.embed();
    }

    this.svc.update(this.testimonio.id,this.testimonio).subscribe(
      (data:any) => {
        this.testimonio = data;
        this.router.navigate(['/testimonios']);
      },
      (error) => {
        console.error('Error fetching testimonios:', error);
      }

    );
  }

}
