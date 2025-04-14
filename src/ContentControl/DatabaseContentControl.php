<?php declare(strict_types=1);

namespace ManageDatabase\ContentControl;

use Base3Manager\ContentControl\AbstractContentControl;

class DatabaseContentControl extends AbstractContentControl {

        // Implementation of IBase

        public function getName(): string {
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

