# Filament FullCalendar

The Most Popular JavaScript Calendar integrated with Filament 💛

## Requirements

- PHP 8.2+
- Laravel 11+
- Filament 4.0+

## Installation

You can install the package via composer:

```bash
composer require saade/filament-fullcalendar
```

## Usage

### 1. Create a Widget

Create a new widget that extends `FullCalendarWidget`:

```php
<?php

namespace App\Filament\Widgets;

use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
use Saade\FilamentFullCalendar\Data\EventData;
use App\Models\Event;

class CalendarWidget extends FullCalendarWidget
{
    protected function getModel(): string
    {
        return Event::class;
    }

    public function fetchEvents(array $info): array
    {
        return Event::query()
            ->where('start', '>=', $info['start'])
            ->where('end', '<=', $info['end'])
            ->get()
            ->map(function (Event $event) {
                return EventData::make()
                    ->id($event->id)
                    ->title($event->title)
                    ->start($event->start)
                    ->end($event->end)
                    ->allDay($event->all_day)
                    ->toArray();
            })
            ->toArray();
    }

    public function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('title')
                ->required(),
            Forms\Components\DateTimePicker::make('start')
                ->required(),
            Forms\Components\DateTimePicker::make('end')
                ->required(),
            Forms\Components\Toggle::make('all_day')
                ->label('All Day'),
        ];
    }
}
```

### 2. Register the Widget

Register your widget in your panel provider:

```php
<?php

namespace App\Providers;

use App\Filament\Widgets\CalendarWidget;
use Filament\Panel;
use Filament\PanelProvider;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->widgets([
                CalendarWidget::class,
            ]);
    }
}
```

### 3. Configure the Plugin (Optional)

You can configure the FullCalendar plugin in your panel provider:

```php
<?php

namespace App\Providers;

use Saade\FilamentFullCalendar\FilamentFullCalendarPlugin;
use Filament\Panel;
use Filament\PanelProvider;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->plugin(
                FilamentFullCalendarPlugin::make()
                    ->timezone('UTC')
                    ->locale('en')
                    ->editable(true)
                    ->selectable(true)
                    ->config([
                        'headerToolbar' => [
                            'left' => 'prev,next today',
                            'center' => 'title',
                            'right' => 'dayGridMonth,timeGridWeek,timeGridDay',
                        ],
                    ])
            );
    }
}
```

## Features

- ✅ FullCalendar v6 integration
- ✅ Event creation, editing, and deletion
- ✅ Drag and drop events
- ✅ Resize events
- ✅ Date selection for creating events
- ✅ Resource scheduling support
- ✅ Multiple calendar views
- ✅ Localization support
- ✅ Timezone support
- ✅ Customizable styling
- ✅ Filament v4 compatible

## Configuration

### Plugin Configuration

The plugin supports the following configuration options:

```php
FilamentFullCalendarPlugin::make()
    ->timezone('UTC')                    // Set timezone
    ->locale('en')                       // Set locale
    ->editable(true)                     // Enable event editing
    ->selectable(true)                   // Enable date selection
    ->plugins(['dayGrid', 'timeGrid'])   // Configure plugins
    ->config([                           // Custom FullCalendar config
        'headerToolbar' => [
            'left' => 'prev,next today',
            'center' => 'title',
            'right' => 'dayGridMonth,timeGridWeek,timeGridDay',
        ],
    ])
```

### Widget Configuration

Your widget can override the following methods:

- `getModel()` - Return the model class for events
- `fetchEvents(array $info)` - Return events for the given date range
- `fetchResources(array $info)` - Return resources for resource scheduling
- `getFormSchema()` - Return the form schema for creating/editing events
- `getHeaderActions()` - Return header actions
- `getModalActions()` - Return modal actions

## Events

The widget provides several event handlers:

- `onEventClick(array $event)` - Called when an event is clicked
- `onEventDrop(array $event, array $oldEvent, ...)` - Called when an event is dropped
- `onEventResize(array $event, array $oldEvent, ...)` - Called when an event is resized
- `onDateSelect(string $start, ?string $end, bool $allDay, ...)` - Called when a date is selected

## Styling

The package includes Tailwind CSS styles that are automatically loaded. You can customize the appearance by overriding the CSS classes or by providing custom styles.

## Contributing

Please see [CONTRIBUTING.md](CONTRIBUTING.md) for details.

## Credits

- [Saade](https://github.com/saade)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
