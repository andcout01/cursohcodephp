<?php
session_id('3u9r2vos27ak84475h3uuk55g5');
require_once 'config.php';
session_regenerate_id();
echo session_id();
var_dump($_SESSION);