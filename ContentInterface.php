<?php

namespace PDS/

class Post implements ContentInterface
{   private $author;
    private $body;
    private $id;
    public function getAuthor():string
    {
        return $this -> author;
    }
    public function getBody():string
    {
        return $this -> body;
    }
    public function getId(): int
    {

        return $this -> id;
    }
    public function __construct()
    {
        $this -> id='uniqid()';
    }
}
#poniższy kod zapisujemy w osobnym pliku
interface ContentInterface
    {
        public function getAuthor(): string;
        public function getid(): string;
        public function getBody(): string;
    }