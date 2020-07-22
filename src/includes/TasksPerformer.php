<?php
/**
 * This file basically performs any mundane task required
 *
 * @category   Plugins
 * @package    PluginNameSpace
 * @subpackage PluginNameSpace\ncludes
 * @author     Josbiz - Michael Adewunmi <d.devignersplace@gmail.com>
 * @license    GPL-2.0+ http://www.gnu.org/licenses/gpl-2.0.txt
 * @link       http://josbiz.com.ng
 * @since      1.0.0
 */
namespace PluginNameSpace\Includes;

/**
 * This class basically performs any general task required
 *
 * @category   Plugins
 * @package    PluginNameSpace
 * @subpackage PluginNameSpace\Includes
 * @author     Josbiz - Michael Adewunmi <d.devignersplace@gmail.com>
 * @license    GPL-2.0+ http://www.gnu.org/licenses/gpl-2.0.txt
 * @link       http://josbiz.com.ng
 * @since      1.0.0
 */
class TasksPerformer
{
    /**
     * Runs functions on object Instantiation
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function stripslashesFromDBResult($db_object)
    {
        if (is_object($db_object) || is_array($db_object)) {
            $db_object_array = (array) $db_object;
        } else {
            return $db_object;
        }
        return (object) array_map('stripslashes', $db_object_array);
    }

    public function writeToLog($text)
    {
        $dfile = WP_CONTENT_DIR.'/plugins/mtii-utilities/public/mtii-logs/logs.txt';
        $myfile = fopen($dfile, "a");
        fwrite($myfile, $text);
        fclose($myfile);
    }
}
