<?php
// *	@copyright	OPENCART.PRO 2011 - 2024.
// *	@forum		https://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

// Site
$_['site_base']               = '';
$_['site_ssl']                = false;

// Url
$_['url_autostart']           = true;

// Language
$_['language_default']        = 'en-gb';
$_['language_autoload']       = array('en-gb');

// Database
$_['db_autostart']            = false;
$_['db_type']                 = 'mysqli'; // mpdo, mssql, mysql, mysqli or postgre
$_['db_hostname']             = 'localhost';
$_['db_username']             = 'root';
$_['db_password']             = '';
$_['db_database']             = '';
$_['db_port']                 = 3306;

// Mail
$_['mail_protocol']           = 'mail'; // mail or smtp
$_['mail_from']               = ''; // Your E-Mail
$_['mail_sender']             = ''; // Your name or company name
$_['mail_reply_to']           = ''; // Reply to E-Mail
$_['mail_smtp_hostname']      = '';
$_['mail_smtp_username']      = '';
$_['mail_smtp_password']      = '';
$_['mail_smtp_port']          = 25;
$_['mail_smtp_timeout']       = 5;
$_['mail_verp']               = false;
$_['mail_parameter']          = '';

// Cache
$_['cache_type']              = 'file'; // apc, apcu, file, mem, memcached or redis
$_['cache_expire']            = 3600;

// Session
$_['session_autostart']       = false;
$_['session_engine']          = 'native'; // native, db or file
$_['session_name']            = 'PHPSESSID';
$_['session_prefix']          = 'sess_';
$_['session_bits_per_char']   = 4;
$_['session_length']          = 32;
$_['session_lifetime']        = 0; // time session cookie
$_['session_other_lifetime']  = (60 * 60 * 24 * 30); // time other cookie
$_['session_maxlifetime']     = 1440;
$_['session_path']            = '/'; //(!empty($_SERVER['PHP_SELF']) ? dirname($_SERVER['PHP_SELF']) : '/');
$_['session_domain']          = '';
$_['session_other_domain']    = (defined('HTTPS_SERVER') ? parse_url(HTTPS_SERVER, PHP_URL_HOST) : '');
$_['session_secure']          = !empty($_SERVER['HTTPS']);
$_['session_httponly']        = true;
$_['session_other_httponly']  = false;
$_['session_samesite']        = 'Strict';
$_['session_other_samesite']  = 'Lax';
$_['session_sameparty']       = false;
$_['session_other_sameparty'] = false;
$_['session_probability']     = 1;
$_['session_divisor']         = 5;

// Template
$_['template_type']           = 'php'; // php, twig

// Pre Config
$_['pre_config']              = false;

// Error
$_['error_display']           = false;
$_['error_log']               = true;
$_['error_filename']          = 'error.log';

// Reponse
$_['response_header']         = array(
	'Content-Type: text/html; charset=utf-8',
	/* 'Access-Control-Allow-Origin: *',
	'Access-Control-Allow-Credentials: true',
	'Access-Control-Max-Age: 1000',
	'Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding',
	'Access-Control-Allow-Methods: PUT, POST, GET, OPTIONS, DELETE', */
	'Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0',
	'Pragma: no-cache'
);
$_['response_compression']    = 0;

// Autoload Configs
$_['config_autoload']         = array();

// Autoload Libraries
$_['library_autoload']        = array();

// Autoload Libraries
$_['model_autoload']          = array();

// Actions
$_['action_default']          = 'common/home';
$_['action_router']           = 'startup/router';
$_['action_error']            = 'error/not_found';
$_['action_pre_action']       = array();
$_['action_event']            = array();