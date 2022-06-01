<?php

namespace App\Repositories\SQL;

use App\Repositories\Contracts\RepositoryInterface;

abstract class Repository implements RepositoryInterface {
    protected $model;
    protected $relations;

    public function __construct($model, $relations = []) {
       $this->model = $model;
       $this->relations = $relations;
    }

    public function getAll($filters = [], $paginate = 15){
        $query = $this->model->query();
        //applying filters
        foreach($filters as $filter => $value){
            //only if the model has it in it's filters property
            collect($this->model::filters())->contains($filter) &&
            $query->{$filter}($value);
        }
        // loading relations
        $query->with($this->relations);
        return $query->paginate($paginate);
    }

    public function getById($id){
        $record =  $this->model::find($id);
        if(! $record ) {
            abort(404);
        }
        return $record;
    }

    public function add($attributes){
        return $this->model->create($attributes);
    }

    public function update($id, $attributes){
        return $this->getById($id)
        ->update($attributes);
    }

    public function remove($id){
        $model =  $this->getById($id);
        return $model->delete();
    }
 
}