<?php
// $Id: index.php,v 1.99 2009/10/15 14:07:25 dries Exp $
/**
* @file
* The PHP page that serves all page requests on a Drupal installation.
*
* The routines here dispatch control to the appropriate handler, which then
* prints the appropriate page.
*
* All Drupal code is released under the GNU General Public License.
* See COPYRIGHT.txt and LICENSE.txt.
*/
/**
* Root directory of Drupal installation.
*/
define('DRUPAL_ROOT', getcwd());
require_once DRUPAL_ROOT . '/includes/bootstrap.inc';
require_once 'includes/password.inc'; 
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
echo "SARAVANAN MINDTREE LOCALHOST567 JsdsadsdsdasdasdENKINS CHECK@%#^@%^ASKAJSKHJSJDHSJDHJHA# Encrypted Password goes here:sjfsdfdsmfsd";
echo user_hash_password('@dmin');
exit();
