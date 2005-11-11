<?php
// $Id$

/**
 * @file
 * Run all unit tests for all enabled modules.
 */

include_once './includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);

// If not in 'safe mode', increase the maximum execution time:
if (!ini_get('safe_mode')) {
  set_time_limit(360);
}

simpletest_run_tests();
