<?php

namespace App\Repositories\Contracts;

interface SessionRepositoryInterface extends RepositoryInterface {
    //session Specific Methods
    public function getByLawsuit($lawsuitId);
    public function getForUpdate($sessionId);
    public function getDetails($sessionId);
    public function getWithNotifications();
    public function getForDate($date);
    public function getAllForDate($date);
}