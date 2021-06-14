<?php

namespace Flowframe\DiscordWebhook;

use Illuminate\Support\Carbon;

class DiscordEmbed
{
    public ?string $title;

    public ?string $description;

    public ?string $timestamp;

    public ?int $color;

    public ?array $fields;

    public function title(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function description(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function date(Carbon $date): self
    {
        $this->timestamp = $date->toIso8601String();

        return $this;
    }

    public function color(int $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function fields(DiscordField ...$fields): self
    {
        $this->fields = $fields;

        return $this;
    }
}
