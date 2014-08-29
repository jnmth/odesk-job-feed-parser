<?php


if(isset($_GET['c1']) && isset($_GET['c2']))
{
   $c1 = str_replace(' ', '+', $_GET['c1']);
   $c2 = str_replace(' ', '+', $_GET['c2']);

   //$c2 = $_GET['c2'];

//http://brazilhomekeratin.com/rss/prace.php?c1=Web+Development&c2=Web+Design
}//if
else if(isset($_GET['c1'])) {

  $c1 = str_replace(' ', '+', $_GET['c1']);
  $c2 = '';
}

?>

/* 

some stuff

works like a charm inside worpress pages

*/

<?php


if ($c2==''){
          if($c1=="Web+Development" && $c2==''){
            $res = 'webdev.xml';
          }
          elseif($c1=="Software+Development" && $c2==''){
            $res='sofdev.xml';
          }
          elseif ($c1=="Networking+Information+Systems" && $c2=='') {
           $res='it.xml';
          }
          elseif ($c1=="Writing+Translation" && $c2=='') {
           $res='writ.xml';
          }
          elseif ($c1=="Administrative+Support" && $c2=='') {
           $res='administ.xml';
          }
          elseif ($c1=="Design+Multimedia" && $c2=='') {
           $res='administ.xml';
          }
          elseif ($c1=="Customer+Service" && $c2=='') {
           $res='custserv.xml';
          }
          elseif ($c1=="Sales+Marketing" && $c2=='') {
           $res='sales.xml';
          }
          elseif ($c1=="Business+Services" && $c2=='') {
           $res='biz.xml';
          }
          else{
           $res='prvnivpici.xml';
          }
        }
else{
        if($c2=='SEO+-+Search+Engine+Optimization'){
          $res='seo.xml';

        }
          elseif($c2=='Web+Design'){
          $res='webdesign.xml';
        }
        else{
          $res='druhavpici.xml';
        }

      }


$xml=simplexml_load_file($res);


foreach($xml as $obj){

  $item = $obj->item;

 foreach($item as $sub) {
        echo '<br><div class="article_box"><div style="margin: 20px;">';
      $joblink = $sub->link;
      //echo $joblink . "<br>";

      $jobtitle = $sub->title;
      echo '<h3><a href="'.$joblink.'">'.$jobtitle . "</a></h3>";

      $jobdate = $sub->pubDate;
      echo $jobdate . "<br>"; 

      $jobdes = $sub->description;
      echo $jobdes . "<br>";
        echo '</div></div><br><br>';
     }
  }//foreach xml as


?>



