<?php
error_reporting(0);
define('isDOCTYPE',1375);
include 'login/admin/auth.inc.php'; 
?>
<script type="text/javascript" src="new/js/jnotice.js"></script>
<div class="notice_board">
                 <div class="content_heading">
                            	   <div class="notice_header"><span><font>Notices</font><a href="news_desk/news.php">&nbsp;(View All)</a></span></div>
</div>
                              <div id="newsticker-demo" >    
                                      <div class="newsticker-jnotice">
		                               <ul>
                                         <?php
		                                 $result=mysql_query("SELECT * FROM notifications where status='1' ORDER BY time DESC limit 15");
		                                 if(mysql_num_rows($result)){
			                              while($row=mysql_fetch_array($result))
			                               {
				                            $link=preg_split('/[#]+/',$row['link']);
				                            if(count($link)==1)
				                             {
				                              echo '<li ><img src="new/images/listarrow.gif"></img><a href="'.$row['link'].'" target="_blank">'.$row['notification'].'</a>';
				                              
				                              echo '</li><br />';
				                             }
				                           else
				                           {
					                          echo '<li ><img src="new/images/listarrow.gif"></img><a href="uploads/index.php?id='.$row['no'].'&category=notifications">'.$row['notification'].'</a>';
					                       
					                       echo '</li><br/>';
				                           }
			                                       }
		                                } else {
			                    echo "No New Notices at this time.";
		                                }
	                           ?>
                                       </ul>
                                    </div>
									
                                 </div>
                          </div> 
