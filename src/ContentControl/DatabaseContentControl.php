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


namespace Base3\ManageDatabase\ContentControl;

use Base3\Base3Manager\ContentControl\AbstractContentControl;

class DatabaseContentControl extends AbstractContentControl {

        // Implementation of IBase

        public static function getName(): string {
                return "databasecontentcontrol";
        }

	// Implementation of AbstractContentControl

        protected function getPath(): string {
                return DIR_PLUGIN . 'ManageDatabase';
        }

        protected function getTemplate(): string {
                return 'ContentControl/DatabaseContentControl.php';
        }

}

