<?php

namespace App\application\module;

interface getStudentsListInterface {

	/**
	 * This method returns array of all students from the database.
	 *
	 * @return array
	 */
	public function execute(): array;

}