<?php
/**
 * @link    https://github.com/nnx-framework/zf-log
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */
namespace Nnx\ZfLog\Options;

/**
 * Interface LoggerNameInterface
 *
 * @package Nnx\ZfLog\Options
 */
interface LoggerNameInterface
{
    /**
     * Возвращает имя используемого логера
     *
     * @return string
     */
    public function getLoggerName();
}
