<?php
//views/gig/view_gig.php

	//$this->load->view('header');
?>
	<h1><?php echo $title; ?></h1>
	<?php //if there are more than 0 rows in $query...
		if($query->num_rows() > 0) : 
	?>
	<section>
		<?php //...for each row available...
			foreach($query->result() as $row) : 
		?>
		<p>
			<h4>
				<?php //add the position title and company name
					echo $row->positionTitle . ' for '. $row->companyName . '<br />'; 
				?>
			</h4>
			<?php //add link to gig detail
				echo anchor('gig/view/' . $row->id, 'See Gig');
			?>
		</p>
		<?php endforeach; ?>
		<?php //get links for pagination
			echo $links; 
		?>
	</section>
	<?php endif; ?>
<?php
	//$this->load->view('footer');

?>