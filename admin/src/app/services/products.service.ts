import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Router } from '@angular/router';
import { BaseService } from './base.service';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class ProductsService extends BaseService {

  constructor(private vhttp:HttpClient, private router: Router) {
    super(vhttp);
   }

  getAllProducts(){
    return this.get('api/products');
  }
  getProduct(id:number){
    return this.get('api/products/'+id);
  }
  update(id:number, data:any){
    return this.put('api/products/'+id, data);
  }
  deleteProduct(id:number){
    return this.delete('api/products/'+id);
  }
  create(data:any){
    return this.post('api/products', data);
  }
}
