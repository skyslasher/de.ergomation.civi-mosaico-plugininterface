<?php

require_once 'civi_mosaico_plugininterface.civix.php';
// phpcs:disable
use CRM_CiviMosaicoPlugininterface_ExtensionUtil as E;
// phpcs:enable

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function civi_mosaico_plugininterface_civicrm_config(&$config) {
  _civi_mosaico_plugininterface_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function civi_mosaico_plugininterface_civicrm_xmlMenu(&$files) {
  _civi_mosaico_plugininterface_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function civi_mosaico_plugininterface_civicrm_install() {
  _civi_mosaico_plugininterface_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function civi_mosaico_plugininterface_civicrm_postInstall() {
  _civi_mosaico_plugininterface_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function civi_mosaico_plugininterface_civicrm_uninstall() {
  _civi_mosaico_plugininterface_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function civi_mosaico_plugininterface_civicrm_enable() {
  _civi_mosaico_plugininterface_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function civi_mosaico_plugininterface_civicrm_disable() {
  _civi_mosaico_plugininterface_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function civi_mosaico_plugininterface_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _civi_mosaico_plugininterface_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function civi_mosaico_plugininterface_civicrm_managed(&$entities) {
  _civi_mosaico_plugininterface_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function civi_mosaico_plugininterface_civicrm_caseTypes(&$caseTypes) {
  _civi_mosaico_plugininterface_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function civi_mosaico_plugininterface_civicrm_angularModules(&$angularModules) {
  _civi_mosaico_plugininterface_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function civi_mosaico_plugininterface_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _civi_mosaico_plugininterface_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function civi_mosaico_plugininterface_civicrm_entityTypes(&$entityTypes) {
  _civi_mosaico_plugininterface_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_themes().
 */
function civi_mosaico_plugininterface_civicrm_themes(&$themes) {
  _civi_mosaico_plugininterface_civix_civicrm_themes($themes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 */
//function civi_mosaico_plugininterface_civicrm_preProcess($formName, &$form) {
//
//}

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 */
//function civi_mosaico_plugininterface_civicrm_navigationMenu(&$menu) {
//  _civi_mosaico_plugininterface_civix_insert_navigation_menu($menu, 'Mailings', array(
//    'label' => E::ts('New subliminal message'),
//    'name' => 'mailing_subliminal_message',
//    'url' => 'civicrm/mailing/subliminal',
//    'permission' => 'access CiviMail',
//    'operator' => 'OR',
//    'separator' => 0,
//  ));
//  _civi_mosaico_plugininterface_civix_navigationMenu($menu);
//}

/**
 * Demo-implementation of hook_civicrm_mosaicoPlugins to modify the plugin list
 * Mosaico itself is named 'mosaico', so its defaults can be read/modified using this hook
 * Array format:
 * [ 'plugin-name' => [
 *     'plugin' => 'function( vm ) { window.viewModel = vm; }', // <- the mosaico js plugin
 *     'scripts' => [ 'some_absolute_path/some_script.js', 'some_other_absolute_path/some_other_script.js' ],
 *     'styles' => [ 'some_absolute_path/some_style.css', 'some_other_absolute_path/some_other_style.css' ],
 *     'config' => [ 'tinymceConfigFull' ][ 'toolbar1' ] = 'numlist'
 *   ]
 * ]
 */
function civi_mosaico_plugininterface_civicrm_mosaicoPlugins( &$plugins )
{
  // Insert a plugin that does nothing
  $plugins[ 'Testing' ][ 'plugin' ] = 'function( vm ) { window.viewModel = vm; }';
}
