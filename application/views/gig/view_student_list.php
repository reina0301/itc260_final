<?php
//views/mailing_list/view_mailing_list.php
if($query->num_rows() > 0):
?>
<?php foreach($query->result() as $row) : ?>
<h1><?=$row->FirstName?><?=$row->LastName?></h1>
<p>StudentID:<b><?=$row->StudentID?></b></p>
<p>First Name:<b><?=$row->FirstName?></b></p>
<p>Last Name:<b><?=$row->LastName?></b></p>

<?php
	echo anchor('gig_student_list/view/' . $row->StudentID,"View Student Detail Information");
?>
</p>
<hr>
<?php endforeach; ?>


<?php endif; ?>