# Changelog

All notable changes to `ichava/tabler-icons` follow [Keep a Changelog](https://keepachangelog.com/en/1.0.0/) and [Semantic Versioning](https://semver.org/).

## [Unreleased]

### Added

- `upstream` block in `resources/assets/svg/config.json` participating in core's `ichava:icons:check-updates` tracker. Source is npm (`@tabler/icons`); registry-based polling avoids GitHub's 60/hour anonymous limit. CDN URL templates (jsdelivr, unpkg, github_raw) registered for runtime use.

### Changed

- Legacy `config.updater` block removed in favour of the canonical top-level `upstream` block defined by core's tracker schema.

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
