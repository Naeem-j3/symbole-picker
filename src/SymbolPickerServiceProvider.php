<?php

namespace YourVendor\FilamentSymbolPicker;

use Illuminate\Support\ServiceProvider;
use naeemjm\FilamentSymbolPicker\Components\SymbolPicker;

class SymbolPickerServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Register the Blade view namespace
        $this->loadViewsFrom(__DIR__.'/Resources/views', 'filament-symbol-picker');

        // Register the SymbolPicker component
        \Filament\Forms\Components\Component::macro('symbolPicker', function (string $name): SymbolPicker {
            return SymbolPicker::make($name);
        });
    }
}
