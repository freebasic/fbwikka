<?php
// wikka.config.php written at 05/19/05 00:39:44
// do not change wikka_version manually!

$wakkaConfig = array(
	'mysql_host' => "...",
	'mysql_database' => "...",
	'mysql_user' => "...",
	'table_prefix' => "wikka_",
	'root_page' => "FBWiki",
	'wakka_name' => "FBWiki",
	'base_url' => "http://www.freebasic.net/wiki/wikka.php?wakka=",
	'rewrite_mode' => "0",
	'action_path' => "actions",
	'handler_path' => "handlers",
	'gui_editor' => "1",
	'stylesheet' => "wikka.css",
	'wikka_formatter_path' => "formatters",
	'wikka_highlighters_path' => "formatters",
	'geshi_path' => "3rdparty/plugins/geshi",
	'geshi_languages_path' => "3rdparty/plugins/geshi/geshi",
	'header_action' => "header",
	'footer_action' => "footer",
	'navigation_links' => "[[CategoryCategory Categories]] :: PageIndex ::  RecentChanges :: RecentlyCommented :: [[UserSettings Login/Register]]",
	'logged_in_navigation_links' => "[[CategoryCategory Categories]] :: PageIndex :: RecentChanges :: RecentlyCommented :: [[UserSettings Change settings/Logout]]",
	'referrers_purge_time' => "30",
	'pages_purge_time' => "0",
	'xml_recent_changes' => "10",
	'hide_comments' => "0",
	'anony_delete_own_comments' => "1",
	'double_doublequote_html' => "safe",
	'external_link_tail' => "<span class='exttail'>&#8734;</span>",
	'sql_debugging' => "0",
	'admin_users' => "...",
	'admin_email' => "...",
	'upload_path' => "...",
	'mime_types' => "mime_types.txt",
	'geshi_header' => "div",
	'geshi_line_numbers' => "0",
	'geshi_tab_width' => "4",
	'wikiping_server' => "",
	'default_write_acl' => "+",
	'default_read_acl' => "*",
	'default_comment_acl' => "+",
	'mysql_password' => "...",
	'meta_keywords' => "",
	'meta_description' => "",
	'geshi_tab width' => "4",
	'wakka_version' => "1.1.6.0",
	'accept_new_users' => '1',
	'show_attached_files' => '0',
	'max_upload_size' => '262144' );
?>