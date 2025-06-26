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

export const routes: Routes = [
  {
    path: '', component: LayoutComponent,
    canActivate: [authGuard],
    children: [
      { path: '', component: DashboardComponent},
      // { path: 'productos', component: ProductsComponent},
      // { path: 'productos/modify', component: ProductModifyComponent},
      // { path: 'productos/modify/:id', component: ProductModifyComponent},
      // { path: 'productos-extras', component: ProductsExtraComponent},
      // { path: 'productos-extras/modify', component: ProductExtraModifyComponent},
      // { path: 'productos-extras/modify/:id', component: ProductExtraModifyComponent},
      { path: 'configuracion-general',component:GeneralSettingsComponent},
      { path: 'sliders',component:SlidersComponent},
      { path: 'sliders/modify', component: SliderModifyComponent},
      { path: 'sliders/modify/:id', component: SliderModifyComponent},
    ]
  },
  { path: 'login', component: LoginComponent },
];
