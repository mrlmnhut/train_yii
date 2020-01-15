<?php /** @noinspection PhpClassNamingConventionInspection */

use yii\db\Migration;

/**
 * Class m130000_000010_create_table_job_application
 */
class m130000_000010_create_table_job_application extends Migration{

	/**
	 * @return bool|void
	 */
	public function up(){
		$table_options = NULL;
		if ($this->db->driverName === 'mysql'){
			$table_options = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		}

		$this->createTable('{{%job_application}}', [
			'id'              => $this->primaryKey(),
			'job_id'          => $this->integer(11),
			'name'            => $this->string(50)->notNull(),
			'nationality_id'  => $this->integer(11)->notNull(),
			'contact'         => $this->string(10)->notNull(),
			'email'           => $this->string(50)->notNull(),
			'address'         => $this->string(255)->notNull(),
			'postal_code'     => $this->string(6)->notNull(),
			'current_salary'  => $this->double(2)->notNull(),
			'expected_salary' => $this->double(2)->notNull(),
			'resume'          => $this->text()->notNull(),

			'status'     => $this->tinyInteger(4)->notNull(),
			'created_at' => $this->integer(11)->notNull(),
			'created_by' => $this->integer(11),
			'updated_at' => $this->integer(11)->notNull(),
			'updated_by' => $this->integer(11),
		], $table_options);

		$this->createIndex(
			'idx_job_id',
			'{{%job_application}}',
			'job_id'
		);

		$this->createIndex(
			'idx_nationality_id',
			'{{%job_application}}',
			'nationality_id'
		);
		$this->createIndex(
			'unq_job_application_email',
			'{{%job_application}}',
			'email',
			'true'
		);
		$this->addForeignKey(
			'fk_job_id',
			'{{%job_application}}',
			'job_id',
			'{{%job}}',
			'id',
			'NO ACTION',
			'NO ACTION'
		);
		$this->addForeignKey(
			'fk_nationality_id',
			'{{%job_application}}',
			'nationality_id',
			'{{%nationality}}',
			'id',
			'NO ACTION',
			'NO ACTION'
		);
	}

	/**
	 * @return bool|void
	 */
	public function down(){
		$this->dropTable('{{%job_application}}');

		$this->dropIndex(
			'idx_job_id',
			'{{%job_application}}'
		);

		$this->dropIndex(
			'idx_nationality_id',
			'{{%job_application}}'
		);
		$this->dropIndex(
			'unq_job_application_email',
			'{{%job_application}}'
		);
		$this->dropForeignKey(
			'fk_job_id',
			'{{%job_application}}'
		);
		$this->dropForeignKey(
			'fk_nationality_id',
			'{{%job_application}}'
		);
	}
}
