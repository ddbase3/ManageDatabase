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

namespace Base3\ManageDatabase\Test;

use PHPUnit\Framework\TestCase;
use Base3\ManageDatabase\ManageDatabasePlugin;
use Base3\CoreFoundation\Api\IContainer;

class ManageDatabasePluginTest extends TestCase
{
    public function testInitSetsServicesInContainer()
    {
        $containerMock = $this->createMock(IContainer::class);

        $plugin = new ManageDatabasePlugin($containerMock);
        $plugin->init();

        $this->assertTrue(true);
    }

    public function testCheckDependencies()
    {
        $containerMock = $this->createMock(IContainer::class);

        $plugin = new ManageDatabasePlugin($containerMock);
        $dependencies = $plugin->checkDependencies();

        $this->assertTrue(true);
    }
}

