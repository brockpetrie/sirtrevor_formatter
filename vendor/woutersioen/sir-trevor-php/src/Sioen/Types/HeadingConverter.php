<?php

namespace Sioen\Types;

use \Michelf\Markdown;

class HeadingConverter extends BaseConverter implements ConverterInterface
{
    public function toJson(\DOMElement $node)
    {
        $html = $node->ownerDocument->saveXML($node);

        // remove the h2 tags from the text. We just need the inner text.
        $html = preg_replace('/<(\/|)h3>/i', '', $html);

        return array(
            'type' => 'heading',
            'data' => array(
                'text' => ' ' . $this->htmlToMarkdown($html)
            )
        );
    }

    public function toHtml(array $data)
    {
        return Markdown::defaultTransform('### ' . $data['text']);
    }
}
