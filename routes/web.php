<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Hola desde la página de inicio";
});

// Ruta para mostrar el listdo de registros
Route::get('/posts', function () {
    return "Hola desde la página de posts";
});

// Ruta para mostrar un formulario para crear un registro
Route::get('/posts/create', function () {
    return "Aquí se mostrará el formulario para crear un post";
});

// Ruta para guardar el registro en la base de datos
Route::post('/posts', function () {
    return "Aquí se guardará el post en la base de datos";
});

// Ruta para mostrar un registro
Route::get('/posts/{posts}', function ($posts) {
    return "Aquí se mostrará el post: $posts";
});

// Ruta para mostrar un formulario para editar un registro
Route::get('/posts/{posts}/edit', function ($posts) {
    return "Aquí se mostrará el formulario para editar el post: $posts";
});

// Ruta para actualizar el registro en la base de datos
Route::put('/posts/{post}', function ($post) {
    return "Aquí se actualizará el post: $post en la base de datos";
});

// Ruta para eliminar un registro de la base de datos
Route::delete('/posts/{post}', function ($post) {
    return "Aquí se eliminará el post: $post de la base de datos";
});