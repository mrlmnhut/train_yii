<?php /** @noinspection PhpClassNamingConventionInspection */

use yii\db\Migration;

/**
 * Class m100000_000010_add_verification_token_column_to_user_table
 */
class m100000_000010_add_verification_token_column_to_user_table extends Migration{

	/**
	 * @return bool|void
	 */
	public function up(){
		$this->addColumn('{{%user}}', 'verification_token', $this->string()->defaultValue(NULL));
	}

	/**
	 * @return bool|void
	 */
	public function down(){
		$this->dropColumn('{{%user}}', 'verification_token');
	}
}
