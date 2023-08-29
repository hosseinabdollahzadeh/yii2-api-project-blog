<?php
namespace frontend\resource;

class Post extends \common\models\Post
{
    public function fields()
    {
        return ['id', 'title', 'body'];
    }

    public function extraFields()
    {
        return ['created_at', 'updated_at', 'created_by'];
    }
}