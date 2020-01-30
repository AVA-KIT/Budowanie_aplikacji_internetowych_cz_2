<?php

namespace PDS\gazda;

/**
 * This is sample class just for demonstrate how to define simple class.
 */
final class fileReader{
 
    public function main()
    {
        if(false === file_exists($filepath)) return;

        $fileLine = file($filePath);

        foreach ($fileLine as $lineNumber => $line) {
            echo "{$lineNumber} : $line";
        }
    }

}
