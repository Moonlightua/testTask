<?php

namespace Test;

interface editStudentInterface {

	/**
	 * This method returns TRUE if student's data was updated and return error message if not.
	 *
	 * @param int $id
	 * @param string $name
	 * @param string $gender
	 * @param int $age
	 * @param string $group
	 *
	 * @return bool
	 */
	public function execute(int $id,string $name, string $gender, int $age, string $group): bool;

}