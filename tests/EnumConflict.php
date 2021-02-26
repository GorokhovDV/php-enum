<?php
/**
 * @link    http://github.com/myclabs/php-enum
 * @license http://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE file)
 */
namespace G6V\Tests\Enum;

use G6V\Enum\Enum;

/**
 * Class EnumConflict
 *
 * @method static EnumConflict FOO()
 * @method static EnumConflict BAR()
 *
 * @author Daniel Costa <danielcosta@gmail.com>
 * @author Mirosław Filip <mirfilip@gmail.com>
 */
class EnumConflict extends Enum
{
    const FOO = "foo";
    const BAR = "bar";
}
