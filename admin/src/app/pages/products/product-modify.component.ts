import { CommonModule } from '@angular/common';
import { Component, Input, OnInit } from '@angular/core';
import { ProductsService } from '../../services/products.service';
import { FormsModule } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { Product } from '../../models/products';
import dayjs from 'dayjs';

@Component({
  selector: 'app-product-modify',
  imports: [CommonModule,FormsModule],
  templateUrl: './product-modify.component.html',
})
export class ProductModifyComponent implements OnInit {
  producto = new Product();

  constructor(private svc:ProductsService, private router:Router, private route:ActivatedRoute) { }

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
          this.router.navigate(['/productos']);
        },
        (error:any) => {
          console.error(error);
        }
      );
    }else{
      this.svc.create(this.producto).subscribe(
        (data:any) => {
          console.log(data);
          this.router.navigate(['/productos']);
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
          this.router.navigate(['/productos']);
        },
        (error:any) => {
          console.error(error);
        }
      );
    }
  }
  cancel(){
    this.router.navigate(['/productos']);
  }
}
