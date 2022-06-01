<?php

namespace App\Repositories\Contracts;

interface VideoSectionRepositoryInterface extends RepositoryInterface {
    //Video Specific Methods
    public function getParents();
    public function getSubsectionsOf($id);
}