<?php

namespace dmuratov\comment;


use dmuratov\comment\models\Comment;
use yii\base\Behavior;

class CommentBehaviour extends Behavior
{
    /**
     * @param $text
     * @param null $type
     * @param null $userPk
     */
    public function addComment($text, $type = null, $userPk = null)
    {
        Comment::add(get_class($this->owner), $this->owner->id, $text, $type, $userPk);
    }

    /**
     * @param null $type
     * @return \yii\db\ActiveQuery
     */
    public function getComments($type = null)
    {
        $query = Comment::find()->andWhere([
            'objectClass' => str_replace('\\', '_', get_class($this->owner)),
            'objectPk' => $this->owner->id,
        ]);

        if ($type) {
            $query->andWhere(['type' => $type]);
        }

        return $query;
    }
}