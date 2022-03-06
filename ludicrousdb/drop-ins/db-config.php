<?php

/**
 * LudicrousDB configuration file
 *
 * This file should be copied to ABSPATH/db-config.php and modified to suit your
 * database environment. This file comes with a basic configuration by default.
 *
 * See README.md for documentation.
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * charset (string)
 * This sets the default character set. Since WordPress 4.2, the suggested
 * setting is "utf8mb4". We strongly recommend not downgrading to utf8,
 * using latin1, or sticking to the default: utf8mb4.
 *
 * Default: utf8mb4
 */
$wpdb->charset = 'utf8mb4';

/**
 * collate (string)
 * This sets the default column collation. For best results, investigate which
 * collation is recommended for your specific character set.
 *
 * Default: utf8mb4_unicode_520_ci
 */
$wpdb->collate = 'utf8mb4_unicode_520_ci';

/**
 * save_queries (bool)
 * This is useful for debugging. Queries are saved in $wpdb->queries. It is not
 * a constant because you might want to use it momentarily.
 * Default: false
 */
$wpdb->save_queries = false;

/**
 * recheck_timeout (float)
 * The amount of time to wait before trying again to ping mysql server.
 *
 * Default: 0.1 (Seconds)
 */
$wpdb->recheck_timeout = 0.1;

/**
 * persistent (bool)
 * This determines whether to use mysql_connect or mysql_pconnect. The effects
 * of this setting may vary and should be carefully tested.
 * Default: false
 */
$wpdb->persistent = false;

/**
 * allow_bail (bool)
 * This determines whether to use mysql connect or mysql connect has failed and to bail loading the rest of WordPress
 * Default: false
 */
$wpdb->allow_bail = false;

/**
 * max_connections (int)
 * This is the number of mysql connections to keep open. Increase if you expect
 * to reuse a lot of connections to different servers. This is ignored if you
 * enable persistent connections.
 * Default: 10
 */
$wpdb->max_connections = 10;

/**
 * check_tcp_responsiveness
 * Enables checking TCP responsiveness by fsockopen prior to mysql_connect or
 * mysql_pconnect. This was added because PHP's mysql functions do not provide
 * a variable timeout setting. Disabling it may improve average performance by
 * a very tiny margin but lose protection against connections failing slowly.
 * Default: true
 */
$wpdb->check_tcp_responsiveness = true;

/**
 * The cache group that is used to store TCP responsiveness.
 * Default: ludicrousdb
 */
$wpdb->cache_group = 'ludicrousdb';

/**
 * Table prefix
 */
$table_prefix = 'wp_';

/**
 * Group of tables with non sensitive data
 */
$wpdb->add_table('1', $table_prefix."bp_activity");
$wpdb->add_table('1', $table_prefix."bp_activity_meta");
$wpdb->add_table('1', $table_prefix."bp_groups");
$wpdb->add_table('1', $table_prefix."bp_groups_groupmeta");
$wpdb->add_table('1', $table_prefix."bp_groups_members");
$wpdb->add_table('1', $table_prefix."bp_invitations");
$wpdb->add_table('1', $table_prefix."bp_messages_messages");
$wpdb->add_table('1', $table_prefix."bp_messages_meta");
$wpdb->add_table('1', $table_prefix."bp_messages_notices");
$wpdb->add_table('1', $table_prefix."bp_messages_recipients");
$wpdb->add_table('1', $table_prefix."bp_notifications");
$wpdb->add_table('1', $table_prefix."bp_notifications_meta");
$wpdb->add_table('1', $table_prefix."bp_optouts");
$wpdb->add_table('1', $table_prefix."bp_xprofile_data");
$wpdb->add_table('1', $table_prefix."bp_xprofile_fields");
$wpdb->add_table('1', $table_prefix."bp_xprofile_groups");
$wpdb->add_table('1', $table_prefix."bp_xprofile_meta");
$wpdb->add_table('1', $table_prefix."commentmeta");
$wpdb->add_table('1', $table_prefix."comments");
$wpdb->add_table('1', $table_prefix."links");
$wpdb->add_table('1', $table_prefix."options");
$wpdb->add_table('1', $table_prefix."postmeta");
$wpdb->add_table('1', $table_prefix."posts");
$wpdb->add_table('1', $table_prefix."signups");
$wpdb->add_table('1', $table_prefix."task_breaker_comments");
$wpdb->add_table('1', $table_prefix."task_breaker_tasks");
$wpdb->add_table('1', $table_prefix."task_breaker_tasks_user_assignment");
$wpdb->add_table('1', $table_prefix."task_breaker_task_meta");
$wpdb->add_table('1', $table_prefix."termmeta");
$wpdb->add_table('1', $table_prefix."terms");
$wpdb->add_table('1', $table_prefix."term_relationships");
$wpdb->add_table('1', $table_prefix."term_taxonomy");

/**
 * Group of tables with sensitive data
 */
$wpdb->add_table('2', $table_prefix."usermeta");
$wpdb->add_table('2', $table_prefix."users");

/**
 * Add database with table dataset 1
 */
$wpdb->add_database(array(
    'host'     => "xxx_1",     // If port is other than 3306, use host:port.
    'user'     => "xxx_1",
    'password' => "xxx_1",
    'name'     => "xxx_1",
    'dataset'  => "1",
    'write'    => 1,
    'read'     => 1,
    'timeout'  => 1.0,
));

/**
 * Add database with table dataset 2
 */
$wpdb->add_database(array(
    'host'     => "xxx_2",     // If port is other than 3306, use host:port.
    'user'     => "xxx_2",
    'password' => "xxx_2",
    'name'     => "xxx_2",
    'dataset'  => "2",
    'write'    => 1,
    'read'     => 1,
    'timeout'  => 1.0,
));