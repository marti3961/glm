import { Component } from '@angular/core';
import { RouterLink, RouterLinkActive, RouterOutlet } from '@angular/router';

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [RouterOutlet ],//, RouterLink, RouterLinkActive],
  template: `<router-outlet></router-outlet>`,
})
export class AppComponent {}
