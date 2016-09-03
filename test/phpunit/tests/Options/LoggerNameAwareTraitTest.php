<?php
/**
 * @link    https://github.com/nnx-framework/zf-log
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */
namespace Nnx\ZfLog\PhpUnit\Test\Options;

use Nnx\ZfLog\Options\LoggerNameAwareTrait;
use PHPUnit_Framework_TestCase;

/**
 * Class LoggerNameAwareTraitTest
 *
 * @package Nnx\ZfLog\PhpUnit\Test\Options
 */
class LoggerNameAwareTraitTest extends PHPUnit_Framework_TestCase
{
    /**
     * Проверяте работу трейта
     *
     * @throws \PHPUnit_Framework_Exception
     */
    public function testGetterSetterLoggerName()
    {
        /** @var LoggerNameAwareTrait  $trait */
        $trait = $this->getMockForTrait(LoggerNameAwareTrait::class);

        $expected = 'testLoggerName';

        static::assertEquals($trait, $trait->setLoggerName($expected));
        static::assertEquals($expected, $trait->getLoggerName());
    }
}
