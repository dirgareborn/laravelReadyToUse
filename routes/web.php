<?php

//only for the web
Route::get("email/{idUser}/{codeEmail}",    "EmailController@getPage");
Route::get("google",                        "GoogleController@redirectToProvider");
Route::get("googleCallBack",                "GoogleController@handleProviderCallBack");
Route::get("notJavascript",                 "NotJavascriptController@getPage");

//web and api
Route::resource("/",            "HomeController",       array("only" => array("index")));
Route::resource("account",      "AccountController",    array("only" => array("index", "edit", "store", "update", "destroy")));
Route::resource("connection",   "ConnectionController", array("only" => array("index", "edit", "store")));
Route::resource("contact",      "ContactController",    array("only" => array("index", "store")));
Route::resource("lang",         "LangController",       array("only" => array("edit")));
Route::resource("service",      "ServiceController",    array("only" => array("index")));
Route::resource("view",         "ViewController",       array("only" => array("index", "show")));
