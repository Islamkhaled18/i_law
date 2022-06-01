<?php

namespace App\Repositories\Contracts;

interface AdminstrativeTaskUpdateRepositoryInterface extends RepositoryInterface {
    //TaskUpdate Specific Methods
    public function getByTask($taskId);
}