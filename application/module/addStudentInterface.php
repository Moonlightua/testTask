<?php

namespace App\application\module;

interface addStudentInterface {

	/**
	 * This method returns TRUE if student was added and returns error message if not.
	 *
	 * @param string $name
	 * @param string $gender
	 * @param int $age
	 * @param string $group
	 *
	 * @return bool
	 */
	public function execute (string $name, string $gender, int $age, string $group): bool;

}