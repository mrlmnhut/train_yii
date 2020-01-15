<?php /** @noinspection PhpClassNamingConventionInspection */

use yii\db\Migration;

/**
 * Class m120000_000010_create_table_job_type
 */
class m120000_000010_create_table_job_type extends Migration{

	/**
	 * @return bool|void
	 */
	public function up(){
		$table_options = NULL;
		if ($this->db->driverName === 'mysql'){
			$table_options = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		}

		$this->createTable('{{%job_type}}', [
			'id'          => $this->primaryKey(),
			'name'        => $this->string(50)->notNull(),
			'description' => $this->string(255)->notNull(),

			'status'     => $this->tinyInteger(4)->notNull(),
			'created_at' => $this->integer(11)->notNull(),
			'created_by' => $this->integer(11)->notNull(),
			'updated_at' => $this->integer(11)->notNull(),
			'updated_by' => $this->integer(11)->notNull(),
		], $table_options);
		$this->createIndex(
			'unq_job_type_name',
			'{{%job_type}}',
			'name',
			'true'
		);
	}

	/**
	 * @return bool|void
	 */
	public function down(){
		$this->dropTable('{{%job_type}}');
		$this->dropIndex(
			'unq_job_type_name',
			'{{%job_type}}'
		);

	}
}
