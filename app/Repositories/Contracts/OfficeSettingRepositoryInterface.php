<?php

namespace App\Repositories\Contracts;

interface OfficeSettingRepositoryInterface extends RepositoryInterface {
    //setting Specific Methods
    public function  getForOffice($officeId);
    public function  getTransferAllowanceForOffice($officeId);
    public function getDefaultPositionForOffice($officeId);
}