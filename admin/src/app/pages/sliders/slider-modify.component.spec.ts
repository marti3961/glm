import { ComponentFixture, TestBed } from '@angular/core/testing';

import { SliderModifyComponent } from './slider-modify.component';

describe('SliderModifyComponent', () => {
  let component: SliderModifyComponent;
  let fixture: ComponentFixture<SliderModifyComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [SliderModifyComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(SliderModifyComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
