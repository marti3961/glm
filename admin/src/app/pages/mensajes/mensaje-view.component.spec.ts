import { ComponentFixture, TestBed } from '@angular/core/testing';

import { MensajeViewComponent } from './mensaje-view.component';

describe('MensajeViewComponent', () => {
  let component: MensajeViewComponent;
  let fixture: ComponentFixture<MensajeViewComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [MensajeViewComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(MensajeViewComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
