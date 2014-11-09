<?php
//Container Declaration

$fullWidth = '"sixteen columns"';
$fullWidthNav = '"nav sixteen columns"';
$ColumnAWidth = '"five columns alpha"';
$ColumnBWidth = '"eleven columns omega"';

//Prints Heading based on Values
print ("<div class= 'branding container'>");

?>

 <?php if ($logo): ?>
<div id="logo"><a href="<?php print $base_path ?>" title="<?php print t('Home'); ?>" rel="home"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" id="logo-image" /></a></div>
<?php endif ?>

<?php

print ("<div class= $fullWidth>");
print render($page['branding']);
print ("</div>");

//Special div for Navigation elements
print ("<div class= $fullWidthNav?>");
print render($page['menu']);
print ("</div>");

print ("<div class= $fullWidth?>");
	print render($page['user_bar_first']);		
print ("</div>");


//Main Content section, with Sidebar relivence check

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
    
//Closing Sections.
	
	print ("<div class= $fullWidth?>");
	print render($page['preface_first']);	
	print render($page['postscript_first']);	
	print ("</div>");

	print ("<div class= $fullWidth?>");
	print render($page['post_postscript']);
	print ("</div>");

	print ("</div>");
?>  