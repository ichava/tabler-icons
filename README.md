# Tabler Icons for Laravel

[![Latest Version](https://img.shields.io/packagist/v/ichava/tabler-icons.svg)](https://packagist.org/packages/ichava/tabler-icons)
[![License](https://img.shields.io/packagist/l/ichava/tabler-icons.svg)](LICENSE)
[![PHP Version](https://img.shields.io/packagist/php-v/ichava/tabler-icons.svg)](https://packagist.org/packages/ichava/tabler-icons)

5,900+ free MIT-licensed SVG icons from [Tabler Icons](https://tabler-icons.io) packaged for the [Ichava ecosystem](https://github.com/ichava/documentation). Outline + filled variants. Customisable stroke widths. Auto-updatable from upstream.

> Built on [`ichava/core`](https://github.com/ichava/core). See the [main documentation](https://github.com/ichava/documentation) for everything that applies to all icon packs.

## Install

```bash
composer require ichava/core ichava/tabler-icons
```

The provider auto-registers via Laravel package discovery. Seed the icon database:

```bash
php artisan ichava:database seed --package=ichava/tabler-icons
```

For the visual icon browser, also install [`ichava/browser`](https://github.com/ichava/browser).

## Quick example

Blade component:

```blade
<x-ichava::icon name="ichava/tabler-icons::home" class="w-6 h-6" />
<x-ichava::icon name="ichava/tabler-icons::filled/heart" class="w-6 h-6 text-red-500" />
```

Fluent helper:

```blade
{{ ichava('ichava/tabler-icons::home')->color('#4338ca')->class('w-6 h-6') }}
```

Custom stroke width (outline variant only):

```blade
<x-ichava::icon name="ichava/tabler-icons::home" stroke-width="1.5" class="w-6 h-6" />
```

## Pack-specific docs

Vendor-specific deep dives live in this repo under [`docs/`](docs/):

- [Variants](docs/variants.md), outline + filled
- [Customisation](docs/customization.md), stroke width, currentColor, sizing
- [Attribution](docs/attribution.md), upstream Tabler credits + MIT terms

## Ecosystem docs

For things that apply to every Ichava icon pack:

- [Icon path format](https://github.com/ichava/documentation/blob/main/core/icon-path-format.md)
- [Blade components](https://github.com/ichava/documentation/blob/main/core/blade-components.md)
- [Global helper](https://github.com/ichava/documentation/blob/main/core/global-helper.md)
- [Database seeding](https://github.com/ichava/documentation/blob/main/icon-packs/seeding-pack-icons.md)
- [Browser SPA](https://github.com/ichava/documentation/blob/main/browser/installation.md)

## What's included

- 5,900+ icons across two variants
- **Outline** (`2px` stroke, transparent fill, `currentColor` stroke, `stroke-linecap="round"`, `stroke-linejoin="round"`)
- **Filled** (`currentColor` fill, no stroke)
- All SVGs 24×24 with `viewBox="0 0 24 24"`

Browse the full library at [tabler-icons.io](https://tabler-icons.io) or visually via the [`ichava/browser`](https://github.com/ichava/browser) SPA.

## Updating from upstream

```bash
php artisan ichava:update-tabler-icons
```

Pulls the latest Tabler release archive, replaces bundled SVGs, and re-seeds.

## Requirements

- PHP 8.3+
- Laravel 10, 12, or 13+
- [`ichava/core`](https://github.com/ichava/core) `^1.0`

## Contributing

See [CONTRIBUTING.md](CONTRIBUTING.md).

## Security

Email `security@simtabi.com` privately. See [SECURITY.md](SECURITY.md).

## License

This project is licensed under the MIT License.  

© Simtabi LLC

The bundled Tabler icon SVGs are MIT-licensed upstream; see [`docs/attribution.md`](docs/attribution.md) for upstream credits.
