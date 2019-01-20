import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss']
})
export class HomeComponent implements OnInit {

  constructor() {

      // console.log(atob(btoa('sladjflsdf')));

      //localStorage.setItem(2, 'Value');
      //localStorage.getItem(2);

    // console.log(localStorage.clear());

  }

  ngOnInit() {
  }

}
