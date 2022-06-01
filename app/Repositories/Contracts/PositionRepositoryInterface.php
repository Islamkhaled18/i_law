<?php

namespace App\Repositories\Contracts;

interface PositionRepositoryInterface extends RepositoryInterface {
    //Position Specific Methods
    public function getForSelection();
    public function getDefaults();
}