<?php

namespace Flowframe\DiscordWebhook;

use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class DiscordWebhook implements Jsonable
{
    public ?string $username;

    public ?string $avatar_url;

    public ?string $content;

    public bool $tts = false;

    public ?array $embeds;

    public function toJson($options = 0): string
    {
        return json_encode($this, $options);
    }

    public function username(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function avatar(string $avatar_url): self
    {
        $this->avatar_url = $avatar_url;

        return $this;
    }

    public function content(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function tts(bool $tts): self
    {
        $this->tts = $tts;

        return $this;
    }

    public function embeds(DiscordEmbed ...$embeds): self
    {
        $this->embeds = $embeds;

        return $this;
    }

    public function send(string $to): Response
    {
        return Http::asJson()
            ->withBody($this->toJson(), 'application/json')
            ->post($to);
    }
}
