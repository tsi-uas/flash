<?php

namespace Reed\Flash;

use Illuminate\Support\Facades\Facade as BaseFacade;

/**
 * @see Flash
 */
class Facade extends BaseFacade
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
