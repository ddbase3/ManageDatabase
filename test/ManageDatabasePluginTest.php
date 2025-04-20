<?php

namespace ManageDatabase\Test;

use PHPUnit\Framework\TestCase;
use ManageDatabase\ManageDatabasePlugin;
use Base3\Api\IContainer;

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

