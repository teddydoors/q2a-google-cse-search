<?php


/*
Google Custom Search Plugin for Q2A sites.
*/


if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
	header('Location: ../../');
	exit;
}


qa_register_plugin_module('page', 'google-search.php', 'csearch', 'Google Search');
qa_register_plugin_layer('google-search-layer.php', 'Google Search Layer');
qa_register_plugin_module('module', 'google-search-admin.php', 'gsearch_admin', 'Google Search Admin');
