<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title><?=$Title?></title>
</head>
	
    <body>
	    <h1><?php echo $Heading ?></h1>
	    <?php foreach ($Query->result() as $Row): ?>
			<h3><?=$Row->title?></h3>
			<p><?=$Row->body?></p>
			<p><?=anchor('/blog/comments/'.$Row->id,'Comments');?></p>
			<hr>
		<?php endforeach;  ?>

    </body>
</html>