import { ComponentFixture, TestBed } from '@angular/core/testing';

import { TestimonioModifyComponent } from './testimonio-modify.component';

describe('TestimonioModifyComponent', () => {
  let component: TestimonioModifyComponent;
  let fixture: ComponentFixture<TestimonioModifyComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [TestimonioModifyComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(TestimonioModifyComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
