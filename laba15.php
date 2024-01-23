<? 
$file = file_get_contents('lab15.txt');
$ip = preg_match('/\b(25[0-5]|2[0-4]\d|[01]?\d?\d)\.(25[0-5]|2[0-4]\d|[01]?\d?\d)\.(25[0-5]|2[0-4]\d|[01]?\d?\d)\.(25[0-5]|2[0-4]\d|[01]?\d?\d)\b/', $file, $match);
$ip = $match;
file_put_contents('lab15(2).txt', $ip[0]);
echo $ip[0];
?>
