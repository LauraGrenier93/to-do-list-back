<?php

namespace App\Http\Controllers;

class CategoryController extends Controller
{
    /**
     * http Methode GET
     * URL : /category
     */
    public function list() {
        $categoriesList = [
            1 => [
              'id' => 1,
              'name' => 'Chemin vers O\'clock',
              'status' => 1
            ],
            2 => [
              'id' => 2,
              'name' => 'Courses',
              'status' => 1
            ],
            3 => [
              'id' => 3,
              'name' => 'O\'clock',
              'status' => 1
            ],
            4 => [
              'id' => 4,
              'name' => 'Titre Professionnel',
              'status' => 1
            ]
          ];
         return response()->json($categoriesList);
    }
        /**
     * http Methode GET
     * URL : /category
     */
    public function item($id) {
        $categoriesList = [
            1 => [
              'id' => 1,
              'name' => 'Chemin vers O\'clock',
              'status' => 1
            ],
            2 => [
              'id' => 2,
              'name' => 'Courses',
              'status' => 1
            ],
            3 => [
              'id' => 3,
              'name' => 'O\'clock',
              'status' => 1
            ],
            4 => [
              'id' => 4,
              'name' => 'Titre Professionnel',
              'status' => 1
            ]
          ];

          for ($i=1; $i<count($categoriesList); $i++) {
              if ($id == $categoriesList[$i]['id']) {
                  return response()->json($categoriesList[$i]);
              }
          }
    }
}
