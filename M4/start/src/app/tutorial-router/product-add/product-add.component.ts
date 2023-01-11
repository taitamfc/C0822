import { Component } from '@angular/core';
import { Product } from "./../../product";
import { ProductService } from "./../../product.service";
import { ActivatedRoute, Router } from '@angular/router';
@Component({
  selector: 'app-product-add',
  templateUrl: './product-add.component.html',
  styleUrls: ['./product-add.component.css']
})
export class ProductAddComponent {
  constructor(
    private _ProductService:ProductService,
    private _Router: Router
  ){

  }

  ngOnInit(){
    this.handleSubmit();
  }

  handleSubmit(){
    let product:Product = {
      name: 'Samsum 2',
      price: 25000
    }
    // Goi service
    this._ProductService.store(product);

    //Chuyen huong ve list
    this._Router.navigate(['/products']);

  }
}
