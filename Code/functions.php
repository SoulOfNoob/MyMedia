<?php
require_once 'classes.php';
function db_query($query){
        global $GLOBALS;
        $connectionid = mysql_connect ($GLOBALS["SQL"]["Server"], $GLOBALS["SQL"]["User"], $GLOBALS["SQL"]["Pass"]);
        mysql_set_charset($GLOBALS["defaultCharset"], $connectionid);
        if (!mysql_select_db ($GLOBALS["SQL"]["DbName"], $connectionid)) {
            die ("Keine Verbindung zur Datenbank");
        }
        if (strpos($query,'SELECT') !== false) {
            $sql_operation = "SELECT";
        }elseif (strpos($query,'INSERT') !== false) {
            $sql_operation = "INSERT";
        }elseif (strpos($query,'UPDATE') !== false) {
            $sql_operation = "UPDATE";
        }
        //$query = mysql_real_escape_string($query);
        //echo "<br/>Query: ".$query;
        $result = mysql_query($query, $connectionid);
        if ($result == false){
            //echo "<br/>Query_Rows: false, Recource: ".$result."<br/>";
            return false;
        }elseif($sql_operation != "SELECT" && $result == true){
            return true;
        }elseif($sql_operation == "SELECT"){
            if (mysql_num_rows($result) > 0) {
                //echo "<br/>Query_Rows: true, Recource: ".$result."<br/>";
                return true;
            }else{
                //echo "<br/>Query_Rows: false, Recource: ".$result."<br/>";
                return false;
            }
        }
        mysql_close($connectionid);
    }
		function db_assoc($query){
        global $GLOBALS;
        $connectionid = mysql_connect ($GLOBALS["SQL"]["Server"], $GLOBALS["SQL"]["User"], $GLOBALS["SQL"]["Pass"]);
        mysql_set_charset($GLOBALS["defaultCharset"], $connectionid);
        if (!mysql_select_db ($GLOBALS["SQL"]["DbName"], $connectionid)) {
            die ("Keine Verbindung zur Datenbank");
        }
        //$query = mysql_real_escape_string($query);
        //echo "<br/>Assoc_Query: ".$query;
        $result = mysql_query($query, $connectionid);
        if ($result == false){
            //echo "<br/>Assoc_Rows: false<br/>";
            return false;
        }else{
            if (mysql_num_rows($result) > 1) {
                while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                    $data["ID"][] = $row['ID'];
                }
                return $data;
            }elseif(mysql_num_rows($result) > 0){
                $data = mysql_fetch_assoc($result);
                //echo "<br/>Assoc_Rows: true, Data: ".$data."<br/>";
                return $data;
            }else{
                //echo "<br/>Assoc_Rows: false, Recource: ".$result."<br/>";
                return false;
            }
        }
        mysql_close($connectionid);
    }
