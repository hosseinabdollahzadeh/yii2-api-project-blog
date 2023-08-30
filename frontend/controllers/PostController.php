<?php

namespace frontend\controllers;

use frontend\resource\Post;

class PostController extends ApiActiveController
{
    public $modelClass = Post::class;

}