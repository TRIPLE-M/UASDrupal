<?php
//Container Declaration

$third = '"one-third columns"';
$fullWidthNav = '"nav sixteen columns"';
$fullWidth = '"sixteen columns"';
$fullWidthNav = '"nav sixteen columns"';
$ColumnAWidth = '"five columns alpha"';
$ColumnBWidth = '"eleven columns omega"';

//Prints Heading based on Values
print ("<div class= 'container'>");

print ("<div class= $third>");
print render($page['branding']);
print ("</div>");

print ("<div class= $third>");

?>
        //Logo Code Goes Here
<?php

print ("</div>");


print ("<div class= $third>");
	print render($page['user_bar_first']);		
print ("</div>");
print ("</div>");
print ("<div class= 'container'>");


//Special div for Navigation elements
print ("<div class= $fullWidthNav>");
print render($page['menu']);
print ("</div>");

//Main Content section, with Sidebar relivence check

print ("</div>");

print ("<div class= 'core container'>");

 if($page['sidebar_first']) {
	print ("<div class= container>");
	print ("<div class= $ColumnAWidth>");  
	print render($page['sidebar_first']);
	print ("</div>");
	print ("<div class= $ColumnBWidth>");  	
	print render($page['content']);	
	print ("</div>");
print ("</div>");
 }
 
 else
 	{
	print ("<div class= $fullWidth>");  	
	print render($page['content']);	
	print ("</div>");	
	}

print ("</div>");
    
//Closing Sections.

print ("<div class= 'container'>");

	print ("<div class= $fullWidth>");
	print render($page['preface_first']);	
	print render($page['postscript_first']);	
	print ("</div>");

	print ("<div class= $fullWidth>");
	print render($page['post_postscript']);
	print ("</div>");

	print ("</div>");
?>  