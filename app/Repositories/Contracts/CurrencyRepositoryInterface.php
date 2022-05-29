<?php

namespace App\Repositories\Contracts;

interface CurrencyRepositoryInterface extends RepositoryInterface {
    //Currency Specific Methods
    public function getForSelection();
}