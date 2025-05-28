import { Injectable } from '@angular/core';
import { BaseService } from './base.service';
import { Router } from '@angular/router';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class GeneralSettingsService extends BaseService {

  constructor(private vhttp:HttpClient, private router: Router) {
    super(vhttp);
   }

  getGeneralSettings(){
    return this.get('api/general_settings');
  }
  updateGeneralSettings(data:any){
    return this.post('api/general_settings',data);
  }
}
