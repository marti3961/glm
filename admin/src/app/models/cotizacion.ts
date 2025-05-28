export interface DetalleCampo {
  nombre: string;
  valor: string | number;
}

export interface ClienteDetalles {
  nombre: DetalleCampo;
  email: DetalleCampo;
  telefono: DetalleCampo;
}

export interface CostoConcreto {
  cantidad: number;
  nombre: string;
  costo_unitario: number;
  valor: number;
}

export interface ExtraDetalle {
  cantidad: number;
  nombre: string;
  precio_unitario: number;
  total: number;
}

export interface CostoExtras {
  detalles: ExtraDetalle[];
}

export interface DetallePrecios {
  detalles_cliente: ClienteDetalles;
  cotizacion_id: DetalleCampo;
  cotizacion_date: DetalleCampo;
  costo_concreto: CostoConcreto;
  costo_extras: CostoExtras;
  costo_tipo_tiro: DetalleCampo;
  costo_total: DetalleCampo;
}

export class Cotizacion {
  detalle_precios: DetallePrecios;

  constructor(data: DetallePrecios) {
    this.detalle_precios = data;
  }
}
