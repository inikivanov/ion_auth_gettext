<?php

defined('BASEPATH') || exit('No direct script access allowed');

/**
 * CodeIgniter Ion_auth Gettext Helpers
 *
 * @package         CodeIgniter
 * @subpackage      Helpers
 * @category        Gettext
 * @author          Ivan Ivanov / Rainbowgrp
 */
if (!function_exists('__')) {

    /**
     * @param string $expression
     * @return string
     */
    function __($expression) {
        return (gettext($expression));
    }

}
if (!function_exists('_e')) {

    /**
     * @param string $expression
     */
    function _e($expression) {
        echo (__($expression));
    }

}
if (!function_exists('_n')) {

    /**
     * @param   $expression_singular
     * @param   $expression_plural
     * @param   $number
     * @return  string
     */
    function _n($expression_singular, $expression_plural, $number) {
        return (ngettext($expression_singular, $expression_plural, (int) $number));
    }

}
/*
 * Set translation to use with gettext() http://php.net/manual/en/function.gettext.php
 * 
 * @param   string      What lang we use. This is the folder name of lang and shortname of language(bg, en, fr, de....)
 * @return  void        Return language translation from .mo file. For more info about .po and .mo file see http://php.net/manual/en/function.gettext.php and https://poedit.net/
 */

function set_language($language) {

    // settings you may want to change
    $locale = $language; // the locale you want
    $locales_root = APPPATH . 'language/locales'; // locales directory
    $domain = 'lang'; // the domain you’re using, this is the .PO/.MO file name without the extension
    //
    // activate the locale setting
    setlocale(LC_ALL, $locale);
    setlocale(LC_TIME, $locale);
    putenv("LANG=$locale");

    // path to the .MO file that we should monitor
    $filename = "$locales_root/$locale/LC_MESSAGES/$domain.mo";
    $mtime = filemtime($filename); // check its modification time
    //
    // our new unique .MO file
    $filename_new = "$locales_root/$locale/LC_MESSAGES/{$domain}_{$mtime}.mo";

    if (!file_exists($filename_new)) { // check if we have created it before
        // if not, create it now, by copying the original
        copy($filename, $filename_new);
    }
    // compute the new domain name
    $domain_new = "{$domain}_{$mtime}";
    // bind it
    bindtextdomain($domain_new, $locales_root);
    // then activate it
    textdomain($domain_new);
    // all done
}

/**
 * @param int $my_group_id Group id where user is member
 * @param int $check_group_ids Group must be checked
 * @return bool Return TRUE if can view edit checked group else return FALSE
 */

if (!function_exists('have_permissions')) {

    function have_permissions($user_group_id, $check_group_id) {

        if ($user_group_id == 1) {//is admin 
            return TRUE;
        } elseif ($user_group_id == 2 && $check_group_id > $user_group_id) { //is director and check group is not admin
            if($check_group_id == 6){
                return FALSE;
            }
            return TRUE;
        } elseif ($user_group_id == 3 && $check_group_id > $user_group_id) { //is manager and check group is not admin or director
            if($check_group_id == 6){
                return FALSE;
            }
            return TRUE;
        } elseif ($user_group_id == 4 && $check_group_id > $user_group_id) { //is team leader and check group is not admin or director or manager
            if($check_group_id == 6){
                return FALSE;
            }
            return TRUE;
        } elseif ($user_group_id == 5 && $check_group_id > $user_group_id) { //is agent and check group is not admin or director or manager or team leader
            if($check_group_id == 6){
                return FALSE;
            }
            return TRUE;
        } elseif ($user_group_id == 6 && $check_group_id >= $user_group_id) { //is partner and check group is not admin or director or manager or tema leader or agent
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
