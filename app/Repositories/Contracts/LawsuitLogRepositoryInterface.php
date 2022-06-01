<?php

namespace App\Repositories\Contracts;

interface LawsuitLogRepositoryInterface extends RepositoryInterface {
    //logs Specific Methods
    public function logChanges($lawsuit);
    public function logClientsChanges($lawsuit, $oldClients);
    public function logLawyersChanges($lawsuit, $oldLawyers);
    public function logOpponentsChanges($lawsuit, $oldNames, $newNames);
}