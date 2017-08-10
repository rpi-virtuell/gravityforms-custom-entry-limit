<?php
/*
Plugin Name: Gravity Forms Custom Entry Limit
Plugin URI: https://typewheel.xyz/project/custom-entry-limit
Description: Adds options for custom limiting of number of entries to a Gravity Form.
Version: 1.0.beta3
Author: Typewheel
Author URI: https://typewheel.xyz/
Typewheel Update ID: 001

------------------------------------------------------------------------
Copyright 2012-2016 Typewheel LLC

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
*/

define( 'GF_CUSTOM_ENTRY_LIMIT_VERSION', '1.0.beta3' );

add_action( 'gform_loaded', array( 'GF_Custom_Entry_Limit_Bootstrap', 'load' ), 5 );

class GF_Custom_Entry_Limit_Bootstrap {

    public static function load() {

        if ( ! method_exists( 'GFForms', 'include_addon_framework' ) ) {
            return;
        }

        require_once( 'class-gfcustomentrylimit.php' );

        GFAddOn::register( 'GFCustomEntryLimit' );

    }

}

function gf_custom_entry_limit() {
    return GFCustomEntryLimit::get_instance();
}