<?php

namespace App\Gdakuzak\Repositories;

use App\Gdakuzak\Models\Character;

class CharacterRepository
{
    /**
     * @var Role
     */
    private $model;

    /**
     * Character Repository constructor.
     * @param Character $character
     */
    public function __construct(Character $character)
    {
        $this->model = $character;
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->model->get();
    }
    
    /**
     * @param $id
     * @return mixed
     */
    public function getById($id)
    {
        return $this->model->find($id);
    }

    /**
     * @param $data
     * @return mixed
     */
    public function create($data)
    {
        return $this->model->create($data);
    }

    /**
     * @param $id
     * @param $data
     * @return mixed
     */
    public function update($id, $data)
    {
        return $this->model->find($id)->fill($data)->save();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->model->find($id)->delete();
    }
}
