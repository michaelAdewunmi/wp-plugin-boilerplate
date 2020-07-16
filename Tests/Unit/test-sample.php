<?php
namespace PluginNameSpaceTest\Tests\Unit;

class SampleTest extends \WP_UnitTestCase
{
    public function testSample()
    {
        // replace this with some actual testing code
        $this->assertTrue(true);
    }

    public function testSampleString()
    {
        $string = 'Unit tests are sweet';
        $this->assertEquals('Unit tests are sweet', $string);
    }

    public function testAnotherSampleString()
    {
        $string = 'Failing Unit tests are sad';
        $this->assertEquals('Failing Unit tests are sad', $string);
    }
}