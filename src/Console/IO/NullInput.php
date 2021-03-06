<?php declare(strict_types=1);
/**
 * Part of Windwalker project.
 *
 * @copyright  Copyright (C) 2019 LYRASOFT.
 * @license    GNU General Public License version 2 or later.
 */

namespace Windwalker\Console\IO;

use Windwalker\IO\Cli\Input\CliInput;

/**
 * The YesManInput class.
 *
 * @since  3.0
 */
class NullInput extends CliInput
{
    /**
     * Get a value from standard input.
     *
     * @return  string  The input string from standard input.
     */
    public function in()
    {
        return null;
    }
}
