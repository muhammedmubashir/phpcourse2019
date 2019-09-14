<h1><?php echo $heading;?></h1>
<ul>
	<?php
	foreach($productList as $product)
	{
		echo "<li>".$product."</li>";
	}
	?>
</ul>