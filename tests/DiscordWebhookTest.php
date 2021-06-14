<?php

namespace Flowframe\DiscordWebhook\Tests;

use Flowframe\DiscordWebhook\DiscordEmbed;
use Flowframe\DiscordWebhook\DiscordField;
use Flowframe\DiscordWebhook\DiscordWebhook;

class DiscordWebhookTest extends TestCase
{
    /** @test */
    public function it_should_match_payload()
    {
        $expectedPayload = '{"username":"Discord Bot","avatar_url":"https:\/\/github.com\/flowframe.png","tts":false,"embeds":[{"title":"New sign up","description":"This user signed up today","color":16711680,"fields":[{"name":"First name","value":"John","inline":true},{"name":"Last name","value":"Doe","inline":true},{"name":"Email address","value":"johndoe@example.com"}]},{"title":"Another embed","description":"Embed description","timestamp":"2021-06-14T09:14:34+00:00","color":65280}]}';

        $message = (new DiscordWebhook)
            ->username('Discord Bot')
            ->avatar('https://github.com/flowframe.png')
            ->embeds(
                (new DiscordEmbed)
                    ->title('New sign up')
                    ->description('This user signed up today')
                    ->color(0xFF0000)
                    ->fields(
                        (new DiscordField)
                            ->name('First name')
                            ->value('John')
                            ->inline(true),
                        (new DiscordField)
                            ->name('Last name')
                            ->value('Doe')
                            ->inline(true),
                        (new DiscordField)
                            ->name('Email address')
                            ->value('johndoe@example.com'),
                    ),
                (new DiscordEmbed)
                    ->title('Another embed')
                    ->description('Embed description')
                    ->date(now())
                    ->color(0x00FF00),
            )->toJson();

        $this->assertJson($expectedPayload, $message);
    }
}
