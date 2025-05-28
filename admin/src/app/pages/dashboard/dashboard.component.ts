import { Component, OnInit } from '@angular/core';
import { MensajesService } from '../../services/mensajes.service';
import { CotizacionService } from '../../services/cotizacion.service';
import { ProductsExtrasService } from '../../services/products-extras.service';
import { ProductsService } from '../../services/products.service';

@Component({
  standalone: true,
  selector: 'app-dashboard',
  templateUrl: './dashboard.component.html',

})
export class DashboardComponent  implements OnInit {
  numberMesajes:number = 0;
  numberCotizaciones:number = 0;
  numberProducts:number = 0;
  numberExtras:number = 0;

  constructor(private mensajesService: MensajesService,
    private cotizacionesService:CotizacionService
  , private pesvc:ProductsExtrasService
  , private psvc:ProductsService) { }
  ngOnInit(): void {
    this.loadMensajes();
    this.loadCotizaciones();
    this.loadProducts();
    this.loadExtras();
  }


  loadProducts(){
    this.psvc.getAllProducts().subscribe(
      (data:any) => {
        this.numberProducts = data.products.length;
      },
      (error) => {
        console.error('Error Getting Products:', error);
      }
    );
  }

  loadExtras(){
    this.pesvc.getAllProducts().subscribe(
      (data:any) => {
        this.numberExtras = data.products.length;
      },
      (error) => {
        console.error('Error Getting Products:', error);
      }
    );
  }


  loadMensajes(){
    this.mensajesService.getAllMensajes().subscribe(
      (data:any) => {
        this.numberMesajes = data.mensajes.length;
      },
      (error) => {
        console.error('Error Getting Mensajes:', error);
      }
    );
  }
  loadCotizaciones(){
    this.cotizacionesService.getAllMensajes().subscribe(
      (data:any) => {
        this.numberCotizaciones = data.cotizaciones.length;
      },
      (error) => {
        console.error('Error Getting Cotizaciones:', error);
      }
    );
  }

}
