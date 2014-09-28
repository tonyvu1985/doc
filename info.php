<div class="dynamic-image">
<?php
	$arr_image = array("cupping" => "cupping", "diet" => "diel", "fund" => "Full Fellow Member of", "moxibustion" => "Moxibustion", "tuina" => "Tuina", "media" => "Hoc Ku Huynh");
	$sub_url = $_SERVER['REQUEST_URI'];
	$image = substr($sub_url, '1', $sub_url.length - 4);
	if($image ==""){
		echo "<h4>Hoc Ku Huynh</h4>";
		echo "<img src='images/homepage.jpg' alt='Hoc Ku Huynh' />";
	}else{	
		foreach($arr_image as $key => $value){
			if($key == $image){
				echo "<h4>" . $value . "</h4>";
				echo "<img src='images/" . $image . ".jpg' alt='" . $image . "' />";
			}
		}
	}	
?>
</div>
