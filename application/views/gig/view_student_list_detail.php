<?php
//views/mailing_list/view_mailing_list_detail.php
if($query->num_rows() > 0):
?>
<?php foreach($query->result() as $row) : ?>
<h1><?=$row->FirstName?><?=$row->LastName?></h1>
<p>StudentID:<b><?=$row->StudentID?></b></p>
<p>First Name:<b><?=$row->FirstName?></b></p>
<p>Last Name:<b><?=$row->LastName?></b></p>
<hr>
<p>Email:<b><?=$row->EmailAddress?></b></p>
<p>Password:<b><?=$row->Password?></b></p>
<p>Phone:<b><?=$row->Phone?></b></p>
<p>Portfolio:<b><?=$row->Portfolio?></b></p>
<p>LinkedIn:<b><?=$row->LinkedIn?></b></p>
<p>GitHub:<b><?=$row->GitHub?></b></p>
<p>Facebook:<b><?=$row->Facebook?></b></p>
<p>interests:<b><?=$row->AreasInterest?></b></p>
<p>EducationLevel:<b><?=$row->EducationLevel?></b></p>

 <p>Addition Information:<b><?=$row->AdditionInfor?></b></p>

<?php endforeach; ?>


<?php endif; ?>