<?php

namespace App\Repositories\Contracts;

interface LawsuitRepositoryInterface extends RepositoryInterface {
    //lawsuit Specific Methods
    public function getActive();
    public function changeStatus($id, $status);
    public function getLawsuitForUpdate($lawsuitId);
    public function getDetails($id);
    public function getForLawyer($id);
    public function getNumberAndId();
    public function getRelavantToLawyer($lawyerId);
}