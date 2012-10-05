    <div id="templatemo_slider">
                <div id="featuredslideshow">
                    <ul> 
                        <li><img width="600" height="300" alt="photo one" src="<?php echo base_url();?>images/slideshow/01.jpg" /></li> 
                        <li><img width="600" height="300" alt="photo two" src="<?php echo base_url();?>images/slideshow/02.jpg" /></li> 
                        <li><img width="600" height="300" alt="photo three" src="<?php echo base_url();?>images/slideshow/03.jpg" /></li> 
                        <li><img width="600" height="300" alt="photo four" src="<?php echo base_url();?>images/slideshow/04.jpg" /></li> 
                        <li><img width="600" height="300" alt="photo five" src="<?php echo base_url();?>images/slideshow/05.jpg" /></li> 
                        <!-- eccetera --> 
                    </ul> 
                </div>
                <script type="text/javascript">
                     $("div#featuredslideshow").slideViewerPro({ 
                    thumbs: 4,  
                    thumbsPercentReduction: 15, 
                    galBorderWidth: 0, 
                    galBorderColor: "#666", 
                    thumbsTopMargin: 10, 
                    thumbsRightMargin: 10, 
                    thumbsBorderWidth: 1, 
                    thumbsActiveBorderColor: "#000", 
                    thumbsActiveBorderOpacity: 0.8, 
                    thumbsBorderOpacity: 0, 
                    buttonsTextColor: "#707070", 
                    autoslide: true,  
                    typo: true 
                    });  	
                </script>
            </div>
             
            <div class="cleaner"></div>
			<?php 
				foreach ($query->result() as $row): 
			?>
	            <div class="<?php if($row->id != $lastID) echo 'post_box'; else echo 'post_box post_box_last';?>">
	        
	                <h2><a href="blog_post.html"><?=$row->title ?></a></h2>
	
	                <div class="post_meta">
	                	<strong>Date:</strong>
	                		 <?php 
	                		 	$format = '%D, %d %F %Y - %h:%i %a'; 
	                		 	$time = strtotime($row->postdate); 
	                		 	echo mdate($format, $time); 
	                		 	?>
	                		 	 | <strong>Author:</strong> <?= $row->author?>
	                		 	 | <a href="/blog/content/blog_post"><?=$row->ccount?> comments</a>
	                </div>
	                <a href="#"><img src="<?php echo base_url();?>images/templatemo_image_01.jpg" alt="image" /></a>
	                
	                <p>
	                	<?php if(strlen($row->body) > 300) echo substr($row->body, 0, 300).'<a style="text-decoration:none" href="/blog/content/blog_post">...read more</a>'; else echo $row->body;?>
	                </p>
	                    
	              <div class="cleaner_h20"></div>
	                <div class="category"><strong>Category: </strong><a href="#">Freebies</a>, <a href="#">CSS Templates</a></div> <div class="btn_more float_r"><a href="blog_post.html">Click to comment <span>&raquo;</span></a></div>
	                <div class="cleaner"></div>
	    
	            </div>
 			 <?php endforeach;  ?>