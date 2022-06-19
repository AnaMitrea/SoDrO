<?php

namespace App\Handler;

class Contact
{
    public function execute(array $params = [])
    {
        # path taken from the Router.php directory
        $firstname = $params['firstname'] ?? 'Guest';
        $secondname = $params['secondname'] ?? '';
        require_once 'templates/contact.php';
    }
}