<?php
/*
 * Ladybug: Simple and Extensible PHP Dumper
 *
 * AbstractPlugin class
 *
 * @author Juan Berzal Sacristán <juanber84@gmail.com> || @juanber84
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladybug\Plugin\Monolog;

use Ladybug\Plugin\PluginInterface;

class MonologPlugin implements PluginInterface
{
    public static function getConfigFile()
    {
        return __DIR__ . '/Config/services.xml';
    }

    /**
     * Registers custom helpers
     * @static
     * @return array
     */
    public static function registerHelpers()
    {
        return array(
            'ladybug_logger_dump',
            'ladybug_logger_set_path',
        );
    }


}
