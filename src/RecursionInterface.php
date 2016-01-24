<?php
/*
 * This file is part of the recursion-test.
 *
 * Author: David Bou <contact@boudavid.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kokoroe\Recruitment;

interface RecursionInterface
{
    /**
     * Filter tree with array of ids given
     *
     * @return void
     */
    public function filterTree(&$tree, $ids);
}
