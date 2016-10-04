<html>
	<head>
		<?php $this->load->view('template/header'); ?>
	</head>

	<body>
		<?php $this->load->view('template/mainMenu',$fileToLoad); ?>
		<?php $this->load->view('template/script'); ?>
		<?php 
			if(isset($hrefLink))
			{
				foreach ($hrefLink as $key => $value) {
					echo "<script type='text/javascript' href=".base_url()."/".$value.">";
				}
			}
		?>
	</body>
</html>