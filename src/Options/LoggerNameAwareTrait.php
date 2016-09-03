<?php
/**
 * @link    https://github.com/nnx-framework/zf-log
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */
namespace Nnx\ZfLog\Options;

/**
 * Class LoggerNameAwareTrait
 *
 * @package Nnx\ZfLog\Options
 */
trait LoggerNameAwareTrait
{
    /**
     * Имя используемого логгера
     *
     * @var string
     */
    private $loggerName;

    /**
     * Возвращает имя используемого логера
     *
     * @return string
     */
    public function getLoggerName()
    {
        return $this->loggerName;
    }

    /**
     * Устанавливает имя используемого логера
     *
     * @param string $loggerName
     *
     * @return $this
     */
    public function setLoggerName($loggerName)
    {
        $this->loggerName = (string)$loggerName;

        return $this;
    }
}
