<?php

/**
 * @file
 * Cache backend.
 */

// Memcached.
$conf['memcache_extension'] = 'memcached';
$conf['cache_backends'][] = 'profiles/favrskov/modules/contrib/memcache/memcache.inc';
$conf['cache_default_class'] = 'MemCacheDrupal';
$conf['cache_class_cache_form'] = 'DrupalDatabaseCache';
$conf['memcache_servers'] = array(
  '127.0.0.1:11211' => 'default',
);
$conf['memcache_key_prefix'] = $databases["default"]["default"]["database"];

// Varnish.
$conf['cache_backends'][] = 'profiles/favrskov/modules/contrib/varnish/varnish.cache.inc';
$conf['cache_class_cache_page'] = 'VarnishCache';
