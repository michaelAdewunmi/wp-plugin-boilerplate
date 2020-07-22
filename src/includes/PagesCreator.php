<?php
namespace PluginNameSpace\Includes;

/**
 * A class to create required pages and assign their templates
 *
 * @category   Plugins
 * @package    PluginNameSpace
 * @subpackage PluginNameSpace/Includes
 * @author     Michael Adewunmi <d.devignersplace@gmail.com>
 * @license    GPL-2.0+ http://www.gnu.org/licenses/gpl-2.0.txt
 * @link       http://josbiz.com.ng
 * @since      1.0.0
 */
class PageOrPostCreator
{
    /**
     * A Unique Identifier for the Plugin
     */
    protected $plugin_slug;

    /**
     * A Unique Identifier for the Plugin
     */
    protected $plugin_version;


    /**
     * Initialize the class constructor
     */
    public function __construct($plugin_name, $plugin_version)
    {
        $this->plugin_slug = $plugin_name;
        $this->plugin_version = $plugin_version;
    }

    /**
     * Create the page for the Nasarawa npower registration.
     *
     * @return void
     */
    public function createDataCapturePostsOrPages()
    {
        $page = get_page_by_path('nasarawa-npower-capture');
        $new_page_template = '../public/templates/npower-form.php';

        if (!isset($page)) :
            $new_page_id = wp_insert_post(
                array (
                    'post_type'     => 'page',
                    'post_title'    => 'Npower Data Capture',
                    'post_content'  => '',
                    'post_status'   => 'publish',
                    'guid'          => 'nasarawa-npower-capture',
                    'post_name'     => 'nasarawa-npower-capture'
                )
            );
            if (!empty($new_page_template)) {
                update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
            }
        endif;
    }
}
