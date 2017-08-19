<?php

require_once 'searchbuilderlocation.civix.php';
use CRM_Searchbuilderlocation_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function searchbuilderlocation_civicrm_config(&$config) {
  _searchbuilderlocation_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function searchbuilderlocation_civicrm_xmlMenu(&$files) {
  _searchbuilderlocation_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function searchbuilderlocation_civicrm_install() {

//Copy overridden Core CiviCRM files
$srcfile='CRM/Core/SelectValues.php';
$dstfile='../../../../../all/modules/civicrm/CRM/Core/SelectValues.php';
copy($srcfile, $dstfile);

$srcfile='CRM/Core/BAO/Mapping.php';
$dstfile='../../../../../all/modules/civicrm/CRM/Core/BAO/Mapping.php';
copy($srcfile, $dstfile);

  _searchbuilderlocation_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_postInstall
 */
function searchbuilderlocation_civicrm_postInstall() {
  _searchbuilderlocation_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function searchbuilderlocation_civicrm_uninstall() {
  _searchbuilderlocation_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function searchbuilderlocation_civicrm_enable() {
  _searchbuilderlocation_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function searchbuilderlocation_civicrm_disable() {
  _searchbuilderlocation_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function searchbuilderlocation_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _searchbuilderlocation_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function searchbuilderlocation_civicrm_managed(&$entities) {
  _searchbuilderlocation_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function searchbuilderlocation_civicrm_caseTypes(&$caseTypes) {
  _searchbuilderlocation_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_angularModules
 */
function searchbuilderlocation_civicrm_angularModules(&$angularModules) {
  _searchbuilderlocation_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function searchbuilderlocation_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _searchbuilderlocation_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Alter tpl file to include a different tpl file based on contribution/financial type
 * (if one exists). It will look for
 * templates/CRM/Contribute/Form/Contribution/Type2/Main.php
 * where the form has a contribution or financial type of 2
 * @param string $formName name of the form
 * @param object $form (reference) form object
 * @param string $context page or form
 * @param string $tplName (reference) change this if required to the altered tpl file
 */
function searchbuilderlocation_civicrm_alterTemplateFile($formName, &$form, $context, &$tplName)
{
        if ($formName == "CRM_Contact_Form_Search_Builder")
        {
        $tplName="CRM/Contact/Form/Search/Builder.tpl";
        }
}