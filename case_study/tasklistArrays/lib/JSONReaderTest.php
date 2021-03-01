<?php
declare(strict_types=1);
system("clear");
require "JSONReader.php";
$dataset= 
[
    [   
        'file_path'=>'./ciccio.json',
        'error'=>'file-does-not-exist',
        'errorCode'=> 404

    ],
    [   
        'file_path'=>'dataset/TaskList.json',
        'type'=> 'array',
        'count'=> 20

    ],
    [   
        'file_path'=>'dataset/TaskList-error.json',
        'error'=>'syntax-error',
        'errorCode'=>123

    ],
    [   
        'file_path'=>'dataset/TaskList-empty.json',
        'type'=>'array',
        'count'=>0

    ],
];


foreach($dataset as $row )
{
    try {
        $file_path=$row['file_path'];
        $current=JSONReader($file_path);
    
    
        if (isset($row['type']))
        {
            $type=$row['type'];
            var_dump(gettype($current)=== $type);
            var_dump(count($current) === $row['count']);
        }
        
    } catch (Exception $e) {
        var_dump($e->getMessage()== $row['error']);
        var_dump($e->getCode() == $row['errorCode']);
    }
   

   

   
}
?>