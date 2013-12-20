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
$query = "
    CREATE TABLE {$table} (
        `freightbracketid` int(11) NOT NULL auto_increment,
        `fb_group` int(5) NOT NULL,
        `fb_minvalue` decimal(10,2) NOT NULL default '0.00',
        `fb_freightprice` decimal(10,2) NOT NULL default '0.00',
         PRIMARY KEY  (`freightbracketid`)
         ) TYPE=MyISAM ;";

/* Check structure */
$result = Jojo::checkTable($table, $query);

/* Output result */
if (isset($result['created'])) {
    echo sprintf("hambrook_cart_freight_brackets: Table <b>%s</b> Does not exist - created empty table.<br />", $table);
}
if (isset($result['added'])) {
    foreach ($result['added'] as $col => $v) {
        echo sprintf("hambrook_cart_freight_brackets: Table <b>%s</b> column <b>%s</b> Does not exist - added.<br />", $table, $col);
    }
}

/* Diff */
if (isset($result['different'])) Jojo::printTableDifference($table,$result['different']);