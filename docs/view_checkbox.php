<div class='controls'>
<?php
	
	$art_work = array(
		'name'		=>	'category0[]',
		'id'		=>	'gigCategories-1',
		'value'		=>	'1',
		'checked'	=>	FALSE,
	);
	
	echo '<label for="gigCategories-1" class="checkbox">' . 
			form_checkbox($art_work) .
			'Art Work</label>';
			
	$design = array(
		'name'		=>	'category1[]',
		'id'		=>	'gigCategories-2',
		'value'		=>	'2',
		'checked'	=>	FALSE,
	);
	
	echo '<label for="gigCategories-2" class="checkbox">' . 
			form_checkbox($design) .
			'Design</label>';
			
	$web_development = array(
		'name'		=>	'category2[]',
		'id'		=>	'gigCategories-3',
		'value'		=>	'3',
		'checked'	=>	FALSE,
	);
	
	echo '<label for="gigCategories-3" class="checkbox">' . 
			form_checkbox($web_development) .
			'Web Development</label>';
			

			
	$programming = array(
		'name'		=>	'category3[]',
		'id'		=>	'gigCategories-4',
		'value'		=>	'4',
		'checked'	=>	FALSE,
	);
	
	echo '<label for="gigCategories-4" class="checkbox">' . 
			form_checkbox($programming) .
			'Programming</label>';
			
	$mobile = array(
		'name'		=>	'category4[]',
		'id'		=>	'gigCategories-5',
		'value'		=>	'5',
		'checked'	=>	FALSE,
	);
	
	echo '<label for="gigCategories-5" class="checkbox">' . 
			form_checkbox($mobile) .
			'Mobile</label>';
			
	 $front_end = array(
		'name'		=>	'category5[]',
		'id'		=>	'gigCategories-6',
		'value'		=>	'6',
		'checked'	=>	FALSE,
	);
	
	echo '<label for="gigCategories-6" class="checkbox">' . 
			form_checkbox($front_end) .
			'Front End</label>';
			
	$back_end = array(
		'name'		=>	'category6[]',
		'id'		=>	'gigCategories-7',
		'value'		=>	'7',
		'checked'	=>	FALSE,
	);
	
	echo '<label for="gigCategories-7" class="checkbox">' . 
			form_checkbox($back_end) .
			'Back End</label>';
			
	
			
?>
	

   </div>