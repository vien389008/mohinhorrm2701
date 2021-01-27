<?php

namespace MVC\Controllers;

use MVC\Core\Controller;
use MVC\Models\TaskModel;
use MVC\Models\TaskRepository;

class TasksController extends Controller
{
    function index()
    {
        $tasks = new TaskRepository();
        $d['tasks'] = $tasks->getAll();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["title"]))
        {
            $task= new TaskRepository();
            $task1 = new TaskModel();
            $task1->setTitle($_POST["title"]);
            $task1->setDescription($_POST["description"]);

            if ($task->add($task1))
            {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }

        $this->render("create");
    }

    function edit($id)
    {
        $task= new TaskRepository();
        $d["task"] = $task->get($id);
        if (isset($_POST["title"]))
        {
            $task1= new TaskModel();
            
            $task1->setId($id);
            $task1->setTitle($_POST["title"]);
            $task1->setDescription($_POST["description"]);
            
            $task = new TaskRepository();
            if ($task->edit($task1))
            {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        $task = new TaskRepository();
        $task1 = new TaskModel();
        $task1->setId($id);
        if ($task->delete($task1))
        {
            header("Location: " . WEBROOT . "tasks/index");
        }
    }
}
?>