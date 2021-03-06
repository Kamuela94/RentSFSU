<?php

/**
 * Class Problem
 * Formerly named "Error", but as PHP 7 does not allow Error as class name anymore (as there's a Error class in the
 * PHP core itself) it's now called "Problem"
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Disabled extends Controller {
	/**
	 * PAGE: index
	 * This method handles the error page that will be shown when a page is not found
	 */
	public function index() {
		// load views
		require APP . 'view/_templates/header.php';
		if (empty($_SESSION) || empty($_SESSION['UserId'])) {
			require APP . 'view/_templates/default_navbar.php';
			require APP . 'view/_templates/login_modal.php';
		} else {
			require APP . 'view/_templates/user_navbar.php';
		}
		require APP . 'view/disabled/index.php';
		require APP . 'view/_templates/footer.php';
	}
}
