<?php /** @noinspection PhpClassNamingConventionInspection */

use yii\db\Migration;

/**
 * Class m100000_000000_create_table_user
 */
class m100000_000000_create_table_user extends Migration{

	/**
	 * @return bool|void
	 */
	public function up(){
		$table_options = NULL;
		if ($this->db->driverName === 'mysql'){
			// http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
			$table_options = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		}

		$this->createTable('{{%user}}', [
			'id'                   => $this->primaryKey(),
			'username'             => $this->string()->notNull()->unique(),
			'auth_key'             => $this->string(32)->notNull(),
			'password_hash'        => $this->string()->notNull(),
			'password_reset_token' => $this->string()->unique(),
			'email'                => $this->string()->notNull()->unique(),

			'status'     => $this->smallInteger()->notNull()->defaultValue(10),
			'created_at' => $this->integer()->notNull(),
			'updated_at' => $this->integer()->notNull(),
		], $table_options);
	}

	/**
	 * @return bool|void
	 */
	public function down(){
		$this->dropTable('{{%user}}');
	}
}
