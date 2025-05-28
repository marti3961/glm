
import { AllCommunityModule, ModuleRegistry, provideGlobalGridOptions } from 'ag-grid-community';

// Register AG Grid modules globally ONCE
ModuleRegistry.registerModules([AllCommunityModule]);

// Set global options like default theme
provideGlobalGridOptions({
  theme: 'legacy',//
});
