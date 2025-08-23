# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [4.0.0] - 2024-01-XX

### Added
- Filament v4 compatibility
- Strict types declarations throughout the codebase
- New asset registration system using Filament v4's asset loading
- Updated action system to use Filament v4's action handling

### Changed
- **BREAKING**: Updated minimum PHP requirement to 8.2+
- **BREAKING**: Updated minimum Laravel requirement to 11+
- **BREAKING**: Updated minimum Filament requirement to 4.0+
- **BREAKING**: Updated service provider to use new Filament v4 asset registration
- **BREAKING**: Updated widget to use new Filament v4 widget structure
- **BREAKING**: Updated actions to use new Filament v4 action system
- **BREAKING**: Updated concerns to use new method names (`getHeaderActions()`, `getModalActions()`)
- **BREAKING**: Updated Blade template to use new asset loading system
- **BREAKING**: Updated package.json to use Filament v4 purge command
- **BREAKING**: Removed deprecated FilamentAsset facade usage
- **BREAKING**: Updated plugin interface to use new Filament v4 plugin system

### Removed
- Support for PHP 8.1 and below
- Support for Laravel 10 and below
- Support for Filament 3.x
- Deprecated asset registration methods
- Deprecated action handling methods

## [3.0.0] - 2023-XX-XX

### Added
- Initial release for Filament v3
- FullCalendar v6 integration
- Event creation, editing, and deletion
- Drag and drop events
- Resize events
- Date selection for creating events
- Resource scheduling support
- Multiple calendar views
- Localization support
- Timezone support
- Customizable styling

### Changed
- **BREAKING**: Updated to Filament v3
- **BREAKING**: Updated to FullCalendar v6
- **BREAKING**: Updated minimum PHP requirement to 8.1+
- **BREAKING**: Updated minimum Laravel requirement to 10+

## [2.0.0] - 2022-XX-XX

### Added
- Filament v2 compatibility
- FullCalendar v5 integration

### Changed
- **BREAKING**: Updated to Filament v2
- **BREAKING**: Updated to FullCalendar v5

## [1.0.0] - 2021-XX-XX

### Added
- Initial release for Filament v1
- FullCalendar v4 integration
- Basic calendar functionality
