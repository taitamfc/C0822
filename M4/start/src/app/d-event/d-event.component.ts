import { Component } from '@angular/core';

@Component({
  selector: 'app-d-event',
  templateUrl: './d-event.component.html',
  styleUrls: ['./d-event.component.css']
})
export class DEventComponent {
  name:string = '';

  handleClick():void {
    alert(123);
  }

  handleKeyup( event:any ):void{
    console.log(event);
    this.name = event.target.value
  }

}
