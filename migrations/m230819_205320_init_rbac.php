<?php

use yii\db\Migration;

/**
 * Class m230819_205320_init_rbac
 */
class m230819_205320_init_rbac extends Migration
{
    // /**
    //  * {@inheritdoc}
    //  */
    // public function safeUp()
    // {

    // }

    // /** 
    //  * {@inheritdoc}
    //  */
    // public function safeDown()
    // {
    //     echo "m230819_205320_init_rbac cannot be reverted.\n";

    //     return false;
    // }

  
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $auth= \Yii::$app->authManager;
        // create student 
        $createStudent = $auth->createPermission('createStudent');
        $createStudent->description="Create Post";
        $auth->add($createStudent);

    }

    public function down()
    {
        $auth = Yii::$app->authManager;

        $auth->removeAll();

        echo "m230819_205320_init_rbac cannot be reverted.\n";

        return false;
    }

}
