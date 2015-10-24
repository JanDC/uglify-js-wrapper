<?php

namespace UglifyJsWrapper\Tests;

use UglifyJsWrapper\Wrapper;
use UglifyJsWrapper\Options;
use PHPUnit_Framework_TestCase;

class WrapperTest extends PHPUnit_Framework_TestCase
{

    /**
     * The content of the sample.min.js file is the output of
     * uglifyjs --compress --mangle -- sample.js
     * and should be equal to the output of the php wrapper
     */
    public function testOutput()
    {
        $output = Wrapper::execute(__DIR__ . '/js/sample.js', [Options::COMPRESS, Options::MANGLE]);
        $this->assertEquals(file_get_contents(__DIR__ . '/js/sample.min.js'), $output);
    }
}
