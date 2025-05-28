import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CotizacionViewComponent } from './cotizacion-view.component';

describe('CotizacionViewComponent', () => {
  let component: CotizacionViewComponent;
  let fixture: ComponentFixture<CotizacionViewComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [CotizacionViewComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(CotizacionViewComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
