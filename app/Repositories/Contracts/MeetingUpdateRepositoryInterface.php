<?php

namespace App\Repositories\Contracts;

interface MeetingUpdateRepositoryInterface extends RepositoryInterface {
    //MeetingUpdate Specific Methods
    public function getByMeeting($meetingId);
}