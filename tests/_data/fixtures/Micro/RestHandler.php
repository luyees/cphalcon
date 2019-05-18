<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Fixtures\Micro;

class RestHandler
{
    /**
     * @var int
     */
    protected $access = 0;

    /**
     * @var array
     */
    protected $trace = [];



    public function find()
    {
        $this->access++;

        $this->trace[] = 'find';
    }

    public function save()
    {
        $this->access++;

        $this->trace[] = 'save';
    }

    public function delete()
    {
        $this->access++;

        $this->trace[] = 'delete';
    }



    public function getNumberAccess(): int
    {
        return $this->access;
    }

    public function getTrace(): array
    {
        return $this->trace;
    }
}