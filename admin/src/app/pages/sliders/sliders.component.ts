import { CommonModule, CurrencyPipe } from '@angular/common';
import { Component, OnInit } from '@angular/core';
import { AgGridModule } from 'ag-grid-angular';
import { ColDef, SizeColumnsToContentStrategy, SizeColumnsToFitGridStrategy, SizeColumnsToFitProvidedWidthStrategy } from 'ag-grid-community';
import { SlidersService } from '../../services/sliders.service';
import { Router } from '@angular/router';
import { API_URL } from '../../constants/app.constants';

@Component({
  selector: 'app-sliders',
  imports: [CommonModule,AgGridModule],
  templateUrl: './sliders.component.html',
  styleUrl: './sliders.component.css'
})
export class SlidersComponent implements OnInit {
  sliders:any[]=[];
  slider:any;
  slidersType: any[] = ["Principal"];
  public columnDefs = [
        { headerName:"Posición",field: 'position',  resizable: true,filter: true,    },
        { headerName:"Image",field: 'image',  resizable: true,filter: true,
          cellRenderer:(params:any)=>{
            return  `<img class="img-fluid" src="${API_URL}${params.data.image}" />`;
          }
        },
        { headerName:"Title",field: 'title',  resizable: true,filter: true,    },
        { headerName:"SubTitle",field: 'subtitle',  resizable: true,filter: true,    },
        { headerName:"Botón Principal",field: 'button1_text',  resizable: true,filter: true,    },
        { headerName:"Botón Secundario",field: 'button2_text',  resizable: true,filter: true,    },
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
  constructor(private sliderService: SlidersService,private router:Router) { }

  ngOnInit(): void {
    this.loadSliders();

  }
  onCellClicked(id: number): void {
    // Navigate to the product details page with the selected product ID
    this.router.navigate(['/sliders/modify', id]);
  }

  loadSliders(){
    this.sliderService.getAllSliders().subscribe(
    (data:any) => {
      this.rowData = data.sort((a:any,b:any)=> Number(a.position)-Number(b.position));
    },
    (error) => {
      console.error('Error fetching products:', error);
    }
  );
  }

  cancel(){}
  editSlider(){}
}
