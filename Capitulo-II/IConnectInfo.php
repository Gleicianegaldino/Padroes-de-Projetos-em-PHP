<?php
interface IConnectInfo {
    const HOST = "localhost";
    const UNAME = "phpWorker";
    const DBNAME = "dpPAtt";
    const PW = "easyWay";

    function testConnection();
}

?>