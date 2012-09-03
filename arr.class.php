<?php
class arr {

	/**
	 * Get an item from an array.
	 *
	 * "Dot" notation may be used to dig deep into the array.
	 *
	 * <code>
	 *		// Get the $array['user']['name'] value from the array
	 *		$name = arr::get($array, 'user.name');
	 * </code>
	 *
	 * @param	array	$array	Array to retrieve item from
	 * @param	string	$key	Key to retrieve value from
	 * @return	array			Array of retrieved values
	 */
	public static function get($array, $key) {
		foreach (explode('.', $key) as $element) {
			$array = $array[$element];
		}

		return $array;
	}

	/**
	 * Search an array for a specific term.
	 * Search is case-insensitive.
	 *
	 * Differs from PHP in_array function by allowing partial strings to be matched
	 *
	 * @param	array	$array			Array to be searched
	 * @param	string	$searchTerm		String to be searched for
	 * @return	boolean					True if string is found, false if not
	 */
	public static function search($array, $searchTerm) {
		foreach ($array as $value) {
			$value = strtolower($value);
			$searchTerm = strtolower($searchTerm);
			if (strpos($value, $searchTerm)) {
				return true;
			}
		}

		return false;
	}
}