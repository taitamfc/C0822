import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { FormsModule } from '@angular/forms';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { AHelloComponent } from './a-hello/a-hello.component';
import { BPropertyComponent } from './b-property/b-property.component';
import { CClassComponent } from './c-class/c-class.component';
import { DEventComponent } from './d-event/d-event.component';
import { ETwoWayComponent } from './e-two-way/e-two-way.component';
import { CustomPipe } from './custom.pipe';
import { ITemplateVariableComponent } from './i-template-variable/i-template-variable.component';
import { KLifeCycleComponent } from './k-life-cycle/k-life-cycle.component';
import { LInputComponent } from './l-input/l-input.component';
import { UTemplateDrivenComponent } from './u-template-driven/u-template-driven.component';
import { VDataDrivenComponent } from './v-data-driven/v-data-driven.component';
import { ReactiveFormsModule} from '@angular/forms';
import { ProductsComponent } from './tutorial-router/products/products.component';
import { ProductComponent } from './tutorial-router/product/product.component';
import { ProductAddComponent } from './tutorial-router/product-add/product-add.component';
import { ProductDeleteComponent } from './tutorial-router/product-delete/product-delete.component';
import { ProductEditComponent } from './tutorial-router/product-edit/product-edit.component';

@NgModule({
  declarations: [
    AppComponent,
    AHelloComponent,
    BPropertyComponent,
    CClassComponent,
    DEventComponent,
    ETwoWayComponent,
    CustomPipe,
    ITemplateVariableComponent,
    KLifeCycleComponent,
    LInputComponent,
    UTemplateDrivenComponent,
    VDataDrivenComponent,
    ProductsComponent,
    ProductComponent,
    ProductAddComponent,
    ProductDeleteComponent,
    ProductEditComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    ReactiveFormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
