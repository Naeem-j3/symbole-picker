<?php

namespace Naeemjm\FilamentSymbolPicker\Components;

use Filament\Forms\Components\Field;

class SymbolPicker extends Field
{
    protected string $view = 'filament-symbol-picker::symbol-picker';

    public static function make(string $name): static
    {
        $static = app(static::class, ['name' => $name]);
        $static->configure();

        return $static;
    }
}
