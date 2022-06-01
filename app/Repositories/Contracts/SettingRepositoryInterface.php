<?php

namespace App\Repositories\Contracts;

interface SettingRepositoryInterface extends RepositoryInterface {
    //settings Specific Methods
    public function set($property, $value);
    public function get($property);
}