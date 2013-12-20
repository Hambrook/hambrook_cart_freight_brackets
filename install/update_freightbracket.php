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

$table = 'cart_freightbracket';
$o = 1;

$default_td[$table]['td_displayfield']     = 'fb_minvalue';
$default_td[$table]['td_rolloverfield']    = '';
$default_td[$table]['td_orderbyfields']    = 'fb_minvalue';
$default_td[$table]['td_topsubmit']        = 'yes';
$default_td[$table]['td_deleteoption']     = 'yes';
$default_td[$table]['td_menutype']         = 'tree';
$default_td[$table]['td_categoryfield']    = 'fb_group';
$default_td[$table]['td_categorytable']    = 'cart_freightbracketgroup';
$default_td[$table]['td_help']             = '';

/* ID */
$field = 'freightbracketid';
$default_fd[$table][$field]['fd_order']    = $o++;
$default_fd[$table][$field]['fd_type']     = 'hidden';
$default_fd[$table][$field]['fd_help']     = 'A unique ID, automatically assigned by the system';

/* Name */
$field = 'fb_group';
$default_fd[$table][$field]['fd_order']    = $o++;
$default_fd[$table][$field]['fd_name']     = 'Group';
$default_fd[$table][$field]['fd_type']     = 'dblist';
$default_fd[$table][$field]['fd_options']  = "cart_freightbracketgroup";
$default_fd[$table][$field]['fd_required'] = 'yes';
$default_fd[$table][$field]['fd_size']     = '50';
$default_fd[$table][$field]['fd_help']     = '';

/* Minimuim Cost */
$field = 'fb_minvalue';
$default_fd[$table][$field]['fd_order']    = $o++;
$default_fd[$table][$field]['fd_name']     = 'Minimum Cart Value';
$default_fd[$table][$field]['fd_type']     = 'decimal';
$default_fd[$table][$field]['fd_required'] = 'yes';
$default_fd[$table][$field]['fd_size']     = '20';
$default_fd[$table][$field]['fd_help']     = 'The minimum cart value for this freight bracket.';

/* Less Than */
$field = 'fb_freightprice';
$default_fd[$table][$field]['fd_order']    = $o++;
$default_fd[$table][$field]['fd_name']     = 'Freight Price';
$default_fd[$table][$field]['fd_type']     = 'decimal';
$default_fd[$table][$field]['fd_required'] = 'yes';
$default_fd[$table][$field]['fd_size']     = '20';
$default_fd[$table][$field]['fd_help']     = 'The freight cost for this bracket.';

