<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Adobe
 *
 * @author totti
 */
class Adodb_loader {

    function __construct($params = null) {
        // check if adodb already loaded
        if (!class_exists('ADONewConnection')) {
            require_once(APPPATH . 'libraries/adodb/adodb.inc' . EXT);
        }

        // database handler's name, defaults to 'adodb'
        $dbh = (isset($params['name'])) ? $params['name'] : 'adodb';

        // the db settings group from the database.php config
        $db_group = (isset($params['group'])) ? $params['group'] : '';

        $this->_init_adodb_library($dbh, $db_group);
    }

    function _init_adodb_library($dbh, $db_group) {
        // get CI instance
        $CI = & get_instance();

        // get database config
        include(APPPATH . 'config/database' . EXT);

        // check which database group settings to use
        // default to database setting default
        $db_group = (!empty($db_group)) ? $db_group : $active_group;
        $cfg = $db[$db_group];

        // check that driver is set
        if (isset($cfg['dbdriver'])) {
            $CI->$dbh = ADONewConnection($cfg['dbdriver']);

            // set debug
            $CI->$dbh->debug = $cfg['db_debug'];

            if ($cfg['cache_on'] && is_dir(APPPATH . $cfg['cachedir'])) {
                GLOBAL $ADODB_CACHE_DIR;
                $ADODB_CACHE_DIR = APPPATH . $cfg['cachedir'];
            }

            // check for persistent connection
            if ($cfg['pconnect']) {
                // persistent
                //$CI->$dbh->PConnect($cfg['hostname'],$cfg['username'],$cfg['password'],$cfg['database']) or die("can't do it: " . $CI->$dbh->ErrorMsg());
                $CI->$dbh->PConnect($cfg['hostname'], $cfg['username'], $cfg['password'], $cfg['database']) or die("Site maintenance.");
            } else {
                // normal
                //$CI->$dbh->Connect($cfg['hostname'],$cfg['username'],$cfg['password'],$cfg['database']) or die("can't do it: " . $CI->$dbh->ErrorMsg());
                $CI->$dbh->Connect($cfg['hostname'], $cfg['username'], $cfg['password'], $cfg['database']) or die("Site maintenance.");
            }

//            if ($cfg['char_set']) {
//                //$CI->$dbh->Execute('SET character_set_results='.$cfg['char_set']);
//                //$CI->$dbh->Execute('SET NAMES '.$cfg['char_set']);
//            }
//            if ($cfg['dbcollat']) {
//                $CI->$dbh->Execute('SET collation_connection=' . $cfg['dbcollat']);
//            }
            $CI->$dbh->SetFetchMode(ADODB_FETCH_ASSOC);
/*
            $CI->$dbh->Execute("SET ANSI_WARNINGS ON;");
            $CI->$dbh->Execute("SET ANSI_NULLS ON;");
            $CI->$dbh->Execute("SET NOCOUNT ON;");
            $CI->$dbh->Execute("SET XACT_ABORT ON;");
*/
            return true;
        } else {
            die("database settings not set");
            return false;
        }
    }

}

