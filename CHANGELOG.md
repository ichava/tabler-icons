# Changelog

All notable changes to `ichava/tabler-icons` follow [Keep a Changelog](https://keepachangelog.com/en/1.0.0/) and [Semantic Versioning](https://semver.org/).

## [Unreleased]

### Fixed

- `composer.json` now declares `laranail/package-tools: ^1.0@dev` directly in `require` (was only listed in `repositories`, which left the dep undeclared and would have broken installs without the path repo fallback).
- Test class in `tests/Feature/IconsTest.php` renamed from `TablerIconsTest` to `IconsTest` to match the filename and the class-name convention used by `bundled-icons` and `metronic-icons`.

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
