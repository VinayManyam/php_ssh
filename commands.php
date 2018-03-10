include "conect.php";
$str=$ssh->exec('ls /wp-content/themes/twentyseventeen');
echo $str;
echo " ";
echo "str length:".strlen($str);
echo str_replace(' ','*',$str);
echo $str;
$arr=explode(' ',$str);
echo "\n array Count:".count($arr);
print_r($arr);
$parts = preg_split('/\s+/', $str);
print_r($parts);

?>
