<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Log;
use PhpMqtt\Client\Facades\MQTT;

class TodoController extends Controller
{
    public function index(Request $request)
    {

        $list = Task::all();
        // dd($list);
        return view('welcome')->with(['list' => $list]);
        // return response()->json($list, 200);
    }
    public function createTask(Request $request)
    {
        if ($request->has('task') && !empty($request->get('task'))) {
            $max = config('app.max_leds');
            $task = $request->get('task');

            $list = Task::all()->toArray();

            $list_count = !empty($list) ? count($list) : 0;
            if ($list_count >= $max) {
                return response()->json(['message' => 'List full! Cannot add more than 19 tasks.'], 422);
            }
            $index = $list_count;
            $create_task = Task::create([
                'task_id' => $index,
                'task' => $task,
                'status' => 'pending',
            ]);

            $list = Task::all()->toArray();

            $list_count = !empty($list) ? count($list) : 0;
            $this->infoLogs('app_flow', "[CREATE]", [$list_count, $create_task->task_id]);
            $this->sendMessage('add', $create_task->task_id);
            return response()->json(['message' => "task '$task' added."], 200);
        } else {
            return response()->json(['message' => "task empty"], 422);
        }
    }

    public function markDone(Request $request, $id)
    {
        $task = Task::where('task_id', $id)->first();
        $task->status = 'done';
        $task->save();
        $this->sendMessage('done', $id);
        return response()->json(['message' => "task marked done."], 200);
    }
    public function deleteTask(Request $request, $id)
    {
        $task = Task::where('task_id', $id)->delete();
        $this->sendMessage('delete', $id);
        return response()->json(['message' => "task deleted."], 200);
    }

    private function sendMessage($event, $message)
    {
        $this->infoLogs('app_flow', "[MQTT]", [$event, $message]);
        $mqtt = MQTT::connection();
        //add, done, task
        $topic = "task-update/$event";

        if ($mqtt->isConnected() && $topic) {
            $mqtt->publish($topic, $message, 0);
            $mqtt->disconnect();
            // $mqtt->loop(true);
        }

    }

    private function infoLogs(string $channel, string $tag = "", array $data = [])
    {
        $logs_on = config('logging.info_logs');
        if ($logs_on) {
            Log::channel($channel)->info($tag, $data);
        }
    }

}
