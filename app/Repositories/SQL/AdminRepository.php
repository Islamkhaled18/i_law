<?php

namespace App\Repositories\SQL;

use App\Models\Admin\Admin;
use App\Repositories\Contracts\AdminRepositoryInterface;
use App\Repositories\Contracts\HasAvatar;

class AdminRepository extends Repository implements AdminRepositoryInterface, HasAvatar{

    public function __construct(Admin $admin){
        parent::__construct($admin, ['country', 'role']);
    }

    public function removeImage($id){
        return $this->model->update(['avatar' => 'admins/default.jpg']);
    }

    public function superAdminsCount() {
       return  $this->model::where('role_id', 1)->count();
    }

}