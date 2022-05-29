<?php

namespace App\Repositories\Contracts;

interface CourtRepositoryInterface extends RepositoryInterface {
    //Court Specific Methods
    public function getNameAndIdForCity($cityId);
    public function getNameById($id);
}