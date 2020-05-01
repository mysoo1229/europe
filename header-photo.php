<?php
$pgname='photo';
include ('header.php');
?>
<script src="https://npmcdn.com/masonry-layout@4.1/dist/masonry.pkgd.min.js"></script>
<script src="/europe/js/lib/lightbox.min.js"></script>
<script>
	$(function(){
		$('.grid').masonry({
			itemSelector: '.grid-item',
			columnWidth: 225
		});
		lightbox.option({
			'resizeDuration': 250,
			'albumLabel':""
		});
	});
</script>

<main class="container">
	<div id="subnav">
		<div>
			<a class="list-group-item" href="all.php">ALL PHOTO</a>
		 	<a class="list-group-item" href="paris.php" class="activelink">PARIS</a>
		 	<a class="list-group-item" href="brussels.php">BRUSSELS</a>
		 	<a class="list-group-item" href="london.php">LONDON</a>
		 	<a class="list-group-item" href="rome.php">ROME</a>
		 	<a class="list-group-item" href="florence.php">FLORENCE</a>
		 	<a class="list-group-item" href="venice.php">VENICE</a>
		 	<a class="list-group-item" href="budapest.php">BUDAPEST</a>
		 	<a class="list-group-item" href="vienna.php">VIENNA</a>
		 	<a class="list-group-item" href="cesky.php">CESKY KRUMLOV</a>
		 	<a class="list-group-item" href="prague.php">PRAGUE</a>
		 	<a class="list-group-item" href="dresden.php">DRESDEN</a>
		</div>
	</div>