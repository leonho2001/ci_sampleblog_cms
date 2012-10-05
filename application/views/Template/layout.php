<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?=$title?></title>
	<link href="<?php echo base_url();?>css/templatemo_style.css" rel="stylesheet" type="text/css">
	<?=$header?>
</head>
<body>

<div id="templatemo_top_wrapper">
	<div id="templatemo_top">
    	<ul id="social_box">
            <li><a href="#"><img src="<?php echo base_url();?>images/facebook.png" alt="facebook"></a></li>
            <li><a href="#"><img src="<?php echo base_url();?>images/twitter.png" alt="twitter"></a></li>
            <li><a href="#"><img src="<?php echo base_url();?>images/linkedin.png" alt="linkin"></a></li>
            <li><a href="#"><img src="<?php echo base_url();?>images/technorati.png" alt="technorati"></a></li>
            <li><a href="#"><img src="<?php echo base_url();?>images/myspace.png" alt="myspace"></a></li>                
        </ul>
    </div>
</div>

<div id="templatemo_header_wrapper">
	<div id="templatemo_header">
    
    	<div id="site_title">
            <h1><a href="/"><img src="<?php echo base_url();?>images/templatemo_logo.png" alt="logo"><span>YOUR TAGLINE GOES HERE</span></a></h1>
        </div> <!-- end of site_title -->
        
    </div>
</div> <!-- end of templatemo_header -->

<div id="templatemo_menu_wrapper">
	<div id="templatemo_menu">
        <ul>
            <li><a href="/" <?php if($this->uri->segment(3) == "")echo 'class="current"'; ?>>Home</a></li>
            <li><a href="<?=base_url().'blog/content/about'?>" <?php if($this->uri->segment(3) == 'about') echo 'class="current"'; ?>>About</a></li>
            <li><a href="<?=base_url().'blog/content/gallery'?>" <?php if($this->uri->segment(3) == 'gallery') echo 'class="current"'; ?>>Gallery</a></li>
            <li><a href="<?=base_url().'blog/content/contact'?>" <?php if($this->uri->segment(3) == 'contact') echo 'class="current"'; ?> >Contact</a></li>
        </ul>    	
    </div> <!-- end of templatemo_menu -->
</div>

<div id="templatemo_middle_wrapper_outer">
<div id="templatemo_middle_wrapper_inner">
	<div id="templatemo_middle_top"></div>
	<div id="templatemo_middle">
    
    	<div id="templatemo_content">
        	<!-- main content here -->
        	
        	<?php
        	 $this->load->view('content/'.$content);?>
        	<div class="cleaner"></div>	
            
        
        </div> <!-- end of content -->
        
        <div id="templatmeo_sidebar">
        
        	<div class="sidebar_box">
                <ul class="ads_125">
                    <li><a href="http://www.templatemo.com"><img src="<?php echo base_url();?>images/templatemo_ads.jpg" alt="CSS Templates"></a></li>
                    <li class="odd"><a href="http://www.flashmo.com"><img src="<?php echo base_url();?>images/templatemo_ads.jpg" alt="banner"></a></li>
                    <li class="last_row"><a href="http://www.templatemo.com/page/1"><img src="<?php echo base_url();?>images/templatemo_ads.jpg" alt="banner"></a></li>
                    <li class="odd last_row"><a href="http://www.flashmo.com/page/1"><img src="<?php echo base_url();?>images/templatemo_ads.jpg" alt="banner"></a></li>
                </ul>  
                <div class="cleaner"></div>
            </div>              
            
            <div class="sidebar_box">
            	<h4>Categories</h4>
                <ul class="tmo_list">
                    <li><a href="index.html">Quisque dictum pharetra neque</a></li>
                    <li><a href="index.html">Praesent sollicitudin mollis leo</a></li>
                    <li><a href="index.html">Mauris et elit quis mauris aliquet</a></li>
                    <li><a href="index.html">Donec a purus vel purus sollicitudin</a></li>
                    <li><a href="index.html">Etiam in lorem ac nulla imperdiet</a></li>
                    <li><a href="index.html">Phasellus in justo at lectus</a></li>
                </ul>
            </div>
            
            <div class="sidebar_box">
            	<h4>Recent Posts</h4>
                <div class="recent_comment_box">
                    <a href="#">Donec mattis egestas sem</a>
                    <p>Mauris in sapien in massa pellentesque viverra. Phasellus in justo at lectus pulvinar ultrices. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
                </div>
                
                <div class="recent_comment_box">
                    <a href="#">Aenean feugiat mattis </a>
                    <p>Cras pretium sem sed odio. Vestibulum nisl mauris, malesuada nec, dictum in, molestie in, pede. </p>
              </div>
                
                <div class="recent_comment_box">
                    <a href="#">Quisque at nulla eu elit adipiscing</a>
                    <p> Vestibulum ultrices. Pellentesque tempus sapien nec sem commodo ullamcorper. Aenean neque.</p>
                </div>
                
                <div class="recent_comment_box">
                    <a href="#">Morbi nec magna pulvinar</a>
                    <p>Donec accumsan urna non elit tristique mattis. Vivamus fermentum orci viverra nisl. In nec magna id&nbsp;ipsum&nbsp;aliquam.</p>
                </div>
                
            </div>
            <div class="cleaner"></div>
        
        </div>
   	
    	<div class="cleaner"></div>
    </div> <!-- end of templatemo_middle -->
    <div id="templatemo_middle_bottom"></div>
<div id="templatemo_footer">
    
        <div class="col_w310">
            <h4>Our Pages</h4>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="contact.html" class="last">Contact</a></li>
            </ul>  
 
        </div>
        
        <div class="col_w310">
            <h4>Partners</h4>
            <ul>
                <li><a href="http://www.flashmo.com">Flash Templates</a></li>
                <li><a href="http://www.templatemo.com">CSS Templates</a></li>
                <li><a href="http://www.koflash.com">Flash Websites Gallery</a></li>
                <li><a href="http://www.flashmo.com/store">Premium Templates</a></li>
            </ul>    
 
        </div>
        
        <div class="col_w310">
            <h4>About Us</h4>
            <p>Integer consectetur enim eget diam tincidunt vehicula. Aenean scelerisque tellus vitae tortor placerat egestas. Ut volutpat erat nec mauris vestibulum sit amet pharetra urna.</p>
            <div class="btn_more"><a href="<?=base_url().'blog/content/about'?>">Read more <span>&raquo;</span></a></div>
 
        </div>
        
        
        <div class="cleaner"></div>
    </div> <!-- end of footer -->
    
</div>
</div>

<div id="templatemo_copyright_wrapper">
    <div id="templatemo_copyright">
    
        Copyright &#169; 2048 <a href="http://www.mmsofts.com">MMSoft</a> - 
        Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
        
    </div>
</div>
</body></html>