import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  appTitle = 'Xin chao cac ban';
  books:any[] = ['Van','Su','Dia'];

  appHandleClick(event:any){
    alert('appHandleClick : ' + event);
  }
}
