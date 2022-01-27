<?php
/**
 * Plugin Name: SoFA Logo Translator
 * Description: Uses blank to cycle through Sofa Logo translations.
 * Author: Vernon Coffey, Alex Davidson Carroll
 */

add_action('wp_enqueue_scripts', 'SofaLogoTranslator_script_enqueue');

function SofaLogoTranslator_script_enqueue() {
  wp_enqueue_script('sofalogotranslator', plugins_url("sofalogotranslator.js", __FILE__), array(), filemtime($dir_path."sofalogotranslator.js"));
  
  /** 
   * wp_enqueue_style('sofalogotranslator-css', $dir_path."sofalogotranslator.css", array(), filemtime($dir_path."sofalogotranslator.css"));

  */
}
  