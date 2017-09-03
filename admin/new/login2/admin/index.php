<?php 
$page="Home"; 
include 'head.php';?>
<div class="notification" id="notification" style="width:100%; background-color:#FF0; color:#F00; text-align:center"></div>
            <table class="table-short" width="700px" height="480" style="min-height:300px">
              <thead>
                <tr>
                  <td style="min-height:300px">
                  <p align="center" style="font-size:24px">
                  Wecome to the Admin Panel
                  </p><br />
                  <p style="font-weight:normal; font-size:14px;">Now you can upload multiple documents within the same Notice.<br />
                  Never use the following characters in the Filename: <strong># , . / \ $</strong><br /><br />
					<strong>Instructions to upload multiple documents:</strong>
                  </p>
                    <ul style="font-weight:normal; font-size:12px; padding:10px;">
                    	<li>This feature is supported only by <strong>Firefox 3.6+, Chrome 3+, Opera and Safari 4+</strong>. If you are using any other browser (Internet Explorer) please Logout and switch to another browser.</li><li>&nbsp;</li>
                    	<li>First step: Rename all the Files to the names you want to be displayed in the website.</li><li>&nbsp;</li>
                        <li>The filenames <strong>MUST NOT</strong> contain the following characters anywhere: <strong># , . / \ $</strong></li><li>&nbsp;</li>
                        <li>Keep all the files in the same folder.</li><li>&nbsp;</li>
                        <li>While adding the notice, Browse to the folder and Select All the files to be uploaded at once, by the help of SHIFT or CTRL keys and the Mouse or Arrow Keys in the keyboard.</li><li>&nbsp;</li>
                        <li>When uploading completes,close the popup, give name of Notice and click on <strong>Add</strong>.</li><li>&nbsp;</li>
                        <li>You have succesfully added multiple files in the same notice.</li><li>&nbsp;</li>
                     </ul>
                     
                    <p style="font-weight:normal; font-size:14px;"><strong>Instructions to upload single document:</strong></p>
                    <ul style="font-weight:normal; font-size:12px; padding:10px;">
                    	<li>You can use any browser to use this feature.</li><li>&nbsp;</li>
                    	<li>First step: Rename all the Files to the names you want to be displayed in the website.</li><li>&nbsp;</li>
                        <li>The filenames <strong>MUST NOT</strong> contain the following characters anywhere: <strong># , . / \ $</strong></li><li>&nbsp;</li>
                        <li>While adding the notice, Browse to the folder and Select the file to be uploaded.</li><li>&nbsp;</li>
                        <li>When uploading completes,close the popup, give name of Notice and click on <strong>Add</strong>.</li><li>&nbsp;</li>
                        <li>You have succesfully added the notice.</li><li>&nbsp;</li>
                     </ul>
                     
                     <p style="font-weight:normal; font-size:14px;"><strong>Adding New Faculty Profile:</strong></p>
                    <ul style="font-weight:normal; font-size:12px; padding:10px;">
                    	<li>Copy the unique id of the faculty you want to create a profile.</li><li>&nbsp;</li>
                    	<li>Enter the Unique ID, email and password.</li><li>&nbsp;</li>
                        <li>A profile of the member will be created with the username as the email ID entered and the password entered.</li><li>&nbsp;</li>
                        <li>You can edit basic details of the faculty member.</li><li>&nbsp;</li>
                     </ul>
                     
                     <p style="font-weight:normal; font-size:14px;"><strong>Editing a Faculty Profile:</strong></p>
                    <ul style="font-weight:normal; font-size:12px; padding:10px;">
                    	<li>Copy the unique id of the faculty you want to the profile.</li><li>&nbsp;</li>
                    	<li>Enter the Unique ID, <strong>leave email and password fields EMPTY</strong>.</li><li>&nbsp;</li>
                        <li>You can edit basic details of the faculty member.</li><li>&nbsp;</li>
                        <li>You can also change the password of the faculty member by going to settings from the profile page. Enter anything in the current password, enter new password, comfirm it and click RESET Password.</li><li>&nbsp;</li>
                     </ul>
                     
                     <p style="font-weight:normal; font-size:14px;"><strong>Editing a Faculty Login Details:</strong></p>
                    <ul style="font-weight:normal; font-size:12px; padding:10px;">
                    	<li>Copy the unique id of the faculty you want to the profile.</li><li>&nbsp;</li>
                    	<li>Enter the Unique ID, new email-id (username) and the new password.</strong>.</li><li>&nbsp;</li>
                        <li>The new details are Updated automatically.</li><li>&nbsp;</li>
                        <li>You can edit basic details of the faculty member.</li><li>&nbsp;</li>
                     </ul>
                  </td>
                </tr>
              </thead>
            </table>
            <?php include 'footer.php'; ?>
