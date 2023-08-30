<?php

namespace frontend\resource;

class Comment extends \common\models\Comment
{
    public function fields()
    {
        return ['id', 'title', 'body', 'post_id'];
    }

    public function extraFields()
    {
        return ['created_at', 'updated_at', 'createdBy', 'post'];
    }

    /**
     * Gets query for [[Post]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPost()
    {
        return $this->hasOne(Post::class, ['id' => 'post_id']);
    }


    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::class, ['id' => 'created_by']);
    }
}