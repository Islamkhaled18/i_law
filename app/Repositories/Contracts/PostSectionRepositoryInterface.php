<?php

namespace App\Repositories\Contracts;

interface PostSectionRepositoryInterface extends RepositoryInterface {
    //Section Specific Methods
    public function getParents();
    public function getSubsectionsOf($id);
}