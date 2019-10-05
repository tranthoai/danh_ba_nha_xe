import {BrowserModule} from '@angular/platform-browser';
import {BrowserAnimationsModule} from '@angular/platform-browser/animations';
import {
  CUSTOM_ELEMENTS_SCHEMA,
  NgModule
} from '@angular/core';
import {
  AutoCompleteModule,
  ButtonModule,
  CalendarModule,
  ConfirmDialogModule,
  DialogModule,
  DropdownModule,
  InplaceModule,
  InputTextareaModule,
  InputTextModule,
  ListboxModule,
  MenuModule,
  MessageModule,
  MessagesModule,
  MultiSelectModule,
  OverlayPanelModule,
  SliderModule,
  RadioButtonModule,
  EditorModule,
  AccordionModule,
  ChipsModule
} from 'primeng/primeng';

import {TableModule} from 'primeng/table'
import {AppRoutingModule} from './app-routing.module';
import {AppComponent} from './app.component';
import {HttpClientModule} from "@angular/common/http";
import {HomeComponent} from './component/home/home.component';

@NgModule({
  declarations: [
    AppComponent,
    HomeComponent
  ],
  imports: [
    BrowserModule,
    BrowserAnimationsModule,
    AppRoutingModule,
    HttpClientModule,
    TableModule,
    InputTextModule,
    MultiSelectModule
  ],
  providers: [],
  bootstrap: [AppComponent],
  schemas: [CUSTOM_ELEMENTS_SCHEMA]
})
export class AppModule {
}
