<?php 
function main(){
	echo '<h1 id="main_title">Home</h1>';
}

function intro(){
	echo '<head>';
	echo '<meta http-equiv="content-type" content="text/html; charset=utf-8"0>';

	echo '<title>Home</title>';
	echo '<link rel="stylesheet" href="style.css" >';
	echo '</head>';
	
}

function body(){
echo '<body>';
	echo '<div id="Banner">';
		echo '<div id="Account">';
			echo 'Log in Sign up';
		echo '</div>';
		echo '<h1 >SEGP Portfolio</h1>';
	echo '</div>';

	echo '<div id="Navigation">';
		echo '<h1 >Navigation</h1>';
		NavigationText();
	echo '</div>';

	echo '<div id="Main">';
		echo '<h1 id="main_title">Home</h1>';
	echo '</div>';

echo '</body>';
}

function NavigationText(){
	echo 'Home<br/>';
	echo 'Projects<br/>';
	echo 'Course Info<br/>';
	echo 'Tender<br/>';
	echo 'Contact<br/>';
}
?>
