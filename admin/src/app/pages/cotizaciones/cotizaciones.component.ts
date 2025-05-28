import { Component, OnInit } from '@angular/core';
import { ColDef, SizeColumnsToContentStrategy, SizeColumnsToFitGridStrategy, SizeColumnsToFitProvidedWidthStrategy } from 'ag-grid-community';
import { CurrencyPipe } from '@angular/common';
import { AgGridModule } from 'ag-grid-angular';
import { NgbModal, NgbModalModule } from '@ng-bootstrap/ng-bootstrap';
import { CotizacionViewComponent } from './cotizacion-view.component';
import { CotizacionService } from '../../services/cotizacion.service';
import dayjs from 'dayjs';



@Component({
  selector: 'app-cotizaciones',
  imports: [AgGridModule,NgbModalModule],
     templateUrl: './cotizaciones.component.html',
  providers:[CurrencyPipe]
})
export class CotizacionesComponent implements OnInit {

  public columnDefs = [
    { headerName:"ID Cotizacion",field: 'id',  resizable: true, filter: true,    },
    { headerName:"Nombre",field: 'name',  resizable: true, filter: true,    },
    { headerName:"Email",field: 'email',  resizable: true, filter: true,    },
    { headerName:"Teléfono",field: 'phone', resizable: true, filter: true,    },
    { headerName:"Fecha",field: 'created_at',
      cellRenderer:(data:any)=>{ return dayjs(data.created_at).format("YYYY-MM-DD")}, resizable: true},
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
constructor(private mensajesService: CotizacionService,private modalService:NgbModal) { }
ngOnInit(): void {
  // Initialize the grid data
  this.loadMensajes();
}

  private loadMensajes(): void {
    // Simulate fetching data from the ProductsService
    this.mensajesService.getAllMensajes().subscribe(
      (data:any) => {
        this.rowData = data.cotizaciones;
      },
      (error) => {
        console.error('Error Getting Mensajes:', error);
      }
    );
  }


  openModal(msg:any) {
    const modalRef = this.modalService.open(CotizacionViewComponent,{
      centered: true,
      size: 'xl'
    });
    console.log(JSON.parse(msg.cotizacion_json));
    modalRef.componentInstance.cotizacion = JSON.parse(msg.cotizacion_json);

    // modalRef.result.then((result) => {
    //   console.log('Modal closed with:', result);
    // });
  }
}
