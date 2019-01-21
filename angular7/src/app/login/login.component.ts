import { Component, OnInit } from '@angular/core';
import { AuthService } from '../auth.service';
import { NgForm } from '@angular/forms';
import { Router } from '@angular/router';



@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.scss']
})
export class LoginComponent implements OnInit {

  userData = {};

  constructor(private _auth:AuthService,
    private _router:Router) { }

  ngOnInit() {
  }

  loginUser(form: NgForm){
      this._auth.loginUser(form.value).subscribe(
        res => {
          console.log(res)
          localStorage.setItem('token',res.token)
          this._router.navigate(['/members'])
        },
        error => console.log(error)
      );
      console.log(form.value);
      // return false;
  }

}
