<?php

use yii\db\Schema;
use yii\db\Migration;

class m151224_163533_comment extends Migration
{
    public function up()
    {
        $this->createTable(\dmuratov\comment\models\Comment::tableName(), [
            'id'                => Schema::TYPE_PK,
            'objectClass'       => Schema::TYPE_STRING,
            'objectPk'          => Schema::TYPE_INTEGER,
            'type'              => Schema::TYPE_STRING,
            'userPk'            => Schema::TYPE_INTEGER,
            'text'              => Schema::TYPE_TEXT,
            'date'              => Schema::TYPE_DATETIME,
        ]);
    }

    public function down()
    {
        $this->dropTable(\dmuratov\comment\models\Comment::tableName());
    }
}
