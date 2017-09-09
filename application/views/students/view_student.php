<h1>View Students!</h1>
<img src="<?php echo base_url('assets/images/page.jpg');?>" alt="My queen"/>
<table border="1">
	<thead>
	<tr>
		<th>ID NO.</th>
		<th>LAST NAME</th>
		<th>FIRST NAME</th>
		<th>MIDDLE NAME</th>
		<th>COURSE</th>
		<th>SEX</th>
		<th>ACTION</th>
	</tr>
	</thead>
	<tbody>
		<?php
			foreach($students as $s)
			{
				echo ' <tr>
							<td>'.$s['idno'].'</td>
							<td>'.$s['lname'].'</td>
							<td>'.$s['fname'].'</td>
							<td>'.$s['mname'].'</td>
							<td>'.$s['course'].'</td>
							<td>'.$s['sex'].'</td>
							<td>
								<a href="'.base_url('students/profile/'.$s['idno']).'">view</a>   
								<a href="">edit</a>    
								<a href="">delete</a>   
							 </td>
						</tr>';
			}
		?>
	</tbody>