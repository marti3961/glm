import { HttpClient, HttpErrorResponse, HttpHeaders } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { catchError, throwError } from 'rxjs';
import { API_URL } from '../constants/app.constants';

@Injectable({
  providedIn: 'root'
})
export class BaseService {
  rootUrl: string = API_URL;// 'http://localhost:8080/'; // Replace with your actual API URL 'https://vainilla-caramelo.com.mx/GLM/public/';
  httpOptions: any = {
    headers: new HttpHeaders({
      // 'Content-Type': 'application/json',
      'Accept': 'application/json',
      'authorization': 'Bearer ' + sessionStorage.getItem('token')
    }),
    withCredentials: true // Important for cookies/sessions
  };
  constructor(private _http:HttpClient) { }

  get(url: string) {
    return this._http.get(this.rootUrl + url, this.httpOptions).pipe(catchError(this.handleError));
  }
  post(url: string, data: any) {
    return this._http.post(this.rootUrl + url, data, this.httpOptions).pipe(catchError(this.handleError));
  }
  put(url: string, data: any) {
    return this._http.put(this.rootUrl + url, data, this.httpOptions).pipe(catchError(this.handleError));
  }
  delete(url: string) {
    return this._http.delete(this.rootUrl + url, this.httpOptions).pipe(catchError(this.handleError));
  }
  private handleError(error: HttpErrorResponse) {
    if(error.status === 401|| error.error?.Message === 'Unauthorized') {
      console.error('Unauthorized access - redirecting to login');
    }
    console.error('An error occurred:', error);
    return throwError(()=> "Error"); // Rethrow the error to be handled by the caller
  }
}
