<?php
/**
 * Plugin Name: AI ALT Genius
 * Plugin URI:  https://wpstack.online/wpstack-plugin/ai-alt-genius/
 * Description: Automatic contextual image alt text generation for WordPress Media Library images using AI visual analysis models.
 * Version:     1.0.0
 * Author:      WPStack Studio
 * Author URI:  https://wpstack.online/
 * License:     GPLv3 or later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: ai-alt-genius
 */

if (!defined('ABSPATH')) {
    exit;
}

class AI_ALT_Genius {
    public function __construct() {
        add_action('admin_menu', array($this, 'add_menu'));
    }

    public function add_menu() {
        add_media_page(
            __('AI ALT Genius', 'ai-alt-genius'),
            __('AI ALT Genius', 'ai-alt-genius'),
            'upload_files',
            'ai-alt-genius',
            array($this, 'render_page')
        );
    }

    public function render_page() {
        ?>
        <div class="wrap">
            <h1><?php _e('AI ALT Genius - Alt Text Automation', 'ai-alt-genius'); ?></h1>
            <p><?php _e('Generate WCAG-compliant image accessibility alt text across your WordPress Media Library.', 'ai-alt-genius'); ?></p>
        </div>
        <?php
    }
}

new AI_ALT_Genius();
