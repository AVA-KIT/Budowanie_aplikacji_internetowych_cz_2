<?php

namespace PDS\Templates;

class SimpleTemplate
{
    private $rawContent;

    private $vars = [];

    public function __construct(string $file)
    {
        if (!file_exists($file)) {
            throw new Exception(sprintf('Template "%s" does not exists!', $file));
        }

        $this->rawContent = file_get_contents($file);

        if (false === $this->rawContent) {
            throw new Exception(sprintf('Template "%s" can not be read', $file));
        }
    }

    public function set(string $key, string $value): self
    {
        $this->vars[$key] = $value;

        return $this;
    }

    public function render(): string
    {
        $parsedContent = $this->rawContent;

        foreach ($this->vars as $placeholder => $value) {
            $parsedContent = str_replace(sprintf('{{ %s }}', $placeholder), $value, $parsedContent);
        }

        return $parsedContent;
    }
}
