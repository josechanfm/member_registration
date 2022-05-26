<?php $this->load->view('email/_header'); ?>

<h1>School Notice</h1>
<p>This email is sent automatically from CI Bootstrap Website.</p>


<table>
	<?php foreach ($data as $key => $value): ?>
		<tr>
			<td><strong><?php echo humanize($key); ?>: </strong></td>
			<td><?php echo $value; ?></td>
		</tr>
	<?php endforeach ?>
</table>

<?php $this->load->view('email/_footer'); ?>