<?php

namespace App\Repositories\Contracts;

interface OfficeRepositoryInterface extends RepositoryInterface {
    //Country Specific Methods
    public function getForSelection();
}