<?php

namespace Flowframe\DiscordWebhook;

class DiscordField
{
    public string $name;

    public string $value;

    public ?bool $inline;

    public function name(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function value(string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function inline(bool $inline): self
    {
        $this->inline = $inline;

        return $this;
    }
}
