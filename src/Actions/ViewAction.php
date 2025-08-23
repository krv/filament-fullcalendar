<?php

declare(strict_types=1);

namespace Saade\FilamentFullCalendar\Actions;

use Filament\Actions\ViewAction as BaseViewAction;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;

class ViewAction extends BaseViewAction
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->model(
            fn (FullCalendarWidget $livewire) => $livewire->getModel()
        );

        $this->record(
            fn (FullCalendarWidget $livewire) => $livewire->getRecord()
        );

        $this->form(
            fn (FullCalendarWidget $livewire) => $livewire->getFormSchema()
        );

        $this->cancelParentActions();
    }
}
