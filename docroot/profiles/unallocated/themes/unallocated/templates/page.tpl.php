<?php
//Container Declaration

$third = '"one-third columns"';
$fullWidth = '"sixteen columns"';
$fullWidthNav = '"nav sixteen columns"';
$ColumnAWidth = '"five columns alpha"';
$ColumnBWidth = '"eleven columns omega"';

$ColumnBottomWidth ='"four columns"';

//Prints Heading based on Values
print ("<div class= 'top_zone'>");
print ("<div class= 'nav container'>");
if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php  print t('Home'); ?>" rel="home" id="logo">
        <img id="logoImg", src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>
    
 <?php
print ("</div>");
print ("</div>");
print ("<div class= 'container'>");


//Special div for Navigation elements
	print render($page['menu']);
//Main Content section, with Sidebar relivence check

print ("</div>");

print ("<div class= $fullWidth>");
print ("<div class= 'core'>");
print ("<div class= container>");

 if($page['sidebar_first']) {
	print ("<div class= $ColumnAWidth>");  
	print render($page['sidebar_first']);
	print ("</div>");
	
	print ("<div class= $ColumnBWidth>");  	
	print render($page['content']);	
	print ("</div>");
 }
 
 else
 	{ 	
	print render($page['content']);	
	}
	
print ("</div>");
print ("</div>");
print ("</div>");
    
//Closing Sections.

print ("<div class= 'bottom_zone'>");
print ("<div class= 'container'>");

	print ("<div class= $ColumnBottomWidth>");
    print ("<div id='boxes-box-uas_address_box'></div>");	
	print ("</div>");

	print ("<div class= $ColumnBottomWidth>");	
	print render($page['postscript_first']);	
	print ("</div>");

	print ("<div class= $ColumnBottomWidth>");
	print render($page['preface_first']);		
	print ("</div>");


	print ("<div class= $ColumnBottomWidth>");
	print render($page['post_postscript']);
	print ("</div>");
	
	print ("</div>");
	print ("</div>");
?>  