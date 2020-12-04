<?php

namespace Test;

interface deleteStudentInterface {

	/**
	 * This method returns TRUE if student was deleted from the list and returns error message if not.
	 *
	 * @param int $id
	 *
	 * @return bool
	 */
	public function execute(int $id): bool;

}