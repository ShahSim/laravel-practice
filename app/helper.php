<?php
//Dump JSON and die
if (!function_exists('djd')) {
    function djd($data)
    {
        echo '<pre>'.json_encode($data).'</pre>'; die();
    }
}
///////////

//Read text from file
if (!function_exists('fileReadClose')) {
    function fileReadClose(string $path)
    {
        $file = fopen($path,'r') or die('Failed to open - '.$path);
        $fileContent = fread($file,filesize($path));
        fclose($file);

        return $fileContent;
    }
}
///////////

//Write JSON to file
if (!function_exists('writeJson')) {
    function writeJson(string $path, $data)
    {
        $file = fopen($path.'.json','w') or die('Failed to open - '.$path.'.json');
        fwrite($file,json_encode($data));
        fclose($file);
    }
}
//////////////
?>
