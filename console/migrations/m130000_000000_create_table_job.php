<?php /** @noinspection PhpClassNamingConventionInspection */

use yii\db\Migration;

/**
 * Class m130000_000000_create_table_job
 */
class m130000_000000_create_table_job extends Migration{

	/**
	 * @return bool|void
	 */
	public function up(){
		$table_options = NULL;
		if ($this->db->driverName === 'mysql'){
			// http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
			$table_options = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		}

		$this->createTable('{{%job}}', [
			'id'                => $this->primaryKey(),
			'title'             => $this->string(255)->notNull(),
			'description'       => $this->text()->notNull(),
			'type_id'           => $this->integer(11)->notNull(),
			'classification_id' => $this->integer(11)->notNull(),
			'location_id'       => $this->integer(11)->notNull(),
			'salary'            => $this->double()->notNull(),
			'working_hours'     => $this->string(50)->notNull(),

			'status'     => $this->tinyInteger(4)->notNull(),
			'created_at' => $this->integer(11)->notNull(),
			'created_by' => $this->integer(11)->notNull(),
			'updated_at' => $this->integer(11)->notNull(),
			'updated_by' => $this->integer(11)->notNull(),
		], $table_options);

		$this->createIndex(
			'idx_job_type_id',
			'{{%job}}',
			'type_id'
		);

		$this->createIndex(
			'idx_job_classification_id',
			'{{%job}}',
			'classification_id'
		);

		$this->createIndex(
			'idx_job_location_id',
			'{{%job}}',
			'location_id'
		);
		$this->addForeignKey(
			'fk_job_type_id',
			'{{%job}}',
			'type_id',
			'{{%job_type}}',
			'id',
			'NO ACTION',
			'NO ACTION'
		);
		$this->addForeignKey(
			'fk_job_classification_id',
			'{{%job}}',
			'classification_id',
			'{{%job_classification}}',
			'id',
			'NO ACTION',
			'NO ACTION'
		);
		$this->addForeignKey(
			'fk_job_location_id',
			'{{%job}}',
			'location_id',
			'{{%job_location}}',
			'id',
			'NO ACTION',
			'NO ACTION'
		);
	}

	/**
	 * @return bool|void
	 */
	public function down(){
		$this->dropTable('{{%job}}');

		$this->dropIndex(
			'idx_job_type_id',
			'{{%job}}'
		);

		$this->dropIndex(
			'idx_job_classification_id',
			'{{%job}}'
		);

		$this->dropIndex(
			'idx_job_location_id',
			'{{%job}}'
		);
		$this->dropForeignKey(
			'fk_job_type_id',
			'{{%job}}'
		);
		$this->dropForeignKey(
			'fk_job_classification_id',
			'{{%job}}'
		);
		$this->dropForeignKey(
			'fk_job_location_id',
			'{{%job}}'
		);
	}
}
