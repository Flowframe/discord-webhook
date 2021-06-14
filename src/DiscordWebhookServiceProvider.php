<?php

namespace Flowframe\DiscordWebhook;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DiscordWebhookServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('discord-webhook');
    }
}
