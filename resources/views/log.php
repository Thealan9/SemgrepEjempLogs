<?php 

    if($_SERVER['REQUEST_METHOD']==='POST'){
        $data = json_decode(file_get_contents('php://input'),true);
        $message = $data['message'] ??'Sin mensaje';
        $log = date('Y-m-d H:i:s')." - ". $message ."\n";
        if(!defined('FILE_APPEND')){
            define('FILE_APPEND',8);
        }
        file_put_contents('logs.txt',$log,FILE_APPEND);echo 'Log guardado';
    }
?>
<!-- \end{code} -->