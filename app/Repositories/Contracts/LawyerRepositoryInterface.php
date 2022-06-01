<?php

namespace App\Repositories\Contracts;

interface LawyerRepositoryInterface extends RepositoryInterface {
    //lawyer Specific Methods
    public function updateLastlogin($id);
    public function removeImage($id);
    public function removeCarnetImage($id);
    public function removeFromOffice($id);
    public function getByEmail($email);
    public function transferLawyer($lawyerId, $officeId, $position);
    public function getNameAndId();
}