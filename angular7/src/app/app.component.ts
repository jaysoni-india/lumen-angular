import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent {

  loginStatus = false;

  title = 'Angular7-Lumen 5.7 Example';

  logoutUser(){
    console.log('logout');
  }
}
