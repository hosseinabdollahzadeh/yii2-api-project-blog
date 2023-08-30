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
        return ['created_at', 'updated_at', 'createdBy', 'comments'];
    }

    /**
     * Gets query for [[Comments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::class, ['post_id' => 'id']);
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