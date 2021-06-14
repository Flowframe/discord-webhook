<?php

namespace Flowframe\DiscordWebhook\Tests;

use Flowframe\DiscordWebhook\DiscordWebhookServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            DiscordWebhookServiceProvider::class,
        ];
    }
}
