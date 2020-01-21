<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="a.g.skryp" />

<title>a.g.skryp &frasl;&frasl; Web Design &amp; Development</title>

<link rel="shortcut icon" href="images/favicon.ico" />
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" />
<link href="css/slideshow.css" rel="stylesheet" type="text/css" />
<link href="css/lightbox.css" rel="stylesheet" type="text/css" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/lightbox-2.6.min.js"></script>
<script src="js/nav.js"></script>

</head>
<body>

<div id="container"> 
	<div id="headerContainer">  
   		<div id="headerBar">  
        	<div class="bannerBlock" style="padding-top:14px">
    			<h1>a.g.skryp</h1>
        	</div>
    		<div class="bannerBlock" style="padding-top:6px; padding-left:10px">
        		&frasl; &frasl; Web Design<br />
				&nbsp; &frasl; &frasl; Web Development
        	</div>
        	<div class="bannerBlock" style="padding-top:9px; float:right">
        		<a href="#message">
            		<img class="headerButton contact" src="images/contact.gif" height="30" width="30" alt="Contact" />
                </a>
        		<a href="#about">
                	<img class="headerButton" src="images/info.gif" height="30" width="30" alt="About" />
                </a>
    			<a href="#bodyContainer">
                	<img class="headerButton" src="images/home.gif" height="30" width="30" alt="Home" />
                </a>
        	</div>
        </div> 
	</div>
	<div id="headerBorder">&nbsp;</div> 
    
    <div id="bodyContainer">
        <div id="sectionI">
        	<div id="slideShow"> 
         		<ul>
         			<li class="slide1"><img src="images/slide1.jpg" height="320" width="620" alt="Slide 1" /></li>
         			<li class="slide2"><img src="images/slide2.jpg" height="320" width="620" alt="Slide 2" /></li>
         			<li class="slide3"><img src="images/slide3.jpg" height="320" width="620" alt="Slide 3" /></li>
         			<li class="slide4"><img src="images/slide4.jpg" height="320" width="620" alt="Slide 4" /></li>
		    	</ul>
        	</div>     
      	</div>
        
        <div id="sectionII">
        	<div id="portfolio">
					<h1 style="text-indent:40px">RECENT WORK</h1><br /><br />
               <div class="workBox">
    				<a href="images/work/full_licg.png" data-lightbox="licg">
    					<img src="images/work/thumb_licg.png" class="img" width="300" height="200" alt="LICG Canada" />
           			</a>
    				<a href="#null" class="badLink">
       				<div id="textContainer"><strong>Lansun International Capital Group</strong></div>
       			  </a>
       		  </div>
    			<div class="workBox">		
    				<a href="images/work/full_ciea.png" data-lightbox="ciea">
    					<img src="images/work/thumb_ciea.png" class="img" width="300" height="200" alt="Canada IEA" />
           			</a>
    				<a href="#null" class="badLink">
           				<div id="textContainer"><strong>Canadian International Entrepreneurs Association</strong></div>
           			</a>
        		</div>
        		<div class="workBox">
    				<a href="images/work/full_militaria.png" data-lightbox="histofmil">
    					<img src="images/work/thumb_militaria.png" class="img" width="300" height="200" 
                        alt="History of Militaria" />
           			</a>
    				<a href="http://historyofmilitaria.com" class="goodLink" target="_blank">
           				<div id="textContainer"><strong>History of Militaria</strong></div>
           			</a>
        		</div>
        		<div class="workBox">
    	   			<a href="images/work/full_lanceind.png" data-lightbox="lanceind">
    					<img src="images/work/thumb_lanceind.png" class="img" width="300" height="200" alt="Lance Industries" />
           			</a>
           			<a href="http://lanceind.com" class="goodLink" target="_blank">
           				<div id="textContainer"><strong>Lance Industries</strong></div>
    				</a>
        		</div>
        		<div class="workBox">
        			<a href="images/work/full_skryp6.png" data-lightbox="skryp6">
    					<img src="images/work/thumb_skryp6.png" class="img" width="300" height="200" alt="Skryp6.com" />
           			</a>
    				<a href="#null" class="badLink">
           				<div id="textContainer"><strong>Skryp6.com</strong></div>
    				</a>
    			</div>
                	<div style="clear:both"></div>
            </div>
        </div>  
        
        <div id="sectionIII">  
            <div id="about"> 
				<div id="connect">
    				<h1>CONTACT</h1><br /><br />
					<strong>Phone</strong>: 647-760-2712<br />
        			<strong>E-Mail</strong>: a.g.skryp@gmail.com<br /><br />
        			<a href="#message" class="contact"><strong>Message Me</strong></a>
            	</div>
                <h1 style="text-indent:40px">ABOUT</h1><br /><br />
 	        	a.g.skryp is an independent web design &amp; development service based in Toronto, Ontario Canada.    
                It was founded in 2013 by Andrew Skrypnyk, who specializes on front-end web construction and search engine
                optimization.
            </div>            
            	<div style="clear:both"></div>     
		</div>

	    <footer>
    		<strong style="font-size:14px">ACKNOWLEDGMENT</strong><br />
    			Lightbox provided by 
                <a href="http://lokeshdhakar.com/projects/lightbox2/" target="_blank">Lokesh Dhakar</a><br />
    			Images provided by <a href="http://www.corbisimages.com/" target="_blank">Corbis Images</a><br />
   				<br /><br /><br /><br />
				last updated 02/28/14
    	</footer>
    </div>
	
    <div id="contactTab">
    
    	<?php
			if (!empty($error_msg)) {
				echo '<p class="error">ERROR: '. implode("<br />", $error_msg) . "</p>"; }
			if ($result != NULL) {
				echo '<p class="success">'. $result . "</p>"; }
		?>

        <form action="<?php echo basename(__FILE__); ?>" method="post" name="emailForm">
        	<noscript>
				<p><input type="hidden" name="nojs" id="nojs" /></p>
			</noscript>
            <p>
            <table><tr><td>
            	Name:<br />
        		<input type="text" name="name" id="name" value="<?php get_data("name"); ?>" />
            </td><td>
				Email:<br />
				<input type="text" name="email"  id="email" value="<?php get_data("email"); ?>" />
            </td></tr></table>
			<br />
				Message:<br />
				<textarea name="comments" id="comments" rows="5" cols="20"><?php get_data("comments"); ?>></textarea><br />
        	</p>
            <p>
        		<input type="submit" class="formButton" name="submit" id="submit" value="Send" style="float:right" 
					<?php if (isset($disable) && $disable === true) echo ' disabled="disabled"'; ?> />
        		<input type="button" class="formButton" id="close" value="Close" style="float:right" />
        	</p>
        </form>
	</div>
</div>
</body>
</html>