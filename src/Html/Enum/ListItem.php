<?php declare(strict_types=1);
/**
 * Part of Windwalker project.
 *
 * @copyright  Copyright (C) 2019 LYRASOFT.
 * @license    GNU General Public License version 2 or later;
 */

namespace Windwalker\Html\Enum;

use Windwalker\Dom\HtmlElement;

/**
 * The ListItem class.
 *
 * @since  2.1
 */
class ListItem extends HtmlElement
{
    /**
     * Constructor
     *
     * @param mixed $content Element content.
     * @param array $attribs Element attributes.
     */
    public function __construct($content = null, $attribs = [])
    {
        parent::__construct('li', $content, $attribs);
    }
}
