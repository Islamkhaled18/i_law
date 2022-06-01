<?php

namespace App\Repositories\Contracts;

interface OfficeMessageReplyRepositoryInterface extends RepositoryInterface {
    // OfficeMessageReply Specific Methods
    public function getForMessage($messageId);
}