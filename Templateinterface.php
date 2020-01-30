<?php

namespace PDS\Templates;

interface TemplateInterface
{
    /**
     * Metoda ustawia   wartości dla  wskazanych placeh olderów.
     *
     * @param string $key nazwa placeholdera
     * @param string $value wartośc do ustawienie w miejsce   placeholdera
     *
     * @return self    instancja szablonu  
     */
    public function set(string $key, string $value): self;

    /**
     * Metoda ren deruje szablon.
     *
     * @return string wyrenderowany   szablon
     */
    public function render(): string;
}
