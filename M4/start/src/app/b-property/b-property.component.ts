import { Component } from '@angular/core';

@Component({
  selector: 'app-b-property',
  templateUrl: './b-property.component.html',
  styleUrls: ['./b-property.component.css']
})
export class BPropertyComponent {
  imageUrl:string = 'https://www.simplilearn.com/ice9/free_resources_article_thumb/NodeJS.png';
  imageAlt:string = 'Nice Image';
}
