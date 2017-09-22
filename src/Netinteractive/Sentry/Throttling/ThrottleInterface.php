<?php namespace Netinteractive\Sentry\Throttling;
/**
 * Part of the Sentry package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Sentry
 * @version    2.0.0
 * @author     Netinteractive LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011 - 2013, Netinteractive LLC
 * @link       http://cartalyst.com
 */

interface ThrottleInterface {

	/**
	 * Returns the associated user with the throttler.
	 *
	 * @return \Netinteractive\Sentry\User\UserInterface
	 */
	public function getUser();

	/**
	 * Get the current amount of attempts.
	 *
	 * @return int
	 */
	public function getLoginAttempts();



	/**
	 * Check if the user is suspended.
	 *
	 * @return bool
	 */
	public function isSuspended();


	/**
	 * Check if user is banned
	 *
	 * @return void
	 */
	public function isBanned();

	/**
	 * Check user throttle status.
	 *
	 * @return bool
	 * @throws \Netinteractive\Sentry\Throttling\UserBannedException
	 * @throws \Netinteractive\Sentry\Throttling\UserSuspendedException
	 */
	public function check();

}