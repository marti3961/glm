import { Injectable } from '@angular/core';
import { BaseService } from './base.service';
import { HttpClient } from '@angular/common/http';
import { Router } from '@angular/router';

@Injectable({
  providedIn: 'root'
})
export class CotizacionService extends BaseService {

  constructor(private vhttp:HttpClient, private router: Router) {
    super(vhttp);
   }

  getAllMensajes(){
    return this.get('api/cotizaciones');
  }
  getMensaje(id:number){
    return this.get('api/cotizaciones/'+id);
  }
  deleteMensaje(id:number){
    return this.delete('api/cotizaciones/'+id);
  }
}
