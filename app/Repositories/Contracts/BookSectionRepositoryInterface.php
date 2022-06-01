<?php

namespace App\Repositories\Contracts;

interface BookSectionRepositoryInterface extends RepositoryInterface {
    //Book Specific Methods
    public function getParents();
    public function getSubsectionsOf($id);
}