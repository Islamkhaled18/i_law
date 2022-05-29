<?php

namespace App\Repositories\Contracts;

interface SessionLogRepositoryInterface extends RepositoryInterface {
    //logs Specific Methods
    public function logChanges($session);
    public function logLawyersChanges($session, $oldLawyers);
}