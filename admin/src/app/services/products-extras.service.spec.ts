import { TestBed } from '@angular/core/testing';

import { ProductsExtrasService } from './products-extras.service';

describe('ProductsExtrasService', () => {
  let service: ProductsExtrasService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(ProductsExtrasService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
