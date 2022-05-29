<?php

namespace App\Repositories\Contracts;

interface NormalTaskRepositoryInterface extends RepositoryInterface {
    //Task Specific Methods
    public function getForDate($date);
    public function getAllForDate($date);
}