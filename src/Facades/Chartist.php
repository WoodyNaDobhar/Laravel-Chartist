<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Chartist.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WoodyNaDobhar\Chartist\Facades;

use Illuminate\Support\Facades\Facade;

class Chartist extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'chartist';
    }
}
