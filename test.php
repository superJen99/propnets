<?php
class test {
    
    const INIT = 0;
    private static $handles = array("msg"=>array("edit"=>1, "read"=>1), "admin"=>array("id"=>"")); //functions
    private static $test = "";
    
    function __construct() {
        $user = $_SERVER["remote_addr"];
        if($user !== $this->handles["admin"]["id"]) {
            print "Notice: you are not authorized to view this setup.<br>";
            exit;
        }
    }
    
    function editMsgSettings($settings) {
        
    }
    
    function changeMsg($msg) {
        if($this->handles["msg"]["edit"] >= 1) {
            $this->test = "". $msg. "";
            return true;
        }
        print "Notice: not authorized to edit msg.<br>";
        return false;
    }
    
    function printMsg() {
        if($this->handles["msg"]["read"] >= 1) {
            print $this->test. "<br>";
            return true;
        }
        print "Notice: not authorized to print msg.<br>";
        return false;
    }
    
    
}
$test = new test;
$test->printMsg();
?>