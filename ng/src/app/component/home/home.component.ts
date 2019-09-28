import {Component, OnInit} from '@angular/core';
import {NhaXeService} from "../../service/nha-xe.service";

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

  constructor(
    private nhaXeService: NhaXeService
  ) {

    let nhaXes = this.nhaXeService.getAllNhaXes().subscribe(
      (nhaXes: any) => {

        console.log(4444444444, nhaXes)
      }
    );

  }

  ngOnInit() {
  }
}
