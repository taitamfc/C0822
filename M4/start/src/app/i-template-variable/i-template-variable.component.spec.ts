import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ITemplateVariableComponent } from './i-template-variable.component';

describe('ITemplateVariableComponent', () => {
  let component: ITemplateVariableComponent;
  let fixture: ComponentFixture<ITemplateVariableComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ITemplateVariableComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ITemplateVariableComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
