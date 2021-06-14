# Discord Webhooks for Laravel

This package provides a fluent API around Discord webhook messages for Laravel.

## Installation

`composer require flowframe/discord-webhook`

## Usage

The usage is quite forward, most of the API will be provided by intellisense. Here's an example of the API:

```php
(new DiscordWebhook)
    ->username('Flowframe Bot')
    ->avatar('https://github.com/flowframe.png')
    ->content('This message contains embeds')
    ->embeds(
        // Argument list of Embed objects
        (new DiscordEmbed)
            ->title('Embed title')
            ->description('Embed description')
            ->date(now())
            // Colors values should be a hexadecimal integer
            // For example: red (#FF0000) would translate to 0xFF0000
            ->color(0xFF0000)
            ->fields(
                // Argument list of Field objects
                (new DiscordField)
                    ->name('Field 1')
                    ->value('Hi there')
                    ->inline(true),
                (new DiscordField)
                    ->name('Field 2')
                    ->value('what is up')
                    ->inline(true),
            ),
        // Another embed
        (new DiscordEmbed)
            ->title('Embed 2')
            ->description('Embed description')
            ->date(now())
            ->color(0xFF0000)
            ->fields(
                (new DiscordField)
                    ->name('Field 1')
                    ->value('Hi there')
                    ->inline(true),
                (new DiscordField)
                    ->name('Field 2')
                    ->value('what is up')
                    ->inline(true),
            ),
    )
    // Send the message to the endpoint
    ->send(to: 'https://discord.com/api/webhooks/...');
```

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [Lars Klopstra](https://github.com/flowframe)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
