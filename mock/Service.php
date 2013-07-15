<?php

class Service
{

    /**
     * @var Repository
     */ 
    private $repository;

    public function __construct(Repository $repository
)
    {
        $this->repository = $repository;
    }
    
    public function save(array $data)
    {
        $obj = (object) $data;
        return $this->repository->save($obj);
    }
}
