<?php

namespace Gourmet\CommonMark\Utility;

use League\CommonMark\CommonMarkConverter as Converter;
use League\CommonMark\DocParser;
use League\CommonMark\Environment;
use League\CommonMark\HtmlRenderer;

trait CommonMarkAwareTrait
{
    protected $_cmEnvironment;

    public function convertToHtml($markdown, Converter $converter = null)
    {
        if (!is_null($this->_cmEnvironment)) {
            return $this->renderMarkdown($markdown);
        }

        if (is_null($converter)) {
            $converter = new Converter();
        }

        return $converter->convertToHtml($markdown);
    }

    public function setCommonMarkEnvironment(Environment $environment = null)
    {
        if (is_null($environment)) {
            $environment = Environment::createCommonMarkEnvironment();
        }
        $this->_cmEnvironment = $environment;
    }

    public function getCommonMarkEnvironment()
    {
        if (is_null($this->_cmEnvironment)) {
            $this->setCommonMarkEnvironment();
        }
        return $this->_cmEnvironment;
    }

    public function parseMarkdown($markdown)
    {
        $parser = new DocParser($this->getCommonMarkEnvironment());
        return $parser->parse($markdown);
    }

    public function renderDocument($ast)
    {
        $renderer = new HtmlRenderer($this->getCommonMarkEnvironment());
        return $renderer->renderBlock($ast);
    }

    public function renderMarkdown($markdown)
    {
        $document = $this->parseMarkdown($markdown);
        $event = $this->dispatchEvent('CommonMark.beforeRender', $this, compact('document'));
        return $this->renderDocument($event->data['document']);
    }
}
