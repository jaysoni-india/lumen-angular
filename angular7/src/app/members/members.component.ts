import { Router } from '@angular/router';
import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-members',
  templateUrl: './members.component.html',
  styleUrls: ['./members.component.scss']
})
export class MembersComponent implements OnInit {

  members = [];
  membersUrl = 'http://lumangular/main55/auth/members';

  constructor(private http: HttpClient, private router : Router) { }

  ngOnInit() {
    this.getMembers();
  }

  getMembers(){
      this.http.get(this.membersUrl).subscribe(
       res => this.members = res,
        error => {
          localStorage.removeItem('token');
          this.router.navigate(['/login'])
        }
      )
  }

}
