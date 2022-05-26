<?php if ( !empty($crud_note) ) echo "<p>$crud_note</p>"; ?>
<?php
if(!empty($extra_element)){
	if(is_array($extra_element)){
		echo $extra_element['script'];
	}else{
		echo $extra_element;
	}
}

?>
<!-- Create by Jose-->
<div class="row">
	<div class="col-md-10">
		<h3><?php if ( !empty($grid_title) ) echo "<p>$grid_title</p>";?></h3
			>
	</div>

	<div class="col-md-2 to-bottom">
		<?php if ( !empty($back_button) ) 
			echo "<button class='back_page'>".$back_page[0]."</button>";
		?>

	</div>
</div>
<?php 
	if ( !empty($grid_header)){
		if(is_array($grid_header)){
			$this->load->view($grid_header[0],$grid_header[1]);
		}else{
			echo $grid_header;
		}
	}
?>
<!-- jose -->

<?php if ( !empty($crud_output) ) echo $crud_output; ?>