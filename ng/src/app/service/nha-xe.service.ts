import {Injectable} from '@angular/core';
import {HttpClient, HttpHeaders} from "@angular/common/http";
import {environment} from "../../environments/environment";

@Injectable({
  providedIn: 'root'
})
export class NhaXeService {

  private readonly API_URL = environment.apiUrl;

  constructor(
    private http: HttpClient
  ) {

  }

  getAllNhaXes() {

    let headers = new HttpHeaders();
    headers.append('Content-Type', 'application/json');

    let params = Object.create(null);

    return this.http.get(
      `${this.API_URL}/nha_xes.json`,
      {
        headers,
        params
      }
    );

  }

}
