import { Injectable } from '@angular/core';
import { BaseService } from './base.service';
import { HttpClient } from '@angular/common/http';
import { Router } from '@angular/router';

@Injectable({
  providedIn: 'root'
})
export class MensajesService extends BaseService {

  constructor(private vhttp:HttpClient, private router: Router) {
    super(vhttp);
   }

  getAllMensajes(){
    return this.get('api/mensajes');
  }
  getMensaje(id:number){
    return this.get('api/mensajes/'+id);
  }
  deleteMensaje(id:number){
    return this.delete('api/mensajes/'+id);
  }
}
