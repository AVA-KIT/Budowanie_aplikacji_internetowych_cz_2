<?php

namespace PDS\login;

class FileValidator implements ValidatorInterface
{
    private $fileContent = [];

    public function __constructor(string $filePath)
    {
    $fileContent = file($filePath);

    if (false === $fileContent) {
        //TBD: Error handling
    }
    $this -> fileContent = $fileContent;
    }
    
    public function validate(string $username, string $password): bool{

        foreach ($this -> fileContent as $credential) {
            $credential = explode(';', $credential);

            if ($username === $credential[0] && $password === trin($credential[1])) 
            { 
                return true;
            }
        return false;
        }
    }
    
}
