<?php

// Ugly hacks to fix 'global' keyword calls by tinyfilemenager
defined('FM_EMBED') or define('FM_EMBED', true);
defined('FM_SELF_URL') or define('FM_SELF_URL', URL::current());

$GLOBALS['use_auth'] = true;
$GLOBALS['auth_users'] = [];
$GLOBALS['readonly_users'] = [];
$GLOBALS['use_highlightjs'] = true;
$GLOBALS['highlightjs_style'] = 'monokai';
$GLOBALS['edit_files'] = true;
$GLOBALS['default_timezone'] = 'Etc/UTC';
$GLOBALS['root_path'] = $_SERVER['DOCUMENT_ROOT'];
$GLOBALS['root_url'] = '';
$GLOBALS['http_host'] = $_SERVER['HTTP_HOST'];
$GLOBALS['directories_users'] = [];
$GLOBALS['iconv_input_encoding'] = 'UTF-8';
$GLOBALS['datetime_format'] = 'd.m.y H:i:s';
$GLOBALS['allowed_file_extensions'] = '';
$GLOBALS['allowed_upload_extensions'] = '';
$GLOBALS['favicon_path'] = '';
$GLOBALS['exclude_items'] = [];
$GLOBALS['online_viewer'] = 'google';
$GLOBALS['sticky_navbar'] = true;
$GLOBALS['max_upload_size_bytes'] = 5000;
$GLOBALS['ip_ruleset'] = 'OFF';
$GLOBALS['ip_silent'] = true;
$GLOBALS['ip_whitelist'] = ['127.0.0.1', '::1'];
$GLOBALS['ip_blacklist'] = ['0.0.0.0', '::'];
$GLOBALS['lang_list'] = ['en' => 'English'];
$GLOBALS['CONFIG'] = '{"lang":"en","error_reporting":false,"show_hidden":true,"hide_Cols":false,"calc_folder":true,"theme":"light"}';
