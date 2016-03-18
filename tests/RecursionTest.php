<?php
/*
 * This file is part of the recursion-test.
 *
 * Author: David Bou <contact@boudavid.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kokoroe\Recruitment\Test;

use Kokoroe\Recruitment\Recursion;

class RecursionTest extends \PHPUnit_Framework_TestCase
{
    public function testTree()
    {
        $recursion = new Recursion();

        $tree = [
            [
                'id' => 1,
                'children' => [
                    [
                        'id' => 2,
                        'children' => [
                            [
                                'id' => 3
                            ],
                            [
                                'id' => 4
                            ]
                        ]
                    ]
                ]
            ],
            [
                'id'        => 5,
                'children'  => [
                    [
                        'id' => 6
                    ]
                ]
            ],
            [
                'id' => 7
            ]
        ];

        $ids = [1, 3, 5];

        $recursion->filterTree($tree, $ids);

        $this->assertEquals([
            [
                'id' => 1,
                'children' => [
                    [
                        'id' => 2,
                        'children' => [
                            [
                                'id' => 3
                            ]
                        ]
                    ]
                ]
            ],
            [
                'id' => 1
            ],
            [
                'id' => 5
            ]
        ], array_values($tree));
    }
}
