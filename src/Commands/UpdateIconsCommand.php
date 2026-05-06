<?php

declare(strict_types=1);

namespace Simtabi\Laranail\Ichava\TablerIcons\Commands;

use Symfony\Component\Console\Attribute\AsCommand;
use Simtabi\Laranail\Ichava\TablerIcons\Constants\IconsConstants;
use Simtabi\Laranail\Ichava\Commands\UpdateIconsCommand as BaseUpdateIconsCommand;

/**
 * Pulls the Tabler Icons archive and unpacks the outline + filled variants.
 */
#[AsCommand(name: 'ichava:update-tabler-icons')]
class UpdateIconsCommand extends BaseUpdateIconsCommand
{
    protected $signature = 'ichava:update-tabler-icons {--force : Skip the confirmation prompt}';

    protected $description = 'Update Tabler Icons from the upstream GitHub repository';

    protected function getRepository(): string
    {
        return IconsConstants::getGitHubRepo();
    }

    protected function getIconsDestinationPath(): string
    {
        return IconsConstants::getSvgPath('outline');
    }

    protected function getSvgPathInArchive(): string
    {
        return 'icons/outline';
    }

    protected function getCacheFolderPrefix(): string
    {
        return 'tabler-icons';
    }

    /**
     * Tabler ships SVGs with `class="icon icon-tabler ..."` attributes that
     * collide with the host app's CSS. Strip them on import.
     */
    protected function processSvgContent(string $content): string
    {
        return preg_replace('/class="[^"]*"\s+/', '', $content) ?? $content;
    }

    /**
     * @return array<int, array{name: string, archive_path: string, destination: string}>
     */
    protected function getAdditionalVariants(): array
    {
        return [
            [
                'name'         => 'filled',
                'archive_path' => 'icons/filled',
                'destination'  => IconsConstants::getSvgPath('filled'),
            ],
        ];
    }
}
