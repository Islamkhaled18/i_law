<?php

namespace App\Repositories\Contracts;

interface PostRepositoryInterface extends RepositoryInterface {
    //Post Specific Methods
    public function addForAdmin($attibutes);
    public function addAttachments($post_id, $attachments);
    public function deleteAttachment($post_id, $attachment_id);
}