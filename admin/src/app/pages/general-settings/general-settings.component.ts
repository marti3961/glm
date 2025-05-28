import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, FormsModule } from '@angular/forms';
import { GeneralSettingsService } from '../../services/general-settings.service';
import { CommonModule } from '@angular/common';


@Component({
  selector: 'app-general-settings',
  imports:[CommonModule,FormsModule],
  templateUrl: './general-settings.component.html',
})
export class GeneralSettingsComponent implements OnInit {
    general_settings = {
      site_name: "",
      site_email: "",
      site_phone: "",
      site_logo: "",
      main_description: "",
      main_keywords: "",
      whatsapp: "",
      address: "",
      facebook: "",
      instagram: "",
      x: "",
      pinterest: "",
      linkedin: "",
  };
  loading = true;
  error = '';

  constructor(
    private settingsService: GeneralSettingsService,
    private fb: FormBuilder
  ) {}

  ngOnInit(): void {
    this.loadSettings();
  }

  loadSettings(): void {
    this.settingsService.getGeneralSettings().subscribe({
      next: (data:any) => {
        this.general_settings = data;
        this.loading = false;
      },
      error: (err) => {
        this.error = 'Failed to load settings';
        this.loading = false;
      }
    });
  }

  updateSettings(): void {
    this.settingsService.updateGeneralSettings(this.general_settings).subscribe({
      next: (res) => alert('Settings updated successfully.'),
      error: (err) => alert('Failed to update settings.')
    });
  }
}
