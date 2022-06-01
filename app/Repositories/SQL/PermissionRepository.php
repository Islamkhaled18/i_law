<?php

namespace App\Repositories\SQL;

use App\Models\Permission;
use App\Repositories\Contracts\PermissionRepositoryInterface;

class PermissionRepository extends Repository implements PermissionRepositoryInterface{

    public function __construct(Permission $permission){
        parent::__construct($permission);
    }

    public function getForSelection() {
        $modules =  $this->model::all()->groupBy('group');
        return collect($modules)
               ->except(['permission', 'socialprofile', 'postattachment']);
    }

    public function getForSelecAll() {
        return $permissions = $this->model->whereNotIn('group', ['permission', 'socialprofile'])
        ->pluck('id', 'id')->all();
    }

    public function getForPositionSelection() {
        $modules =  $this->model::where('guard', 'lawyer')->get()->groupBy('group');
        return collect($modules)
               ->except(['socialprofile', 'office', 'lawsuitopponent', 'adminstrativetask', 'adminstrativetaskupdate', 'lawsuitlog', 'meetingupdate', 'normaltask', 'sessionlog']);
    }

    public function getForPositionSelecAll() {
        return $permissions = $this->model->where('guard', 'lawyer')
        ->whereNotIn('group', ['permission', 'socialprofile'])
        ->pluck('id', 'id')->all();
    }

}