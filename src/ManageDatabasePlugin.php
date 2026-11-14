<?php declare(strict_types=1);

/***********************************************************************
 * This file is part of ManageDatabase for BASE3 Framework.
 *
 * ManageDatabase adds database administration controls.
 * It extends Base3Manager with its database-specific views.
 * Storage remains the responsibility of existing backends.
 *
 * Developed by Daniel Dahme
 * Licensed under GPL-3.0
 * https://www.gnu.org/licenses/gpl-3.0.en.html
 *
 * https://base3.de
 ***********************************************************************/


namespace Base3\ManageDatabase;

use Base3\CoreFoundation\Api\IContainer;
use Base3\Base3Manager\Plugin\AbstractPlugin;

class ManageDatabasePlugin extends AbstractPlugin {

	// Implementation of IPlugin

	public function init() {

		$this->container
			->set(self::getName(), $this, IContainer::SHARED);
	}

	// Implementation of ICheck

	public function checkDependencies(): array {
		return array(
			"Check" => "Ok"
		);
	}
}
