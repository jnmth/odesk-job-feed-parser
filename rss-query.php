<?php

	function stahuj($c1, $c2){

						$url = "https://www.odesk.com/jobs/rss?c1=".$c1."&c2=".$c2."&q=&from=find-work&_redirected=";

						$current = file_get_contents($url);



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


			file_put_contents($res, $current);

		}


stahuj('Web+Development','');
stahuj('Software+Development','');
stahuj('Networking+Information+Systems','');
stahuj('Writing+Translation','');
stahuj('Administrative+Support','');
stahuj('Design+Multimedia','');
stahuj('Customer+Service','');
stahuj('Sales+Marketing','');
stahuj('Business+Services','');
stahuj('Sales+Marketing','SEO+-+Search+Engine+Optimization');
stahuj('Web+Development','Web+Design');

?>
