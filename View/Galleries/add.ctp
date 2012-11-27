<?php 

/**
 * View to add a Gallery
 */

?>

<?php 

	echo $this->Form->create();

	echo $this->Form->inputs( array(	'legend' 	=> false, 
										'name',
										'permissions'
									) 
							);

	echo $this->Form->end('Create');

?>