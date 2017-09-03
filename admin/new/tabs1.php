<?php
error_reporting(0);
define('isDOCTYPE',1375);
include 'login/admin/auth.inc.php'; 
?>
<ul>
												
												 <?php
		                                 $result=mysql_query("SELECT * FROM tabs where important_links='1'  ORDER BY time DESC LIMIT 5");
		                                 if(mysql_num_rows($result)){
			                              while($row=mysql_fetch_array($result))
			                               {
				                            
				                           ?><li>
                                                    	<div class="thumb">
                                                        	<a href="<?php echo $row['link'];?>" target="_blank"><img src="login/admin/<?php echo $row['thumbnails'];?>"  alt=" " height="50px" width="50px" /></a>
                                                      </div>
                                                         <div class="descripton">
                                                        	<h6><a href="<?php echo $row['link'];?>" target="_blank"><br/><?php echo $row['title'];?></a></h6>
                                                        </div>
                                                    </li><br />
				                            <?php
				                             }
				                         }
	                           ?>
                                                
                                                </ul>