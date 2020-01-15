<?php /** @noinspection PhpClassNamingConventionInspection */

use yii\db\Migration;

/**
 * Class m120000_000020_create_table_job_location
 */
class m120000_000020_create_table_job_location extends Migration{

	/**
	 * @return bool|void
	 */
	public function up(){
		$table_options = NULL;
		if ($this->db->driverName === 'mysql'){
			$table_options = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		}

		$this->createTable('{{%job_location}}', [
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
			'unq_job_location_name',
			'{{%job_location}}',
			'name',
			'true'
		);
	}

	/**
	 * @return bool|void
	 */
	public function down(){
		$this->dropTable('{{%job_location}}');
		$this->dropIndex(
			'unq_job_location_name',
			'{{%job_location}}'
		);
	}
}
