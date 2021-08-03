<?php

namespace App\Http\Controllers;

use App\Models\Task;

use illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * http Methode GET
     * URL : /tasks
     */
    public function list() {
        $tasksList = Task::all();
         return $this->sendJsonResponse($tasksList);
    }
        /**
     * http Methode GET
     * URL : /tasks/id
     */
    public function item($id) {
        $oneTask = Task::find($id);
              if (isset($oneTask)) {
                return $this->sendJsonResponse($oneTask);
            } else {
                Log::info('Erreur 404 pour afficher la tâche '.$id);
                abort(404);
            }
    }

        /**
     * http Methode POST
     * URL : /tasks
     */
    public function add(Request $request) {
            $newTask = new Task;

            $newTask->title = $request->title;
            $newTask->category_id = $request->categoryId;
            $newTask->completion = $request->completion;
            $newTask->status = $request->status;

            $response = $newTask->save();
            if (isset($response)) {
                return $this->sendEmptyResponse(201);
            } else {
                Log::info('Erreur 500, nous n\'avons pas pu ajouter cette tâche');
                abort(500);
            }
    }
}
