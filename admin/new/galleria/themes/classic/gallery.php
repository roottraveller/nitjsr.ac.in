<?php $root='../../../';
include '../../../login/admin/auth.inc.php'
?>

        
        <style>

            /* Demo styles */
            html,body{background:#fff;margin:0;}
            body{border-top:4px solid #000;}
            .content{color:#777;font:12px/1.4 "helvetica neue",arial,sans-serif;width:900px;margin:20px auto;}
            h1{font-size:12px;font-weight:normal;color:#ddd;margin:0;}
            p{margin:0 0 20px}
            a {color:#22BCB9;text-decoration:none;}
            .cred{margin-top:20px;font-size:11px;}

            /* This rule is read by Galleria to define the gallery height: */
            #galleria{height:600px}


        </style>
<link rel="stylesheet" type="text/css" href="<?php echo $root;?>new/css/style1.css">

<body>
<script>
    $("body").text("jQuery works");
</script>
<div id="bg" >
<?php include $root.'header.php' ?>
</div>
<div id="wrapper_sec" >
<div class="main_content">
<div class="pageheading">
  <span>NIT Jamshedpur Slideshow</span>
</div>
        <!-- load jQuery -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>

        <!-- load Galleria -->
        <script src="../../galleria-1.2.9.min.js"></script>


    </head>
<body>
    <div class="content">
        

        <!-- Adding gallery images. We use resized thumbnails here for better performance, but it’s not necessary -->
<!--If you want separate thumbnails (recommended), just add them as a link:

<div id="galleria">
    <a href="/img/large1.jpg"><img src="/img/thumb1.jpg" data-title="My title" data-description="My description"></a>
    <a href="/img/large2.jpg"><img src="/img/thumb2.jpg" data-title="Another title" data-description="My <em>HTML</em> description"></a>
</div>
-->
      
 <div id="galleria">
<?php
		                                 $result=mysql_query("SELECT * FROM image WHERE status='1'");
		                                 if(mysql_num_rows($result)){
			                              while($row=mysql_fetch_array($result))
			                               {
				                            $link=preg_split('/[#]+/',$row['link']);
				                            if(count($link)==1)
				                             {
                                                            echo '<img src="'.$row['link'].'">';
				                             }
 }}
				                            
?>		                                 

        </div>
    </div>

    <script>

    // Load the classic theme
    Galleria.loadTheme('galleria.classic.min.js');


    // Initialize Galleria
    Galleria.run('#galleria', {
    transition: 'fade',
    imageCrop:false,
    autoplay: 2000 // will move forward every 7 seconds
});  

    </script>
</div></div>
<div class="clear">
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->
 

