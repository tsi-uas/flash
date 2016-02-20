<?php

namespace Reed\Flash;

use Illuminate\Support\Facades\Session;

/**
 * Flashes various Messages to the Session.
 *
 * @see view('partials.flashes')
 */
class Flash
{
	/**
	 * Flashes a Success Message to the Session.
	 *
	 * @param  string  $message  The Message to Flash.
	 *
	 * @return void
	 */
	public function success($message)
	{
		$this->flash('success', $message);
	}

	/**
	 * Flashes a Warning Message to the Session.
	 *
	 * @param  string  $message  The Message to Flash.
	 *
	 * @return void
	 */
	public function warning($message)
	{
		$this->flash('warning', $message);
	}

	/**
	 * Flashes a Danger Message to the Session.
	 *
	 * @param  string  $message  The Message to Flash.
	 *
	 * @return void
	 */
	public function danger($message)
	{
		$this->flash('danger', $message);
	}

	/**
	 * Flashes a Primary Message to the Session.
	 *
	 * @param  string  $message  The Message to Flash.
	 *
	 * @return void
	 */
	public function primary($message)
	{
		$this->flash('primary', $message);
	}

	/**
	 * Flashes an Info Message to the Session.
	 *
	 * @param  string  $message  The Message to Flash.
	 *
	 * @return void
	 */
	public function info($message)
	{
		$this->flash('info', $message);
	}

	/**
	 * Flashes a Message to the Session.
	 *
	 * @param  string  $type 	 The Type of Message to Flash.
	 * @param  string  $message  The Message to Flash.
	 *
	 * @return void
	 */
	private function flash($type, $message)
	{
		// Determine the Current Session Flash Type
		$flash = Session::has($type) ? Session::get($type) : array();

		// Prevent Duplicate Messages from Appearing
		if(!in_array($message, $flash))
			$flash[] = $message; // Add the Message to the Flashes

		// Flash the Message
		Session::flash($type, $flash);
	}
}