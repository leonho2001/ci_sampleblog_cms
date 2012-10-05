 <div class="post_box">
            
                <h2><?=$entryHeading;?> </h2>
               	
                <div class="post_meta"><strong>Date:</strong> <?php $format = '%F %d, %Y - %h:%i %a'; 
	                		 	$time = strtotime($entryDate); 
	                		 	echo mdate($format, $time); ?>  | <strong>Author:</strong> <?=$author?> | <a href="#comment_section"><?=$ccount?> comments</a></div>
              <img src="<?=base_url()?>images/blog_thumbnails/<?=$thumbnail?>" alt="image" />
              
              <!-- Entry content here -->
              <?=$entryBody?>
              <!-- End of Entry content -->  
              
              <div class="cleaner_h20"></div>
                <div class="category"><strong>Category: </strong><a href="#">Freebies</a>, <a href="#">Web Templates</a></div>
                <div class="cleaner"></div>

			</div>
            
                <h2><?=$ccount?> comments</h2>
                                
            	<div id="comment_section">
                	<ol class="comments first_level">
                        
                        <li>
                            <div class="comment_box commentbox1">
                                    
                                <div class="gravatar">
                                    <img src="images/avator.png" alt="author" />
                                </div>
                                
                                <div class="comment_text">
                                    <div class="comment_author">Steven <span class="date">May 28, 2048</span><span class="time">11:40 PM</span></div>
                                    <p>Suspendisse at nisi nec diam pretium tincidunt. Ut vitae felis eu lectus ultrices varius. Aliquam lacus turpis, dapibus eget, tincidunt eu, lobortis et, magna. Integer pellentesque dignissim diam. Quisque ornare pulvinar lorem.</p>
                                    <div class="btn_more float_r"><a href="#"><span>+</span> Reply</a></div>
                                </div>
                                <div class="cleaner"></div>
                            </div>                        
                            
                        </li>
                        
                        <li>
                            	<ol class="comments">
                                    <li>
                                        <div class="comment_box commentbox2">
                                        
                                        <div class="gravatar">
                                        <img src="images/avator.png" alt="author 5" />
                                        </div>
                                        <div class="comment_text">
                                        <div class="comment_author">John<span class="date">May 29, 2048</span><span class="time">10:15 AM</span></div>
                                        <p> In hac habitasse platea dictumst. Curabitur euismod scelerisque lacus. Cras pretium sem sed odio. Vestibulum nisl mauris, malesuada nec, dictum in, molestie in, pede.</p>
                                       	<div class="btn_more float_r"><a href="#"><span>+</span> Reply</a></div>
                                        </div>
                                        
                                        <div class="cleaner"></div>
                                        </div>                        
                                    
                                    
                                    </li>
                                    
                                    <li>
                                    
                            
                                        <ol class="comments">
                                    
                                            <li>
                                                <div class="comment_box commentbox1">
                                                
                                                    <div class="gravatar">
                                                        <img src="images/avator.png" alt="author 4" />
                                                    </div>
                                                    <div class="comment_text">
                                                        <div class="comment_author">Michael <span class="date">May 29, 2048</span><span class="time">08:50 PM</span></div>
                                                        <p> Aenean eleifend, neque hendrerit elementum sodales, odio erat sagittis quam, sed tempor orci magna vitae tellus. Proin dui mauris, tempor eget, pulvinar sed, pretium sit amet, dui.</p>
                                                        <div class="btn_more float_r"><a href="#"><span>+</span> Reply</a></div>
                                                    </div>
                                                    
                                                    <div class="cleaner"></div>
                                                </div>                        
                                                
                                                
                                            </li>
                                    
                                        </ol>
                        
                        			</li>
                                </ol>
                                
						</li>                        
                    </ol>
                </div>
                
                 <div id="comment_form">
                
                    	<h3>Leave your comment</h3>
                        
                        <form action="#" method="post">
                        
                            <div class="form_row">
                            <label>Name (* required)</label>
                            <br />
                            <input type="text" name="name" />
                            </div>
                            <div class="form_row">
                            <label>Email (* required)</label>
                            <br />
                            <input type="text" name="name" />
                            </div>
                            <div class="form_row">
                            <label>Comment</label><br />
                            <textarea  name="comment" rows="" cols=""></textarea>
                            </div>
                            
                            <input type="submit" name="Submit" value="Submit" class="submit_btn" />
                        </form>
                    
                    </div>