<?php

namespace PDS\Examples;

/**
 * This is sample class just for demonstrate how to define simple class.
 */
final class SampleClass
{
    /**
     * This is demonstrative non static public method of a class.
     *
     * @return String
     */
    public function nonStaticMethod(): string
    {
        return 'This is non static method';
    }

    /**
     * This method is static - means that can be called without class instantiation.
     *
     * @return String
     */
    public static function staticMethod(): string
    {
        return 'This is static method';
    }
}
