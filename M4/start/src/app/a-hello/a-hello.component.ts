import { Component } from '@angular/core';

@Component({
  selector: 'app-a-hello',
  templateUrl: './a-hello.component.html'
})
export class AHelloComponent {
  
  name:string = 'Nguyen Van A';
  age:number = 18;

  handleClick():void{
    alert(123);
  }

}
