<?php

class Security {

    public static function antiInjection($sql, $striptags=true)
    {
        while( preg_match("/('|\*|--|\\\\)/i", $sql) ){
            $sql = preg_replace("/('|\*|--|\\\\)/i","",$sql);
        }
        $sql = trim($sql);
        if($striptags) $sql = strip_tags($sql);
        $sql = addslashes($sql);
        return $sql;
    }

}
