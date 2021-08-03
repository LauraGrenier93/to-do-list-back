<?php

namespace App\Http\Controllers;

use App\Models\Category;
use illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    /**
     * http Methode GET
     * URL : /category
     */
    public function list() {
        $categoriesList = Category::all();
         return $this->sendJsonResponse($categoriesList, 200);
    }
        /**
     * http Methode GET
     * URL : /category/id
     */
    public function item($id) {
        $oneCategory = Category::find($id);
              if (isset($oneCategory)) {
                return $this->sendJsonResponse($oneCategory, 200);
            } else {
                Log::info('Erreur 404 pour afficher la catégorie '.$id);
                abort(404);
            }
    }
}
