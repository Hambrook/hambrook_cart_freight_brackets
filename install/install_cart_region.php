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

$table = 'cart_region';
$query = "
     CREATE TABLE {cart_region} (
      `freightbracketgroup` int(11) NOT NULL,
      PRIMARY KEY  (`regioncode`)
    ) ENGINE=MyISAM DEFAULT CHARSET=latin1;";

/* Check structure */
$result = Jojo::checkTable($table, $query);

/* Diff */
if (isset($result['different'])) Jojo::printTableDifference($table,$result['different']);