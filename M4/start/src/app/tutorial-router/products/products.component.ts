import { Component } from '@angular/core';
import { Product } from "./../../product";
import { ProductService } from "./../../product.service";

@Component({
  selector: 'app-products',
  templateUrl: './products.component.html',
  styleUrls: ['./products.component.css']
})
export class ProductsComponent {
  products:Product[] = [];

  constructor(
    private _ProductService:ProductService
  ){

  }
  ngOnInit(){
    this.products = this._ProductService.all();
    console.log(this.products);
  }
}
