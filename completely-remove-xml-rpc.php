<?php
/*
Plugin Name: Completely Disable XML-RPC
Plugin URI: http://www.freethepepper.com/wordpressplugins
Description: This plugin disables XML-RPC API and traces in http HEADER, meta, rel,and URImeta in WordPress 4.3+, which is by default enabled.
Version: 1.0.0
Author: Jérémy Munsch
Author URI: http://freethepepper.com
License: GPLv2
*/

/*  Copyright 2012  Jérémy Munsch  (http://www.freethepepper.com/contact/)

    This program is free software; you can redistribute it and/or
    modify it under the terms of the GNU General Public License
    as published by the Free Software Foundation; either version 2
    of the License, or (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

add_filter( 'xmlrpc_enabled', '__return_false' );
add_filter('wp_headers', function($headers, $wp_query){
  if (array_key_exists('X-Pingback', $headers)) {
    unset($headers['X-Pingback']);
  }
  return $headers;
}, 11, 2);
add_filter('bloginfo_url', function($output, $property){
  error_log("====property=" . $property);
  return ($property == 'pingback_url') ? null : $output;
}, 11, 2);
add_action('wp', function(){
    remove_action('wp_head', 'rsd_link');
}, 11);

