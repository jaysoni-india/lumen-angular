import { Router } from '@angular/router';
import { AuthService } from './../auth.service';
import { Component, OnInit } from '@angular/core';


@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.scss']
})
export class RegisterComponent implements OnInit {

  user = {
    name:'',email:'',password:'',confirm_password:''
  };

  constructor(private _auth: AuthService,
    private _router: Router) { }

  ngOnInit() {
  }

  registerUser(){
    console.log(this.user);
    this._auth.registerUser(this.user)
          .subscribe(
             res => {
              //  console.log(res)
               localStorage.setItem('token',res.token)
               this._router.navigate(['/members'])
             },
             err => {

               console.log(err)
             }
          )
  }

}
