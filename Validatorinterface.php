<?php

namespace PDS\login;

interface ValidatorInterface
{
    public function validate(string $username, string $password): bool;

}