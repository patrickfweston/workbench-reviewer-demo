<?php

$databases = array();
$databases['default']['default'] = array(
  'driver' => 'mysql',
  'database' => 'drupal',
  'username' => 'root',
  'password' => 'root',
  'host' => '127.0.0.1',
  'prefix' => '',
  'collation' => 'utf8mb4_general_ci',
);

$config_directories = array();
$config_directories[CONFIG_SYNC_DIRECTORY] = '../conf/drupal/config';

$settings['hash_salt'] = '4ec8b7160d8b7ac8f9b581686c651d73c2e46640a118e1a4ddf1739f0542bb6d';
$settings['update_free_access'] = FALSE;
$settings['container_yamls'][] = __DIR__ . '/services.yml';

$settings['file_public_path'] = 'sites/default/files';
$settings['file_private_path'] = '';

$config['acquia_connector.settings']['hide_signup_messages'] = TRUE;

if (file_exists(__DIR__ . '/settings.local.php')) {
  include __DIR__ . '/settings.local.php';
}
$settings['install_profile'] = 'standard';
