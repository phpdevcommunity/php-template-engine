<?php

namespace Test\DevCoder;

use DevCoder\Template;
use PHPUnit\Framework\TestCase;

/**
 * Class TemplateTest
 * @package Test\DevCoder
 */
class TemplateTest extends TestCase {

    public function testRender()
    {
        $tp = new Template(__DIR__.'/template');
        $this->assertIsString($tp->render('index.tpl.php', ['name' => 'toto']));
        $this->assertEquals('<p>Hi toto,</p><p>You are welcomed to toto</p>, Your salary is toto', $tp->render('index.tpl.php', ['name' => 'toto']));
    }
}
