import { Injectable } from '@angular/core';
import { BaseService } from './base.service';
import { HttpClient } from '@angular/common/http';
import { Router } from '@angular/router';

@Injectable({
  providedIn: 'root'
})
export class ProyectosService extends BaseService {

  constructor(private vhttp:HttpClient, private router: Router) {
    super(vhttp);
   }

  getAllProjects(){
    return this.get('api/proyectos');
  }
  getProjectById(id:string){
    return this.get('api/proyectos/'+id);
  }
  deleteProjectById(id:string){
    return this.delete('api/proyectos/'+id);
  }
  saveProject( data:any){
    return this.post('api/proyectos/save', data);
  }

  update(id:string, data:any){
    return this.post('api/proyectos/'+id, data);
  }
}

