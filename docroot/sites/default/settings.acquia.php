<?php

// Configure the public, private, and tmp files directories.
$settings['file_public_path'] = 'sites/default/files';
$settings['file_private_path'] = "/mnt/files/{$_ENV['AH_SITE_GROUP']}.{$_ENV['AH_SITE_ENVIRONMENT']}/files-private";
$config['system.file']['path']['temporary'] = "/mnt/gfs/{$_ENV['AH_SITE_GROUP']}.{$_ENV['AH_SITE_ENVIRONMENT']}/tmp";

// Host URL patterns for Acquia.
$settings['trusted_host_patterns'] = [
  '^workbenchreviewerkgvspucxrx.devcloud.acquia-sites.com',
  '^workbenchreviewerwj3iaaszrt.devcloud.acquia-sites.com',
];

// Enable memcache on Acquia.
//if (file_exists('/var/www/site-php')) {
//  // Memcache settings.
//  $settings['cache']['default'] = 'cache.backend.memcache';
//}

//// Add an htaccess prompt on dev.
//// @see https://docs.acquia.com/articles/password-protect-your-non-production-environments-acquia-hosting#phpfpm

// Make sure Drush keeps working.
// Modified from function drush_verify_cli()
$cli = (php_sapi_name() == 'cli');
