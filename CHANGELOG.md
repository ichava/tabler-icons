# Changelog

All notable changes to `ichava/tabler-icons` follow [Keep a Changelog](https://keepachangelog.com/en/1.0.0/) and [Semantic Versioning](https://semver.org/).

## [1.0.0] - 2026-05-05

### Added

- Tabler Icons 3.x: 5,900+ pixel-perfect icons (4,900+ outline / 1,000+ filled).
- Customisable stroke width (1–3px) on outline variants via the `stroke-width` Blade attribute.
- `<x-tabler-icons-icon>` Blade component, plus support for the generic `<x-ichava::icon>` form.
- `ichava:update-tabler-icons` Artisan command to pull a fresh archive from the upstream repository.
- Type-safe `Variant` enum (`OUTLINE`, `FILLED`) under `Simtabi\Laranail\Ichava\TablerIcons\Enums`.

### Requirements

- PHP 8.3+ (8.4 supported)
- Laravel 13.x
- `ichava/core` ^1.0
