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
 * @package hambrook_cart_freight_brackets
 * @usage   This plugin was created for JojoCMS http://www.jojocms.org/
 */

$table = 'cart_freightbracketgroup';
$o = 1;


$default_td[$table]['td_displayfield']     = 'fg_title';
$default_td[$table]['td_rolloverfield']    = '';
$default_td[$table]['td_orderbyfields']    = 'fg_title';
$default_td[$table]['td_topsubmit']        = 'yes';
$default_td[$table]['td_deleteoption']     = 'yes';
$default_td[$table]['td_menutype']         = 'list';
$default_td[$table]['td_categoryfield']    = '';
$default_td[$table]['td_categorytable']    = '';
$default_td[$table]['td_help']             = '';


/* ID */
$field = 'freightbracketgroupid';
$default_fd[$table][$field]['fd_order']    = $o++;
$default_fd[$table][$field]['fd_type']     = 'hidden';
$default_fd[$table][$field]['fd_help']     = 'A unique ID, automatically assigned by the system';

/* Name */
$field = 'fg_title';
$default_fd[$table][$field]['fd_order']    = $o++;
$default_fd[$table][$field]['fd_name']     = 'Title';
$default_fd[$table][$field]['fd_type']     = 'text';
$default_fd[$table][$field]['fd_options']  = "";
$default_fd[$table][$field]['fd_required'] = 'yes';
$default_fd[$table][$field]['fd_size']     = '50';
$default_fd[$table][$field]['fd_help']     = '';