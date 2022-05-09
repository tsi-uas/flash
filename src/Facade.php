<?php

namespace Halo\Flash;

use Illuminate\Support\Facades\Facade as BaseFacade;

/**
 * @see \Halo\Flash\Flash
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
