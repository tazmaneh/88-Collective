import { componentFactoryName } from '@angular/compiler';
import { Path } from '@angular-devkit/core/src';
import { patch } from 'webdriver-js-extender/built/lib';
import { CarouselComponent } from './components/carousel/carousel.component';
import { WelcomeComponent } from "./components/welcome/welcome.component";


import { NgModule } from "@angular/core";
import { RouterModule, Routes } from "@angular/router";

const routes: Routes = [
  { path: "", redirectTo: "/welcome", pathMatch: "full" },
  { path: "welcome", component: WelcomeComponent },
  {path:"carousel", component: CarouselComponent}
 
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule {}
