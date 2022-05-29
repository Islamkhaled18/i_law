<?php

namespace App\Repositories\Contracts;

interface PermissionRepositoryInterface extends RepositoryInterface {
    //Permission Specific Methods
    public function getForSelection();
    public function getForSelecAll();
    public function getForPositionSelection();
    public function getForPositionSelecAll();
}