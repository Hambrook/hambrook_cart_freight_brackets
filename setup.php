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

/* Edit ShippingBrackets */
$data = Jojo::selectRow("SELECT * FROM {page} WHERE pg_url = 'admin/edit/cart_freightbracket'");
if (!count($data)) {
    $parent = Jojo::selectRow("SELECT pageid FROM {page} WHERE pg_url = 'admin/cart'");
    if (!$parent) {
        echo "Cannot add Freight Brackets. No cart present.<br />";
    } else {
        echo "Freight Brackets: Adding <b>Edit Freight Brackets</b> Page to menu<br />";
        Jojo::insertQuery("INSERT INTO {page} SET pg_title='Freight Brackets', pg_link='Jojo_Plugin_Admin_Edit', pg_url='admin/edit/cart_freightbracket', pg_parent=".$parent["pageid"].", pg_order=5, pg_sitemapnav='no', pg_xmlsitemapnav='no', pg_index='no', pg_followto='no', pg_followfrom='yes'");
    }
}

/* Edit ShippingBracketCosts */
$data = Jojo::selectRow("SELECT * FROM {page} WHERE pg_url = 'admin/edit/cart_freightbracketgroup'");
if (!count($data)) {
    $parent = Jojo::selectRow("SELECT pageid FROM {page} WHERE pg_url = 'admin/edit/cart_freightbracket'");
    if (!$parent) {
        echo "Cannot add Freight Bracket Groups. No freight brackets present.<br />";
    } else {
        echo "Freight Bracket Groups: Adding <b>Edit Freight Bracket Groups</b> Page to menu<br />";
        Jojo::insertQuery("INSERT INTO {page} SET pg_title='Freight Bracket Groups', pg_link='Jojo_Plugin_Admin_Edit', pg_url='admin/edit/cart_freightbracketgroup', pg_parent=".$parent["pageid"].", pg_order=6, pg_sitemapnav='no', pg_xmlsitemapnav='no', pg_index='no', pg_followto='no', pg_followfrom='yes'");
    }
}

// Get things running in the right order
Jojo::updateQuery("UPDATE {plugin} SET priority = 95 WHERE name = ?", "hambrook_cart_checkout_fields");