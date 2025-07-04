import { RouterModule, Routes } from '@angular/router';
import { LayoutComponent } from './layout/layout.component';
import { UsersComponent } from './pages/users/users.component';
import { DashboardComponent } from './pages/dashboard/dashboard.component';
import { LoginComponent } from './pages/login/login.component';
import { authGuard } from './guards/auth.guard';
import { ProductsComponent } from './pages/products/products.component';
import { ProductModifyComponent } from './pages/products/product-modify.component';
import { ProductsExtraComponent } from './pages/products-extra/products-extra.component';
import { ProductExtraModifyComponent } from './pages/products-extra/product-extra-modify.component';
import { MensajesComponent } from './pages/mensajes/mensajes.component';
import { CotizacionesComponent } from './pages/cotizaciones/cotizaciones.component';
import { SlidersComponent } from './pages/sliders/sliders.component';
import { SliderModifyComponent } from './pages/sliders/slider-modify.component';
import { GeneralSettingsComponent } from './pages/general-settings/general-settings.component';
import { TestimoniosComponent } from './pages/testimonios/testimonios.component';
import { TestimonioModifyComponent } from './pages/testimonios/testimonio-modify.component';
import { ProyectosComponent } from './pages/proyectos/proyectos.component';
import { ProyectosModifyComponent } from './pages/proyectos/proyectos-modify.component';

export const routes: Routes = [
  {
    path: '', component: LayoutComponent,
    canActivate: [authGuard],
    children: [
      { path: '', component: DashboardComponent},
      { path: 'configuracion-general',component:GeneralSettingsComponent},
      { path: 'sliders',component:SlidersComponent},
      { path: 'sliders/modify', component: SliderModifyComponent},
      { path: 'sliders/modify/:id', component: SliderModifyComponent},
      { path: 'proyectos', component: ProyectosComponent},
      { path: 'proyectos/modify', component: ProyectosModifyComponent},
      { path: 'proyectos/modify/:id', component: ProyectosModifyComponent},
      { path: 'testimonios', component: TestimoniosComponent},
      { path: 'testimonios/modify', component: TestimonioModifyComponent},
      { path: 'testimonios/modify/:id', component: TestimonioModifyComponent},
    ]
  },
  { path: 'login', component: LoginComponent },
];
