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

<div class="tab_content" id="tab1" style="display:none" >

                                                		 <?php
		                                 $result=mysql_query("SELECT * FROM tabs where events='1' AND view='1'  ORDER BY time DESC LIMIT 5");
		                                 if(mysql_num_rows($result)){
			                              while($row=mysql_fetch_array($result))
			                               {
				                            
				                           ?><li>
                                                    	<div class="thumb">
                                                        	<a href="<?php echo $row['link'];?>" target="_blank"><img src="login/admin/<?php echo $row['thumbnails'];?>"  alt=" " height="50px" width="50px" /></a>
                                                      </div>
                                                         <div class="descripton">
                                                        	<h6><a href="<?php echo $row['link'];?>" target="_blank"><br/><?php echo $row['title'];?></a></h6><em><?php echo $row['description'];?></em>
<p>	
</p>
                                                        </div>
                                                    </li><br />
				                            <?php
				                             }
				                         }
	                           ?>
                                                </ul>
                                                <div class="clear"></div>
                                            </div>



<div class="tab_content" id="tab2" style="display:none" >
<ul>
 <?php
		                                 $result=mysql_query("SELECT * FROM tabs where news='1' AND view='1' ORDER BY time DESC LIMIT 5");
		                                 if(mysql_num_rows($result)){
			                              while($row=mysql_fetch_array($result))
			                               {
				                            
				                           ?><li>
                                                    	<div>
                                                        	<h6><a href="<?php echo $row['link'];?>" target="_blank"><?php echo $row['title'];?></a></h6>
                                                      
                                                        
                                                    <em><?php echo $row['date'];?></em></div>
                                                    </li>
				                            <?php
				                             }
				                         }
	                           ?>

</ul>
<div class="clear"></div>
</div>



					<div class="tab_content" id="tab3" style="display:none" >
                                            	<ul>
                                                		 <?php
		                                 $result=mysql_query("SELECT * FROM tabs where important_links='1' AND view='1'  ORDER BY time DESC LIMIT 5");
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
												<div class="clear"></div>
												</div>





                                        </div>
