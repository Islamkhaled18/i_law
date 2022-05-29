<?php

namespace App\Repositories\Contracts;

interface InvitationRepositoryInterface extends RepositoryInterface {
    //invitation Specific Methods
    public function getPendingForLawyer($lawyerId);
    public function getPendingCountForLawyer($lawyerId);
    public function getDetailsForLawyer($invitationId, $lawyerId);
    public function getByEmailAndId($invitationId, $email);
    public function updateStatus($id, $status, $note);
}