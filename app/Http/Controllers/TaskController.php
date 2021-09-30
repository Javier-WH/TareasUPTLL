<?php


namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

use function GuzzleHttp\Promise\task;

class TaskController extends Controller
{
    public function index(){

        $taskList = Task::orderby("date", "ASC")->paginate(10);
          return view("index", compact("taskList") );
    }

    public function newTask(){
        return view("new");
    }

    public function insertTask(Request $request){
        $task = new Task();
        $task->icon = $request->icon;
        $task->taskName = $request->taskName;
        $task->desciption = $request->taskDescription;
        $task->date = $request->taskDate;
        $task->save();
        return redirect()->route("index");
    }
    public function deleteByID($id){
        Task::destroy($id);
        return redirect()->route("index");
    }
    public function edit($id){
        $query = new Task();
        $task = $query->find($id);
        return view("editTask", compact("task"));
    }
    public function editTask($id, Request $data){
        $query = new Task();
        $task = $query->find($id);
        
        $task->icon = $data->icon;
        $task->taskName = $data->taskName;
        $task->desciption = $data->taskDescription;
        $task->date = $data->taskDate;
        $task->save();

        return redirect()->route("index");
        
    }
}
