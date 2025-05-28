export class Product {
  id: number  = 0;
  unidad: string = '';
  resistencia: string = '';
  descripcion: string= '';
  precio: number= 0;
  created_at: string= '';
  updated_at: string= '';
  deleted_at: string | null = null;
}

export class ProductExtra {
  id: number  = 0;
  unidad: string = '';
  nombre: string = '';
  descripcion: string= '';
  precio: number= 0;
  created_at: string= '';
  updated_at: string= '';
  deleted_at: string | null = null;
}
