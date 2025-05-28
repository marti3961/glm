import { Injectable } from '@angular/core';
import { BaseService } from './base.service';
import { HttpClient } from '@angular/common/http';
import { Router } from '@angular/router';
import { BehaviorSubject, tap } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class AuthService extends BaseService {

  constructor(private vhttp:HttpClient, private router: Router) {
    super(vhttp);
   }
   private tokenSubject = new BehaviorSubject<string | null>(sessionStorage.getItem('token'));

  login(username: string, password: string) {
    return this.post('login', { email:username, password });
  }

  setUserLoggedIn(data: any) {
    sessionStorage.setItem('token', data.token);
    sessionStorage.setItem('user', JSON.stringify(data.usuario));
  }

  getUserLoggedIn() {
    return JSON.parse(sessionStorage.getItem('user') || '{}');
  }
  getToken() {
    return sessionStorage.getItem('token');
  }

  logout() {
    sessionStorage.clear();
    this.tokenSubject.next(null); // Clear token observable
    this.router.navigate(['/login']);
  }

  isLoggedIn(): boolean {
    return !!sessionStorage.getItem('token');
  }

}
