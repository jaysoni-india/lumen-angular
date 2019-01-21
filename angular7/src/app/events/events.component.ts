import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-events',
  templateUrl: './events.component.html',
  styleUrls: ['./events.component.scss']
})
export class EventsComponent implements OnInit {

  eventsUrl = 'http://lumangular/main55/events';

  events:any;

  constructor(private http:HttpClient) {
  }

  ngOnInit() {
    this.getEvents();
  }

  getEvents(){
    // console.log('sdlfjs');
    this.http.get(this.eventsUrl).subscribe(
      res => {
        // console.log(res)
        this.events = res;
      },
      error => {
        console.log(error)
      }
    )
  }

}
