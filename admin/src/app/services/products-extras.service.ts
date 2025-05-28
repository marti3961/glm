import { Injectable } from '@angular/core';
import { BaseService } from './base.service';
import { HttpClient } from '@angular/common/http';
import { Router } from '@angular/router';

@Injectable({
  providedIn: 'root'
})
export class ProductsExtrasService extends BaseService {

  constructor(private vhttp:HttpClient, private router: Router) {
    super(vhttp);
   }

  getAllProducts(){
    return this.get('api/productExtras');
  }
  getProduct(id:number){
    return this.get('api/productExtras/'+id);
  }
  update(id:number, data:any){
    return this.put('api/productExtras/'+id, data);
  }
  deleteProduct(id:number){
    return this.delete('api/productExtras/'+id);
  }
  create(data:any){
    return this.post('api/productExtras', data);
  }
}
