import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { ProductExtra } from '../../models/products';
import dayjs from 'dayjs';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';
import { ProductsExtrasService } from '../../services/products-extras.service';

@Component({
  selector: 'app-product-extra-modify',
  imports: [CommonModule,FormsModule],
  templateUrl: './product-extra-modify.component.html',
})
export class ProductExtraModifyComponent  implements OnInit {
  producto = new ProductExtra();

  constructor(private svc:ProductsExtrasService, private router:Router, private route:ActivatedRoute) { }

  ngOnInit(){
    this.route.params.subscribe(params => {
      this.producto.id = params['id'];
    });
    if(this.producto.id){
      this.load();
    }else{
      this.producto.created_at = dayjs().format('YYYY-MM-DD HH:mm:ss');
      this.producto.updated_at = dayjs().format('YYYY-MM-DD HH:mm:ss');
      this.producto.deleted_at = null;
    }

  }
  load(){
    this.svc.getProduct(this.producto.id).subscribe(
      (data:any) => {
        this.producto = data.product;
      }
    );
  }
  save(){
    if(this.producto.id){
      this.svc.update(this.producto.id, this.producto).subscribe(
        (data:any) => {
          console.log(data);
          this.router.navigate(['/productos-extras']);
        },
        (error:any) => {
          console.error(error);
        }
      );
    }else{
      this.svc.create(this.producto).subscribe(
        (data:any) => {
          console.log(data);
          this.router.navigate(['/productos-extras']);
        },
        (error:any) => {
          console.error(error);
        }
      );
    }
  }
  delete(){
    if(this.producto.id){
      this.svc.deleteProduct(this.producto.id).subscribe(
        (data:any) => {
          console.log(data);
          this.router.navigate(['/productos-extras']);
        },
        (error:any) => {
          console.error(error);
        }
      );
    }
  }
  cancel(){
    this.router.navigate(['/productos-extras']);
  }
}
