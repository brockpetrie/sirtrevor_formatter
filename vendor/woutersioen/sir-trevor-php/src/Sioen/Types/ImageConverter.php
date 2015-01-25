<?php

namespace Sioen\Types;

class ImageConverter extends BaseConverter implements ConverterInterface
{
    public function toJson(\DOMElement $node)
    {
        return array(
            'type' => 'image',
            'data' => array(
                'file' => array(
                    'url' => $node->getAttribute('src')
                )
            )
        );
    }

    public function toHtml(array $data)
    {
        return '<figure><img src="' . $data['file']['url'] . '" /></figure>' . "\n";
    }
}
