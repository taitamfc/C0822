import { Component, EventEmitter, Input, Output } from '@angular/core';

@Component({
  selector: 'app-l-input',
  templateUrl: './l-input.component.html',
  styleUrls: ['./l-input.component.css']
})
export class LInputComponent {
  @Input('title') title:any;
  @Input('image') image:any;
  @Input('price') price:any;
  @Output('gateOne') gateOne = new EventEmitter<any>();

  ngOnInit(){
    console.log(this.title);
  }

  handleClick(){
    // alert('handleClick');
    this.gateOne.emit(this.title);
  }
}
