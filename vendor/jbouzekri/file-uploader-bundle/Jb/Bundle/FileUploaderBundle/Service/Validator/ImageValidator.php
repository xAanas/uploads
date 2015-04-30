<?php

/**
 * Copyright 2014 Jonathan Bouzekri. All rights reserved.
 *
 * @copyright Copyright 2014 Jonathan Bouzekri <jonathan.bouzekri@gmail.com>
 * @license https://github.com/jbouzekri/FileUploaderBundle/blob/master/LICENSE
 * @link https://github.com/jbouzekri/FileUploaderBundle
 */

namespace Jb\Bundle\FileUploaderBundle\Service\Validator;

use Jb\Bundle\FileUploaderBundle\Exception\ValidationException;

/**
 * ImageValidator
 *
 * @author jobou
 */
class ImageValidator extends AbstractImageValidator
{
    /**
     * {@inheritdoc}
     */
    protected function extractWidthHeight($value)
    {
        $size = @getimagesize($this->formatValue($value));

        if (empty($size) || ($size[0] === 0) || ($size[1] === 0)) {
            throw new ValidationException('Unable to determine size.');
        }

        return array(
            'width' => $size[0],
            'height' => $size[1]
        );
    }
}
