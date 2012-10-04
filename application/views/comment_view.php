<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title><?=$Title?></title>
</head>
    <body>
    
		<h1><?php echo $EntryHeading ?></h1>
		<p><?php echo $EntryBody?></p>
		<h2>Comments</h2>
		<hr>
		 <?php if($Query->num_rows()>0):  ?>
		 <?php foreach ($Query->result() as $Row): ?>
			<div style="width:300px; background-color:#CECECE;">
				<p><?=$Row->body?></p>
				<p><?=$Row->author?></p>
			</div>
		<?php endforeach;  ?>
		<?php endif; ?>
	    <p><?=anchor('blog','Back to blog');?></p>
	
		<?=form_open('blog/comment_insert')?>
		<?=form_hidden('entry_id',$this->uri->segment(3));?>
		<p><textarea name="body" rows="10"></textarea></p>
		<p>
			<input type="text" name="author"/>
		</p>
		<p>
			<input type="submit" value="Comment" />
		</p>
		</form>
			<?php echo $this->disqus->get_html();?>
    </body>
</html>