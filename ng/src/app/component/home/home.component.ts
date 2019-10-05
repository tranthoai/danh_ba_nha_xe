import {Component, OnInit} from '@angular/core';
import {NhaXeService} from '@services/nha-xe.service';
import * as _ from 'lodash';
import {SelectItem} from 'primeng/primeng';

export interface Col {
  field: string,
  header: string
}

@Component({
  selector: 'app-home',
  templateUrl: '/home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

  public nhaxeS: any = [];
  public cols: Col[];
  public selectedColumns: Col[];
  public tenFilter: SelectItem[] = [];
  public phone1Filter: SelectItem[] = [];

  constructor(
    private nhaXeService: NhaXeService
  ) {

    this.nhaXeService.getAllNhaXes().subscribe(
      (nhaXes: any) => {

        this.nhaxeS = nhaXes;
        this.parseNhaXes();
        console.log(4444444444, nhaXes)

      }
    );

    this.cols = [
      {field: 'name', header: 'Tên'},
      {field: 'phone1', header: 'Phone1'},
      {field: 'phone2', header: 'Phone2'},
      {field: 'phone3', header: 'Phone3'},
      {field: 'phone4', header: 'Phone4'},
      {field: 'phone5', header: 'Phone5'},
      {field: 'email1', header: 'Email1'},
      {field: 'email2', header: 'Email2'},
      {field: 'email3', header: 'Email3'},
      {field: 'address1ProvinceName', header: 'Tỉnh/TP 1'},
      {field: 'address1DistrictName', header: 'Quận/Huyện 1'},
      {field: 'address1WardName', header: 'Xã/Phường 1'},
      {field: 'address1VillageName', header: 'Thôn/Xóm 1'},
      {field: 'address2ProvinceName', header: 'Tỉnh/TP 2'},
      {field: 'address2DistrictName', header: 'Quận/Huyện 2'},
      {field: 'address2WardName', header: 'Xã/Phường 2'},
      {field: 'address2VillageName', header: 'Thôn/Xóm 2'}
    ];

    this.selectedColumns = this.cols;

  }

  ngOnInit() {
  }

  parseNhaXes() {

    this.nhaxeS.map(
      (nhaxe: any) => {

        nhaxe.address1ProvinceName = _.get(nhaxe, 'address1Province.name', '');
        nhaxe.address1DistrictName = _.get(nhaxe, 'address1District.name', '');
        nhaxe.address1WardName = _.get(nhaxe, 'address1Ward.name', '');
        nhaxe.address1VillageName = _.get(nhaxe, 'address1Village.name', '');

        nhaxe.address2ProvinceName = _.get(nhaxe, 'address2Province.name', '');
        nhaxe.address2DistrictName = _.get(nhaxe, 'address2District.name', '');
        nhaxe.address2WardName = _.get(nhaxe, 'address2Ward.name', '');
        nhaxe.address2VillageName = _.get(nhaxe, 'address2Village.name', '');

        this.tenFilter.push({
          label: _.get(nhaxe, 'name', ''),
          value: _.get(nhaxe, 'name', '')
        });
        this.phone1Filter.push({
          label: _.get(nhaxe, 'phone1', ''),
          value: _.get(nhaxe, 'phone1', '')
        });

        return nhaxe;

      }
    );

  }

  toggleCols(event: any) {

    let selectedColumns = _.get(event, 'value', []);

    if (selectedColumns.length) {

      this.selectedColumns = selectedColumns;

    } else {

      this.selectedColumns = this.cols;

    }

    console.log(111111, this.selectedColumns)
    console.log(22222, event)

  }

}
