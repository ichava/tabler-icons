<?php

declare(strict_types=1);

namespace Simtabi\Laranail\Ichava\TablerIcons\Providers;

use Simtabi\Laranail\Ichava\Support\ServiceProvider;
use Simtabi\Laranail\PackageTools\Exceptions\InvalidPackage;
use Simtabi\Laranail\PackageTools\Exceptions\InvalidPath;
use Simtabi\Laranail\PackageTools\Package;
use Simtabi\Laranail\Ichava\Services\IconRegistry;
use Simtabi\Laranail\Ichava\TablerIcons\Constants\IconsConstants;
use Simtabi\Laranail\Ichava\TablerIcons\View\Components\IconComponent;

/**
 * Registers the Tabler Icons set with the Ichava registry on boot.
 */
class IconsServiceProvider extends ServiceProvider
{
    /**
     * @throws InvalidPath
     * @throws InvalidPackage
     */
    public function configurePackage(Package $package): void
    {
        $package
            ->setName(IconsConstants::getVendorPackage())
            ->setPathFrom(source: $this, levelsUp: 2)
            ->hasConfigFile('tabler-icons')
            ->hasCommand(\Simtabi\Laranail\Ichava\TablerIcons\Commands\UpdateIconsCommand::class);
    }

    public function bootingPackage(): void
    {
        $this->loadBladeComponent(componentClass: IconComponent::class, packageName: 'tabler-icons');

        $this->app->make(IconRegistry::class)->fromDirectory(
            $this->package->basePath('resources/assets/svg'),
            self::class,
        );
    }
}
