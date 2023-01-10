import { Component } from '@angular/core';

@Component({
  selector: 'app-u-template-driven',
  templateUrl: './u-template-driven.component.html',
  styleUrls: ['./u-template-driven.component.css']
})
export class UTemplateDrivenComponent {
  onSubmit(value:any){
    console.log(value);
  }
}
