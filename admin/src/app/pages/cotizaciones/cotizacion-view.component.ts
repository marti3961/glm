import { Component, Input } from '@angular/core';
import { NgbActiveModal, NgbModalModule } from '@ng-bootstrap/ng-bootstrap';
import { CommonModule } from '@angular/common';
import dayjs from 'dayjs';


@Component({
  selector: 'app-cotizacion-view',
  imports: [CommonModule,NgbModalModule],
  templateUrl: './cotizacion-view.component.html'
})
export class CotizacionViewComponent  {
  @Input() cotizacion: any;

  constructor(public modalRef: NgbActiveModal) {}

  closeModal() {
    this.modalRef.close('Some data');
  }
}
