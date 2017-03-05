<?php

/*
 * This file is part of the Patron package.
 *
 * (c) Olivier Laviale <olivier.laviale@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Patron\RenderSupport;

class PatronEngineTest extends \PHPUnit_Framework_TestCase
{
    public function test_render()
    {
        $engine = new PatronEngine;
        $html = $engine(__DIR__ . '/templates/sample.patron', [ "one", "two", "three" ], [

            "one" => "TESTING1",
            "two" => "TESTING2"

        ]);

        $expected = <<<EOT
onetwothree
TESTING1
TESTING2

EOT;

        $this->assertEquals($expected, $html);
    }
}
