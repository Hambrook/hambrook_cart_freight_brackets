<?php
/**
 * Copyright 2013 Rick Hambrook <rick@hambrook.co.nz>
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Rick Hambrook <rick@hambrook.co.nz>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.hambrook.co.nz Hambrook Web Design
 * @package hambrook_cart_shipping_brackets
 * @usage   This plugin was created for JojoCMS http://www.jojocms.org/
 */

$table = 'cart_region';
$o = 1;

/* Name */
$field = 'freightbracketgroup';
$default_fd[$table][$field]['fd_order']    = $o++;
$default_fd[$table][$field]['fd_name']     = 'Group';
$default_fd[$table][$field]['fd_type']     = 'dblist';
$default_fd[$table][$field]['fd_options']  = "cart_freightbracketgroup";
$default_fd[$table][$field]['fd_required'] = 'no';
$default_fd[$table][$field]['fd_size']     = '50';
$default_fd[$table][$field]['fd_help']     = '';