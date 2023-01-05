import { Component } from '@angular/core';

@Component({
  selector: 'app-i-template-variable',
  templateUrl: './i-template-variable.component.html',
  styleUrls: ['./i-template-variable.component.css']
})
export class ITemplateVariableComponent {
    
    handleClick(name:any):void {
      alert(name)
    } 
}
