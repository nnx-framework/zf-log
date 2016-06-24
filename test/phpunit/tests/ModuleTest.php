<?php
/**
 * @link    https://github.com/nnx-framework/zf-log
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */
namespace Nnx\ZfLog\PhpUnit\Test;

use Nnx\ZfLog\PhpUnit\TestData\TestPaths;
use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;
use Nnx\ZfLog\Module;


/**
 * Class ModuleTest
 *
 * @package Nnx\ModuleOptions\PhpUnit\Test
 */
class ModuleTest extends AbstractHttpControllerTestCase
{
    /**
     *
     * @return void
     * @throws \Zend\Stdlib\Exception\LogicException
     */
    public function testLoadModule()
    {
        /** @noinspection PhpIncludeInspection */
        $this->setApplicationConfig(
            include TestPaths::getPathToDefaultAppConfig()
        );

        $this->assertModulesLoaded([Module::MODULE_NAME]);
    }
}
