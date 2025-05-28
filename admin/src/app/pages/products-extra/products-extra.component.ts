import { CurrencyPipe } from '@angular/common';
import { Component, OnInit } from '@angular/core';
import { ProductsService } from '../../services/products.service';
import { AgGridModule } from 'ag-grid-angular';
import { AllCommunityModule, ColDef, ModuleRegistry, provideGlobalGridOptions, SizeColumnsToContentStrategy, SizeColumnsToFitGridStrategy, SizeColumnsToFitProvidedWidthStrategy } from 'ag-grid-community';
import { Router } from '@angular/router';
import { ProductsExtrasService } from '../../services/products-extras.service';
ModuleRegistry.registerModules([AllCommunityModule]);
provideGlobalGridOptions({
  theme: "legacy",
});

@Component({
  selector: 'app-products-extra',
  templateUrl: './products-extra.component.html',
  imports: [AgGridModule],
  providers:[ProductsService,CurrencyPipe]
})
export class ProductsExtraComponent implements OnInit {
  public columnDefs = [
    { headerName:"UNIDAD",field: 'unidad',  resizable: true,filter: true,    },
    { headerName:"NOMBRE",field: 'nombre',  resizable: true,filter: true,    },
    { headerName:"DESCRIPCION",field: 'descripcion',  resizable: true,filter: true,    },
    { headerName:"PRECIO",field: 'precio',  resizable: true
      ,valueFormatter: (params) => this.currencyPipe.transform(params.value)
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
constructor(private productsService: ProductsExtrasService,private router:Router,private currencyPipe:CurrencyPipe) { }
ngOnInit(): void {
  // Initialize the grid data
  this.loadProducts();
}

private loadProducts(): void {
  // Simulate fetching data from the ProductsService
  this.productsService.getAllProducts().subscribe(
    (data:any) => {
      this.rowData = data.products;
    },
    (error) => {
      console.error('Error fetching products:', error);
    }
  );
}

onCellClicked(id: number): void {
  // Navigate to the product details page with the selected product ID
  this.router.navigate(['/productos-extras/modify', id]);
}
create(): void {
  // Navigate to the product creation page
  this.router.navigate(['/productos-extras/modify']);
}
}

