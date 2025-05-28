import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Router } from '@angular/router';
import { BaseService } from './base.service';

@Injectable({
  providedIn: 'root'
})
export class SlidersService extends BaseService {

  constructor(private vhttp:HttpClient, private router: Router) {
    super(vhttp);
   }

  getAllSliders(){
    return this.get('api/sliders');
  }
  getSlider(id:number){
    return this.get('api/sliders/'+id);
  }
  update(id:number, data:any){
    return this.post('api/sliders/'+id, data);
  }
}
