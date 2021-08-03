<?php

namespace App\Http\Controllers;

use App\Models\Task;

use illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

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
              if ($oneTask) {
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
        if($request->has(['title', 'categoryId'])) {
            $newTask = new Task;

            $newTask ->title = $request->input('title');;
            $newTask ->category_id = $request->input('categoryId');
            $newTask ->completion = $request->input('completion');
            $newTask ->status = $request->input('status');

            $response = $newTask->save();
            if ($response) {
                return $this->sendJsonResponse($newTask, Response::HTTP_CREATED);
            } else {
                abort(500);
            }
        } else {
            abort(Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * http Methode Patch
     * http Methode PUT
     * URL : /tasks/id
     */
    public function update(Request $request, $id) {
        $oneTask = Task::findOrFail($id);

        if($request->isMethod('patch')) {
            $oneDataAtLeast = false;
            if ($request->has('title')) {
                $oneTask->title = $request->input('title');
                $oneDataAtLeast = true;
            }
            if ($request->has('categoryId')) {
                $oneTask->category_id = $request->input('categoryId');
                $oneDataAtLeast = true;
            }
            if ($request->has('completion')) {
                $oneTask->completion = $request->input('completion');
                $oneDataAtLeast = true;
            }
            if ($request->has('status')) {
                $oneTask->status =  $request->input('status');;
                $oneDataAtLeast = true;
            }
            if (!$oneDataAtLeast) {
                abort(Response::HTTP_BAD_REQUEST);
            }
        }
        else{
            if ($request->has(['title', 'categoryId', 'completion', 'status'])) {
                $oneTask->title = $request->input('title');
                $oneTask->category_id = $request->input('categoryId');
                $oneTask->completion = $request->input('completion');
                $oneTask->status = $request->input('status');
            } else {
                abort(Response::HTTP_BAD_REQUEST);
            }
        }

        $response = $oneTask->save();

        if ($response) {
            return $this->sendEmptyResponse(Response::HTTP_NO_CONTENT);
        } else {
            abort(500);
        }
    }
}
