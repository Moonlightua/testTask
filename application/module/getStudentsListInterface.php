<?php

namespace Test;

interface getStudentsListInterface {

	/**
	 * This method returns array of all students from the database.
	 *
	 * @return array
	 */
	public function execute(): array;

}