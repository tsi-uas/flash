<?php

namespace Reed\Flash;

use Illuminate\Support\Facades\Facade;

/**
 * @see App\Helpers\Flash
 */
class Flash extends Facade
{
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'flash';
	}
}
