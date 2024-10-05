<?php

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Andre","idade":47}]';

$data = json_decode($json);
var_dump($data);