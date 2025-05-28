import { Component } from '@angular/core';
import { RouterLink, RouterOutlet } from '@angular/router';
import { AuthService } from '../services/auth.service';

@Component({
  selector: 'app-layout',
  imports: [RouterOutlet,RouterLink],
  templateUrl: './layout.component.html',
  styleUrl: './layout.component.css',
  providers: [AuthService],
})
export class LayoutComponent {
  usuario: any;
  constructor(public svc:AuthService) { }
  ngOnInit() {
    this.usuario = this.svc.getUserLoggedIn();
  }
  logout() {
    this.svc.logout();
  }
}
