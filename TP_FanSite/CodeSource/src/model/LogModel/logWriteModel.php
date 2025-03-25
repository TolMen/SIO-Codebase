<?php

/*
- Cette classe inclut la fonction qui écrit un message donné dans un fichier de log spécifié
*/
class LogWriteModel {
    public function writeLog($message, $logFilePath) {
    
        $file = fopen($logFilePath, "a");
    
        if ($file) {
            fwrite($file, $message);
            fclose($file);
        }
    }
}