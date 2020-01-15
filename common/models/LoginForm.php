<?php

namespace common\models;

use Yii;
use yii\base\Model;

/**
 * Login form
 */
class LoginForm extends Model{

	public $username;
	public $password;
	public $remember_me = TRUE;

	private $_user;


	/**
	 * {@inheritdoc}
	 */
	public function rules(){
		return [
			// username and password are both required
			[['username', 'password'], 'required'],
			// remember_me must be a boolean value
			['remember_me', 'boolean'],
			// password is validated by validatePassword()
			['password', 'validatePassword'],
		];
	}

	/**
	 * Validates the password.
	 * This method serves as the inline validation for password.
	 *
	 * @param string $attribute the attribute currently being validated
	 */
	public function validatePassword($attribute){
		if (!$this->hasErrors()){
			$user = $this->getUser();
			if (!$user || !$user->validatePassword($this->password)){
				$this->addError($attribute, 'Incorrect username or password.');
			}
		}
	}

	/**
	 * Logs in a user using the provided username and password.
	 *
	 * @return bool whether the user is logged in successfully
	 */
	public function login(){
		if ($this->validate()){
			return Yii::$app->user->login($this->getUser(),
				$this->remember_me ? 3600 * 24 * 30 : 0);
		}

		return FALSE;
	}

	/**
	 * Finds user by [[username]]
	 *
	 * @return User|null
	 */
	protected function getUser(){
		if ($this->_user === NULL){
			$this->_user = User::findByUsername($this->username);
		}

		return $this->_user;
	}
}
