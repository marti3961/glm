import { Component, OnInit } from '@angular/core';
import { ColDef, SizeColumnsToContentStrategy, SizeColumnsToFitGridStrategy, SizeColumnsToFitProvidedWidthStrategy } from 'ag-grid-community';
import { MensajesService } from '../../services/mensajes.service';
import { CurrencyPipe } from '@angular/common';
import { AgGridModule } from 'ag-grid-angular';
import { NgbModal, NgbModalModule } from '@ng-bootstrap/ng-bootstrap';
import { MensajeViewComponent } from './mensaje-view.component';

@Component({
  selector: 'app-mensajes',
  imports: [AgGridModule,NgbModalModule],
  templateUrl: './mensajes.component.html',
  providers:[CurrencyPipe]
})
export class MensajesComponent implements OnInit {

  public columnDefs = [
    { headerName:"Nombre",field: 'nombre',  resizable: true,filter: true,    },
    { headerName:"Apellidos",field: 'apellidos',  resizable: true,filter: true,    },
    { headerName:"Empresa",field: 'empresa', resizable: true,filter: true,    },
    { headerName:"Teléfono",field: 'telefono', resizable: true,filter: true,    },
    { headerName:"Asunto",field: 'asunto', resizable: true,filter: true,    },
    { headerName:"Ver más",field: '',  resizable: true,

      cellRenderer: (params:any) => {
        return `<button class="btn btn-primary btn-small"><i class="fa-solid fa-eye"></i></button>`;
      },
      onCellClicked: (params:any) => {
        this.openModal(params.data);
      }
    },
  ] as ColDef[];
  rowData: any;
  autoSizeStrategy:
  | SizeColumnsToFitGridStrategy
  | SizeColumnsToFitProvidedWidthStrategy
  | SizeColumnsToContentStrategy = {
      type: "fitGridWidth",
      defaultMinWidth: 100,
      columnLimits: [
        {
          colId: "country",
          minWidth: 900,
        },
      ],
};
constructor(private mensajesService: MensajesService,private modalService:NgbModal) { }
ngOnInit(): void {
  // Initialize the grid data
  this.loadMensajes();
}

  private loadMensajes(): void {
    // Simulate fetching data from the ProductsService
    this.mensajesService.getAllMensajes().subscribe(
      (data:any) => {
        this.rowData = data.mensajes;
      },
      (error) => {
        console.error('Error Getting Mensajes:', error);
      }
    );
  }


  openModal(msg:any) {
    const modalRef = this.modalService.open(MensajeViewComponent,{
      centered: true
    });
    modalRef.componentInstance.mensaje = msg;

    // modalRef.result.then((result) => {
    //   console.log('Modal closed with:', result);
    // });
  }
}
