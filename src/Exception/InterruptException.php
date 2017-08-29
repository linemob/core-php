<?php

/*
 * This file is part of the LineMob package.
 *
 * (c) Ishmael Doss <nukboon@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LineMob\Core\Exception;

use LineMob\Core\Command\AbstractCommand;

/**
 * @author Ishmael Doss <nukboon@gmail.com>
 */
class InterruptException extends \Exception
{
    /**
     * @var AbstractCommand
     */
    public $command;
    public $handler;

    public function __construct(AbstractCommand $command, $handler, $code = 0, $previous = null)
    {
        $this->command = $command;
        $this->handler = $handler;

        parent::__construct('', $code, $previous);
    }
}
