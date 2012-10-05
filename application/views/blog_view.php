<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title><?=$Title?></title>
</head>
	
    <body>
     <h1><?php echo $heading ?></h1>
	    <?php foreach ($query->result() as $row): ?>
			<h3><?=$row->title?></h3>
			<p><?=$row->body?></p>
			<p><?=anchor('/blog/comments/'.$row->id,'Comments');?></p>
			<hr>
		<?php endforeach;  ?>

    </body>
</html>