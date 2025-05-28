import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ProductsExtraComponent } from './products-extra.component';

describe('ProductsExtraComponent', () => {
  let component: ProductsExtraComponent;
  let fixture: ComponentFixture<ProductsExtraComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [ProductsExtraComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ProductsExtraComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
