<?php

namespace App\Services;

use App\Models\Task;
use App\Services\Contracts\TaskServiceInterface;
use Illuminate\Support\Facades\Storage;

class TaskService implements TaskServiceInterface
{

    public static function update(Task $task, $id)
    {
        dd($task);
        $task = Task::find($id);

        $task->title = 'Update title';
        $task->content = 'Update content';
        $task->save();
        
    }
}
