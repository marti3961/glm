import { Component, OnInit } from '@angular/core';
import { ColDef, SizeColumnsToContentStrategy, SizeColumnsToFitGridStrategy, SizeColumnsToFitProvidedWidthStrategy } from 'ag-grid-community';
import { Router } from '@angular/router';
import { API_URL } from '../../constants/app.constants';
import { TestimoniosService } from '../../services/testimonios.service';
import { AgGridModule } from 'ag-grid-angular';
import { CommonModule } from '@angular/common';

@Component({
  selector: 'app-testimonios',
  imports: [CommonModule,AgGridModule],
  templateUrl: './testimonios.component.html',
  styleUrl: './testimonios.component.css'
})
export class TestimoniosComponent  implements OnInit {
  testimonios:any[]=[];
  testimonio:any;
  testimoniosType: any[] = ["Principal"];
  public columnDefs = [
        { field: 'orden', headerName: 'Orden', flex: 1, minWidth: 100 },
        {
          field: 'uri',
          headerName: 'Video',
          flex: 3,
          minWidth: 320,
          autoHeight: true, // Important for content like iframes to adjust row height
          suppressMovable: true,
          resizable: true,
        },
        { field: 'updated_at', headerName: 'Fecha de Modificación', flex: 2, minWidth: 180 },
        { field: 'active', headerName: 'Activo', flex: 2, minWidth: 180,
          cellRenderer: (params:any) => {
            return params.value == '1' ? '<i class="fa-solid fa-check"></i>' : '<i class="fa-solid fa-xmark"></i>';
          },
          cellClass: (params:any) => {
            return params.value === '1'? 'text-success' : 'text-danger';
          }
         },
        { headerName:"Ver más",field: '',  resizable: true,

          cellRenderer: (params:any) => {
            return `<button class="btn btn-primary btn-small"><i class="fa-solid fa-pencil"></i></button>`;
          },
          onCellClicked: (params:any) => {
            this.onCellClicked(params.data.id);
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
  constructor(private svc: TestimoniosService,private router:Router) { }

  ngOnInit(): void {
    this.loadTestimonios();

  }
  onCellClicked(id: number): void {
    // Navigate to the product details page with the selected product ID
    this.router.navigate(['/testimonios/modify', id]);
  }

  loadTestimonios(){
    this.svc.getAllTestimonios().subscribe(
    (data:any) => {
      this.rowData = data.sort((a:any,b:any)=> Number(a.orden)-Number(b.orden));
    },
    (error) => {
      console.error('Error fetching products:', error);
    }
  );
  }

  cancel(){}
  editTestimonio(){}
}
