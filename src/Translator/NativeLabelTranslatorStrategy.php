<?php

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\AdminBundle\Translator;

/**
 * @author Thomas Rabaix <thomas.rabaix@sonata-project.org>
 */
class NativeLabelTranslatorStrategy implements LabelTranslatorStrategyInterface
{
    public function getLabel($label, $context = '', $type = '')
    {
        $label = str_replace(['_', '.'], ' ', $label);
        $label = strtolower(preg_replace('~(?<=\\w)([A-Z])~', '_$1', $label));

        return trim(ucwords(str_replace('_', ' ', $label)));
    }
}
