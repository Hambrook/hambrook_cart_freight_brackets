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

class Jojo_Plugin_hambrook_cart_freight_brackets extends Jojo_Plugin {

    /* Set custom shipping cost */
    public function set_shipping($total, $cart) {
        // Update later to have per region brackets?
        //$method = $cart->fields['shippingMethod'];

        $brackets = Jojo::selectQuery(
            "SELECT * FROM {cart_freightbracket} WHERE fb_group = (SELECT freightbracketgroup FROM {cart_region} WHERE regioncode = ?)",
            $cart->fields['shippingRegion']
        );
        if (!$brackets) {
            return $total;
        }
        foreach ($brackets as $b) {
            if ($cart->order["subtotal"] >= $b["fb_minvalue"]) {
                $total = $b["fb_freightprice"];
            }
        }
        return $total;
    }

}