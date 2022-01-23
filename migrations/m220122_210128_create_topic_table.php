<?php /** @noinspection PhpUnused */

use yii\db\Migration;

/**
 * Handles the creation of table `{{%topic}}`.
 */
class m220122_210128_create_topic_table extends Migration

{

    /**
     * {@inheritdoc}
     */

    public function safeUp()

    {

        $this->createTable('{{%topic}}', [

            'id' => $this->primaryKey(),

            'name' => $this->string(),

        ]);

    }

    /**
     * {@inheritdoc}
     */

    public function safeDown()

    {

        $this->dropTable('{{%topic}}');

    }

}