# to-do-list-back

It is an api to manage your tasks by categories.

You can use it to create a kanban.

A CRUD has been made. Each task can be created, read, modified and deleted.

You can associate a category to each task.

## stack

PHP with frameworks:

- Lumen
- Eloquent

## Install

$ git clone [git@github.com:LauraGrenier93/toDoList.git]

$ cd ../path/to/the/file

$ composer install$

$ composer update

- run MAMP or server php

## Putting  the projet online

the project has been posted on heroku:[ https://my-liste-pro-back.herokuapp.com/]

end point are :

- home page:[ https://my-liste-pro-back.herokuapp.com/]
- all categories: [ https://my-liste-pro-back.herokuapp.com/categories]
- a category: [ https://my-liste-pro-back.herokuapp.com/categories/1]
- all task : [ https://my-liste-pro-back.herokuapp.com/tasks] in GET, POST
- a task: [ https://my-liste-pro-back.herokuapp.com/tasks/1] in PUT, PATCH, DELETE
