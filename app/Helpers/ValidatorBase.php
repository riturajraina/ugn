<?php

namespace App\Helpers;

class ValidatorBase {

    protected $error;

    public function __construct() {
        $this->error = [];
    }

    public function getError() {
        return $this->error;
    }
}

