import { Component, Input } from '@angular/core';
import { Mensaje } from '../../models/mensajes';
import { NgbActiveModal, NgbModalModule } from '@ng-bootstrap/ng-bootstrap';
import { CommonModule } from '@angular/common';

@Component({
  selector: 'app-mensaje-view',
  imports: [CommonModule,NgbModalModule],
  templateUrl: './mensaje-view.component.html',
  providers:[]
})
export class MensajeViewComponent{
  @Input() mensaje: Mensaje| null = null;

  constructor(public modalRef: NgbActiveModal) {}

  closeModal() {
    this.modalRef.close('Some data');
  }
}
