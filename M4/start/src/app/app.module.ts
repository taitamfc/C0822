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

@NgModule({
  declarations: [
    AppComponent,
    AHelloComponent,
    BPropertyComponent,
    CClassComponent,
    DEventComponent,
    ETwoWayComponent,
    CustomPipe,
    ITemplateVariableComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
