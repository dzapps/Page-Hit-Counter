<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Page Hit Counter</title>
</head>
<body>
<center>
<h3>Total Hits</h3>
			<?php 
					 $l='datafile.txt';
      				 $c= trim(file_get_contents($l)) or $c=000;
     				 for($i=0;$i<strlen($c);$i++){
          					echo "<img src='img/".$c[$i].".jpg'/>";
      				 }
			
				     
					 $c=intval($c);
				 
						$c = $c + 1;
						$fp = @fopen($l,'w+') or die('ERROR: Can\'t write to the log file');
						flock($fp, LOCK_EX);
						fputs($fp, $c);
						flock($fp, LOCK_UN);
						fclose($fp);  
			?>

</center>
</body>
</html>
