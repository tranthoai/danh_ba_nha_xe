import {Component, OnInit} from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit{

  title = 'ng';

  ngOnInit(): void {

    alert(3333333)
    throw new Error("Method not implemented.");

  }

}
