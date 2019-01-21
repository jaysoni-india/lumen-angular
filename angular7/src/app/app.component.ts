import { AuthService } from './auth.service';
import { Component } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent {

  loginStatus = false;

  title = 'Angular7-Lumen 5.7 Example';

  constructor(private _authService:AuthService,
    private router: Router){
  }

  logoutUser(){
    console.log('logout');
    localStorage.removeItem('token');
    this.router.navigate(['/events']);
  }
}
