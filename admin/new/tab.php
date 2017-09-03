<?php
error_reporting(0);
define('isDOCTYPE',1375);
include 'login/admin/auth.inc.php'; 

?>
<div class="tabwrapper">
                                        	<div class="tabs_links">
                                            	<ul>
							<li><a href="#tab1">Events</a></li>
							<li><a href="#tab2">News</a></li>
                            <li><a href="#tab3">Important Links</a></li>

                                                </ul>
                                            </div>

 
				    
						

<ul>

<li>
<div class="thumb">
<a href="<?php echo $row['login/admin/link'] ?>" target="_blank"><img src="login/admin/<?php echo $row['thumbnails'] ?>"  alt=" " height="50px" width="50px" /></a>
</div>
<div class="descripton">
<h6><a href="<?php echo $row['login/admin/description']?>" target="_blank">The Grand Alumni Homecoming - 2014</a></h6>
<em>at NIT Jamshedpur on 25-26 Jan 2014.</em>
<p>	
</p>
</div>
</li> <?php } ?>
</ul> 


</div>
</div>
