<?php

declare(strict_types=1);

namespace Simtabi\Laranail\Ichava\TablerIcons\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Simtabi\Laranail\Ichava\TablerIcons\Enums\Variant;

/**
 * Pure-enum behaviour tests. Anything that touches config.json (default(),
 * isDefault(), getClass(), getPath()) lives in the Feature suite where the
 * Laravel container is bootstrapped.
 */
class VariantTest extends TestCase
{
    public function test_outline_case_value(): void
    {
        $this->assertSame('outline', Variant::OUTLINE->getValue());
    }

    public function test_filled_case_value(): void
    {
        $this->assertSame('filled', Variant::FILLED->getValue());
    }

    public function test_values_returns_every_case(): void
    {
        $values = Variant::values();

        $this->assertCount(2, $values);
        $this->assertSame(['outline', 'filled'], $values);
    }

    public function test_try_from_value_resolves_known_and_rejects_unknown(): void
    {
        $this->assertSame(Variant::OUTLINE, Variant::tryFromValue('outline'));
        $this->assertSame(Variant::FILLED, Variant::tryFromValue('filled'));
        $this->assertNull(Variant::tryFromValue('not-a-real-variant'));
    }
}
