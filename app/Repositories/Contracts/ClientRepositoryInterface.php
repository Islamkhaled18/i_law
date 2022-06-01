<?php

namespace App\Repositories\Contracts;

interface ClientRepositoryInterface extends RepositoryInterface {
    //client Specific Methods
    public function getNameAndId();
    public function getNamesFor($clientIds);
}
