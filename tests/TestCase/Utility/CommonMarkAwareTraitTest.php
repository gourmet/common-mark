<?php

namespace Gourmet\CommonMark\Test\TestCase\Utility;

use Cake\Event\Event;
use Cake\TestSuite\TestCase;

class CommonMarkAwareTraitTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->CommonMark = $this->getMockForTrait(
            'Gourmet\CommonMark\Utility\CommonMarkAwareTrait',
            [],
            '',
            true,
            true,
            true,
            ['dispatchEvent'],
            false
        );
    }

    public function tearDown()
    {
        parent::tearDown();
        unset($this->CommonMark);
    }

    public function testConvertToHtml()
    {
        $result = $this->CommonMark->convertToHtml('# Foo');
        $expected = "<h1>Foo</h1>\n";
        $this->assertEquals($expected, $result);
    }

    public function testParseMarkdown()
    {
        $result = $this->CommonMark->parseMarkdown('# Foo');
        $this->assertInstanceOf('League\CommonMark\Block\Element\Document', $result);
    }

    public function testRenderDocument()
    {
        $result = $this->CommonMark->renderDocument($this->CommonMark->parseMarkdown('# Foo'));
        $expected = "<h1>Foo</h1>\n";
        $this->assertEquals($expected, $result);
    }

    public function testRenderMarkdown()
    {
        $this->CommonMark->expects($this->once())
            ->method('dispatchEvent')
            ->with('CommonMark.beforeRender', $this->CommonMark, ['document' => $this->CommonMark->parseMarkdown('# Foo')])
            ->will($this->returnValue(new Event('CommonMark.beforeRender', $this->CommonMark, ['document' => $this->CommonMark->parseMarkdown('# Foo')])));

        $result = $this->CommonMark->renderMarkdown('# Foo');

        $expected = "<h1>Foo</h1>\n";
        $this->assertEquals($expected, $result);
    }
}
