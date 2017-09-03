				<?php
               echo('<table width="665">');
    echo('<tr>');
        echo('<td valign="top" align="center">');
           echo Papers;
        echo('</td>');
        echo('<td width="5px" valign="top" align="center">:</td>');
        echo('<td align="center">');
        echo('<select name="');
		echo $info[$i]; 
		echo('">');
                                                                                                                                                                                                      
                                                                                                    
                                                                                                    echo('<option value="ICP">International Conference Paper</option>');                                                                                                   
                                                                                                    echo('<option value="NJP">National Journal Paper</option>');
                                                                                                    echo('<option value="NCP" selected>National Conference Paper</option>');
echo('<option value="IJP">International Journal Paper</option>');
                                                                                                echo('</select> </br>');  
																								
        	  echo('</td>');
			  echo('<td>');
			  echo('<textarea name="');
			  echo $detail[$i];
			  echo('" id="');
			  echo $detail[$i];
			  echo('" rows="20" cols="50">');
			   echo $qual;
         echo('</textarea></td>');
    echo('</tr>');
	echo('</table>');
		?>