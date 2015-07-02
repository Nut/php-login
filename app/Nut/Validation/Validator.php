<?php

namespace Nut\Validation;

use Violin\Violin;
use Nut\User\User;

class Validator extends Violin
{
	protected $user;

	public function __construct(User $user)
	{
		$this->user = $user;

		$this->addFieldMessages([
			'email' => [
				'uniqueEmail' => 'That email is already in use.'
			],
			'username' => [
				'uniqueUsername' => 'That username is already in use.'
			]
		]);
	}

	public function validate_uniqueEmail($value, $input, $args)
	{
		return ! (bool) $this->user->where('email', $value)->count();
	}

	public function validate_uniqueUsername($value, $input, $args)
	{
		return ! (bool) $this->user->where('username', $value)->count();
	}
}