<?php

namespace MVC\Models;

use MVC\Core\ResourceModel;
use MVC\Models\TaskResourceModel;
use MVC\Models\TaskModel;

class TaskRepository
{
    public $taskPepos;

    public function __construct()
    {
        $this->taskPepos = new TaskResourceModel();
    }

    public function add($model)
    {
        return $this->taskPepos->save($model);
    }

    public function get($id)
    {
        return $this->taskPepos->find($id);
    }

    public function delete($model)
    {
        return $this->taskPepos->delete($model);
    }

    public function getAll()
    {
        return $this->taskPepos->showAll();
    }

    public function edit($model)
    {
        return $this->taskPepos->save($model);
    }
}
