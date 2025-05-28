import { bootstrapApplication } from '@angular/platform-browser';
import { provideRouter } from '@angular/router';
import { AppComponent } from './app/app.component';
import { routes } from './app/app.routes';
import { provideHttpClient } from '@angular/common/http';
import '../src/app/ag-grid-setup'; // <== Just one line here!


bootstrapApplication(AppComponent, {
  providers: [provideRouter(routes), provideHttpClient()],
});
