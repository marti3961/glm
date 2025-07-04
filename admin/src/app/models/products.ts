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

export class YouTubeVideo {
    private _url: string = "";
    private youtubeid: string = "";

    constructor(url: string = "") {
      const rgx = new RegExp(
        `(?:youtu\\.be/|youtube\\.com/(?:watch\\?v=|embed/|v/|.*[?&]v=))([a-zA-Z0-9_-]{11})`,
        'i'
      );
      if (!url) { return; }
      const match = url.match(rgx);
      this.youtubeid = match && match[1].length === 11 ? match[1] : url;
      this._url = url;
    }

    get url(): string {
      return this._url;
    }

    get id(): string {
      return this.youtubeid;
    }

    get thumbnail(): string {
      return `https://i.ytimg.com/vi/${this.id}/hqdefault.jpg`;
    }

    embed(): string {
      return `https://www.youtube.com/embed/${this.id}`; // ?autoplay=1`;
    }
  }

















