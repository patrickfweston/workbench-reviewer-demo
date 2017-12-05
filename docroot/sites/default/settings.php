<?php

$databases = array();

$settings['install_profile'] = 'config_installer';

$config_directories = array();
// In this codebase, config is managed by git and lives outside of the Drupal root.
$config_directories = [CONFIG_SYNC_DIRECTORY => '../conf/drupal/config'];

$settings['hash_salt'] = '4ec8b7160d8b7ac8f9b581686c651d73c2e46640a118e1a4ddf1739f0542bb6d';
$settings['update_free_access'] = FALSE;
$settings['container_yamls'][] = __DIR__ . '/services.yml';

$settings['file_public_path'] = 'sites/default/files';
$settings['file_private_path'] = '';

$config['acquia_connector.settings']['hide_signup_messages'] = TRUE;

// Dev environment settings file provided by the-build.
if (file_exists($app_root . '/' . $site_path . '/settings.build.php')) {
  include $app_root . '/' . $site_path . '/settings.build.php';
}
// Local, per-developer config.
if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
  include $app_root . '/' . $site_path . '/settings.local.php';
}
