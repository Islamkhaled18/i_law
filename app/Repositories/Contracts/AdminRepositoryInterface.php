<?php

namespace App\Repositories\Contracts;

interface AdminRepositoryInterface extends RepositoryInterface {
    //Admin Specific Methods
    public function superAdminsCount();
}