<?php

$c1 = "Web+Development";
$c2 = "Web+Design";

//https://www.odesk.com/jobs/rss?c1=Web+Development&c2=Web+Design&q=&from=find-work&_redirected=
$url = "https://www.odesk.com/jobs/rss?c1=".$c1."&c2=".$c2."&q=&from=find-work&_redirected=";

$current = file_get_contents($url);
//echo $current;
//unformatted junk

$res = 'jobs.xml';
file_put_contents($res, $current);
$xml=simplexml_load_file($res);

//print_r($xml);



foreach($xml as $obj){

  $item = $obj->item;
 foreach($item as $sub) {
 	$joblink = $sub->link;
 	echo $joblink . "<br>";

 	$jobtitle = $sub->title;
 	echo $jobtitle . "<br>";

 	$jobdes = $sub->description;
 	echo $jobdes . "<br>";

 	$jobdate = $sub->pubDate;
 	echo $jobdate . "<br>";
 }


  echo "<br />";

}



?>
