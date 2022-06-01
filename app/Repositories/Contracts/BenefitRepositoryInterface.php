<?php

namespace App\Repositories\Contracts;

interface BenefitRepositoryInterface extends RepositoryInterface {
    //Benefit Specific Methods
    public function getForSelection();
}