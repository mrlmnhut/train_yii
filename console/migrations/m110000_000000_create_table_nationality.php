<?php /** @noinspection PhpClassNamingConventionInspection */

use yii\db\Migration;

/**
 * Class m110000_000000_create_table_nationality
 */
class m110000_000000_create_table_nationality extends Migration{

	/**
	 * @return bool|void
	 */
	public function up(){
		$table_options = NULL;
		if ($this->db->driverName === 'mysql'){
			// http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
			$table_options = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		}

		$this->createTable('{{%nationality}}', [
			'id'          => $this->primaryKey(),
			'name'        => $this->string(50)->notNull()->unique(),
			'description' => $this->string(255)->notNull(),


			'status'     => $this->tinyInteger(4)->notNull(),
			'created_at' => $this->integer(11)->notNull(),
			'created_by' => $this->integer(11)->notNull(),
			'updated_at' => $this->integer(11)->notNull(),
			'updated_by' => $this->integer(11)->notNull(),
		], $table_options);
		$this->createIndex(
			'unq_nationality_name',
			'{{%nationality}}',
			'name',
			'true'
		);
	}

	/**
	 * @return bool|void
	 */
	public function down(){
		$this->dropTable('{{%nationality}}');
		$this->dropIndex(
			'unq_nationality_name',
			'{{%nationality}}'
		);
	}
}
