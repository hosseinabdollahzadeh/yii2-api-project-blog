<?php

namespace frontend\resource;

class User extends \common\models\User
{
    public function fields()
    {
        return ['id', 'username', 'email'];
    }

    public function extraFields()
    {
        return parent::extraFields(); // TODO: Change the autogenerated stub
    }
}