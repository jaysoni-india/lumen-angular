import { AuthService } from './../auth.service';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss']
})
export class HomeComponent implements OnInit {

  user:any;

  constructor(private auth:AuthService) {

    if( this.auth.loggedIn() ){
      this.user = JSON.parse(atob(localStorage.getItem('token').split('.')[1]));
    }

      // console.log(atob(btoa('sladjflsdf')));

      //localStorage.setItem(2, 'Value');
      //localStorage.getItem(2);

    // console.log(localStorage.clear());

  }

  ngOnInit() {
  }

}
