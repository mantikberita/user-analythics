<?php

/**
 * Plugin Name: User Analythics
 * Plugin URI: https://github.com/mantikberita/user-analythics
 * Description: Plugin sederhana untuk menampilkan jumlah pengguna dan jumlah postingan di dashboard WordPress.
 * Version: 1.0.0
 * Author: Bahlul
 * Author URI: https://github.com/mantikberita
 * License: GPL-2.0+
 */

if (!defined('ABSPATH')) {
    exit;
}

// Memuat file yang dibutuhkan
require_once plugin_dir_path(__FILE__) . 'includes/menu.php';
require_once plugin_dir_path(__FILE__) . 'includes/dashboard.php';
require_once plugin_dir_path(__FILE__) . 'includes/detail.php';
require_once plugin_dir_path(__FILE__) . 'includes/settings.php';
require_once plugin_dir_path(__FILE__) . 'includes/functions.php';
