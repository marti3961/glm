import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ProductExtraModifyComponent } from './product-extra-modify.component';

describe('ProductExtraModifyComponent', () => {
  let component: ProductExtraModifyComponent;
  let fixture: ComponentFixture<ProductExtraModifyComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [ProductExtraModifyComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ProductExtraModifyComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
