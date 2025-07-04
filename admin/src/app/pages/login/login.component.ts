import { CommonModule } from '@angular/common';
import { Component, OnInit } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { AuthService } from '../../services/auth.service';
import { Router, RouterLink } from '@angular/router';

@Component({
  selector: 'app-login',
  imports: [CommonModule, FormsModule,RouterLink],
  templateUrl: './login.component.html',
  styleUrl: './login.component.css',
  standalone: true,
  providers: [AuthService],
})
export class LoginComponent {
     email = '';
   password = '';

  constructor(private authService: AuthService,private router:Router) { }
  ngOnInit(): void {

  }
  onSubmit() {
    this.authService.login(this.email, this.password).subscribe({
      next: (response) => {
        this.authService.setUserLoggedIn(response);
        this.router.navigate(['/configuracion-general']);
      },
      error: (error) => {
        console.error('Login failed', error);
      }
    });
    console.log('Login', this.email, this.password);
  }
}
