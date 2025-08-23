<?php

declare(strict_types=1);

namespace Saade\FilamentFullCalendar;

use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Assets\Css;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentFullCalendarServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-fullcalendar';

    public static string $viewNamespace = 'filament-fullcalendar';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasViews()
            ->hasAssets();
    }

    public function packageBooted(): void
    {
        $this->loadAssets();
    }

    protected function loadAssets(): void
    {
        $this->loadAlpineComponents();
        $this->loadStylesheets();
    }

    protected function loadAlpineComponents(): void
    {
        AlpineComponent::make('filament-fullcalendar-alpine', __DIR__ . '/../dist/filament-fullcalendar.js')
            ->loadedOnRequest();
    }

    protected function loadStylesheets(): void
    {
        Css::make('filament-fullcalendar-styles', __DIR__ . '/../dist/filament-fullcalendar.css')
            ->loadedOnRequest();
    }
}
