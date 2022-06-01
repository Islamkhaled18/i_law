<?php

namespace App\Repositories\Contracts;

interface CityRepositoryInterface extends RepositoryInterface {
    //city Specific Methods
    public function getNameAndIdForCountry($country_id);
    public function getPaginatedForCountry($country_id);
    public function getNameById($id);
}
