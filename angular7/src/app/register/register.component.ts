import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.scss']
})
export class RegisterComponent implements OnInit {

  public formData = { hi:'jay'};

  constructor() { }

  ngOnInit() {
  }

  FormData(x){
    console.log(x);
    this.formData = x;
    return false;
  }

}
