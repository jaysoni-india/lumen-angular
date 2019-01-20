import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';


@Injectable({
  providedIn: 'root'
})
export class AuthService {

  private _registerUrl = "http://lumangular/main55/register";

  constructor( private http: HttpClient) { }

  registerUser(user){
    return this.http.post(this._registerUrl,user);
  }
}
