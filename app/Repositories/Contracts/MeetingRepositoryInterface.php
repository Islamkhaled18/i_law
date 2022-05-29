<?php

namespace App\Repositories\Contracts;

interface MeetingRepositoryInterface extends RepositoryInterface {
    //Meeting Specific Methods
    public function getForDate($date);
    public function getForUpdate($meetingId);
    public function getAllForDate($meetingId);
}