<?php

namespace Flowframe\DiscordWebhook\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Flowframe\DiscordWebhook\DiscordWebhookServiceProvider;

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
