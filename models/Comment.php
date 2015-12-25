<?php

namespace dmuratov\comment\models;

use yii\db\ActiveRecord;

/**
 * Class Comment
 * @package dmuratov\comment\models
 *
 * @property string $objectClass
 * @property int $objectPk
 * @property string $type
 * @property int $userPk
 * @property string $text
 * @property string $date
 */
class Comment extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%comment}}';
    }

    /**
     * This method adds new comment.
     *
     * @param $objectClass
     * @param $objectPk
     * @param $text
     * @param null $type
     * @param null $userPk
     */
    public static function add($objectClass, $objectPk, $text, $type = null, $userPk = null)
    {
        $record = new self();

        if ($objectClass instanceof ActiveRecord) {
            $record->objectClass = str_replace('\\', '_', get_class($objectClass));
        } else {
            $record->objectClass = str_replace('\\', '_', $objectClass);
        }

        $record->objectPk = $objectPk;
        $record->text = $text;
        $record->type = $type;
        $record->date = date('Y-m-d H:i:s');
        $record->userPk = $userPk;

        $record->save(false);
    }
}