<?php
/**
 * Apre un file json e lo converte in array associativo 
 * 
 * @var    string $file_path percorso del file da leggere
 * @return array $res array associativo corrispondente
 */
    function JSONReader(string $file_path)//:?array
    {
        if (file_exists($file_path))
        {
            $documento=file_get_contents($file_path);
            $res = json_decode($documento , true);
            $codiceErrore=json_last_error();
            if ($codiceErrore != JSON_ERROR_NONE)
            {
                throw new Exception('Syntax error' , 123);
            }
        }
        else
        {
            throw new Exception('does-not-exist' , 404);
        }
      
        return $res;
    }

?>