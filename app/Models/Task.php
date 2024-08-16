<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_id',
        'task',
        'status'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($task) {
            // Get an array of all used task_ids in the range 0 to 18
            $usedTaskIds = Task::whereBetween('task_id', [0, 18])
                ->pluck('task_id')
                ->toArray();

            // Find the first available task_id in the range
            $availableTaskId = null;
            for ($i = 0; $i <= 18; $i++) {
                if (!in_array($i, $usedTaskIds)) {
                    $availableTaskId = $i;
                    break;
                }
            }

            // If all task_ids are used, handle the scenario (e.g., throw an exception)
            if (is_null($availableTaskId)) {
                throw new \Exception('No available task ID.');
            }

            $task->task_id = $availableTaskId;
        });
    }

}
