<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    // Backpack\NewsCRUD
    CRUD::resource('article', 'ArticleCrudController');
    CRUD::resource('category', 'CategoryCrudController');
    CRUD::resource('tag', 'TagCrudController');
    // Ingame user
    CRUD::resource('game/user', 'GameUserCrudController');
    CRUD::resource('game/character', 'GameCharacterCrudController');
    CRUD::resource('game/item', 'GameItemCrudController');
