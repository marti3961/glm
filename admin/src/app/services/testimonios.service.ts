import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Router } from '@angular/router';
import { BaseService } from './base.service';


@Injectable({
  providedIn: 'root',
})
export class TestimoniosService extends BaseService {

  constructor(private vhttp:HttpClient, private router: Router) {
    super(vhttp);
   }

  getAllTestimonios(){
    return this.get('api/testimonios');
  }
  getTestimonios(id:number){
    return this.get('api/testimonios/'+id);
  }

  update(id:string, data:any){
    return this.put('api/testimonios/'+id, data);
  }

}
