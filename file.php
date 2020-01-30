<?php

class File
{
    private $name;
    private $path;
    private $ext;
    private $content;

    public function getName()
    {
        return $this -> name;
    }
    public function __construct(string $fullpath)
    {
        $fullpath = realpath($fullpath)
        $pathinfo = pathinfo($fullpath)
        $this -> name = $pathinfo['filename']
        $this -> path =$pathinfo['dirname']
        $this -> ext = $pathinfo['extension']
        $this -> content = filgetcontent($fullpath);
    }




}