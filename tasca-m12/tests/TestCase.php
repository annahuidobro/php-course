<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Styde\Enlighten\Tests\EnlightenSetup;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, EnlightenSetup;

    public function setUp():void
    {
        parent::setUp();

        $this->setUpEnlighten();
    }
}
