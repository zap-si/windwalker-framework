<?php declare(strict_types=1);
/**
 * Part of Windwalker project.
 *
 * @copyright  Copyright (C) 2019 LYRASOFT.
 * @license    LGPL-2.0-or-later
 */

namespace Windwalker\Form\Field;

/**
 * The EmailField class.
 *
 * @since  2.0
 */
class EmailField extends TextField
{
    /**
     * Property type.
     *
     * @var  string
     */
    protected $type = 'email';

    /**
     * prepare
     *
     * @param array $attrs
     *
     * @return  array|void
     */
    public function prepare(&$attrs)
    {
        parent::prepare($attrs);
    }
}
