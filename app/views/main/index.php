
<?php 


echo "Home Edition <hr>";

foreach($news as $val) {
	echo $val['title'] . "<p>" . $val['description'] . "</p><hr>";
}

