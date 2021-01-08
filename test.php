<?php

$msg = '
# To day '.date('Y-m-d').'
';

$root = __DIR__ . '/sign-in/'.date('Y-m');

try {
@mkdir($root,0777,true);

} catch(Throwable $e) {
}

try {
    
    $body_str = file_get_contents('http://open.iciba.com/dsapi/');
    $body = json_decode($body_str,true);
    
    $msg .= '

## '.$body['note'].'
> '.$body['content'].'

    ';

} catch(\Throwable $e) {
    $msg .= $e->getMessage();
}

file_put_contents($root."/today-".date('d').".md", $msg);
