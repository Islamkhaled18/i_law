<?php

namespace App\Repositories\SQL;

use App\Models\Role;
use App\Repositories\Contracts\RoleRepositoryInterface;
use App\Traits\Repositories\HasPermissions as RepositoriesHasPermissions;

class RoleRepository extends Repository implements RoleRepositoryInterface{
    use RepositoriesHasPermissions;
    public function __construct(Role $role){
        parent::__construct($role);
    }
}