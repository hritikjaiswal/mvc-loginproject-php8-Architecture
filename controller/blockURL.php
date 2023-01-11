<?php
class BlockUrlController
{
    function blockUrl()
    {
        $domain = $_SERVER['HTTP_HOST'];
        // find out the path to the current file:
        $path = $_SERVER['SCRIPT_NAME'];
        // find out the QueryString:
        $queryString = $_SERVER['QUERY_STRING'];
            // put it all together:
        $url = $path . "?" . $queryString;
        // echo $url;
        if (!isset($_SERVER['HTTP_REFERER'])) {
            // redirect them to your desired location
            header("location: $url");
            exit;
        }
    }
}
$bUrl = new BlockUrlController;
$bUrl->blockUrl();




// An alternative way is to use REQUEST_URI instead of both
            // SCRIPT_NAME and QUERY_STRING, if you don't need them seperate:
            // $url = "http://" . $domain . $_SERVER['REQUEST_URI'];
            // echo $url;
            