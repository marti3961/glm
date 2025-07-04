import { Component, OnInit } from '@angular/core';
import { ColDef, SizeColumnsToContentStrategy, SizeColumnsToFitGridStrategy, SizeColumnsToFitProvidedWidthStrategy } from 'ag-grid-community';
import { ProyectosService } from '../../services/proyectos.service';
import { Router } from '@angular/router';
import { API_URL } from '../../constants/app.constants';
import { CommonModule } from '@angular/common';
import { AgGridModule } from 'ag-grid-angular';


@Component({
  selector: 'app-proyectos',
  imports: [CommonModule, AgGridModule],
  templateUrl: './proyectos.component.html',
})
export class ProyectosComponent implements OnInit {
  proyectos:any[]=[];
  proyecto:any;
  proyectosType: any[] = ["Principal"];
  public columnDefs = [
        { headerName:"Title",field: 'title',  resizable: true,filter: true,    },
        { headerName:"Description",field: 'description_short',  resizable: true,filter: true,    },
        { headerName:"Ver más",field: '', resizable: true, maxWidth: 100, minWidth: 100,
          cellRenderer: (params:any) => {
            return `<button class="btn btn-primary btn-small"><i class="fa-solid fa-pencil"></i></button>`;
          },
          onCellClicked: (params:any) => {
            this.onCellClicked(params.data.id);
          }
        },
        { headerName:"Eliminar",field: '',  resizable: true, maxWidth: 100, minWidth: 100,
          cellRenderer: (params:any) => {
            return `<button class="btn btn-primary btn-small"><i class="fa-solid fa-trash"></i></button>`;
          },
          onCellClicked: (params:any) => {
            this.delete(params.data.id);
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
  constructor(private svc: ProyectosService,private router:Router) { }

  ngOnInit(): void {
    this.loadProyectos();

  }
  onCellClicked(id: any): void {
    // Navigate to the product details page with the selected product ID
    this.router.navigate(['/proyectos/modify', id]);
  }

  delete(id:any): void {
    if (window.confirm('¿Estás seguro de que deseas eliminar este proyecto?')) {
      this.svc.deleteProjectById(id).subscribe(
      (response:any) => {
        console.log('Proyecto eliminado:', response);
        this.loadProyectos(); // Reload the projects after deletion
      },
      (error:any) => {
        console.error('Error al eliminar el proyecto:', error);
      }
      );
    }
  }
  addNew(): void {
    this.router.navigate(['/proyectos/modify']);
  }

  loadProyectos(){
    this.svc.getAllProjects().subscribe(
    (data:any) => {
      this.rowData = data.sort((a:any,b:any)=> Number(a.position)-Number(b.position));
    },
    (error) => {
      console.error('Error al cargar los proyectos:', error);
    }
  );
  }

  cancel(){}
  editSlider(){}
}
