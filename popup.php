<?php
/**
 * Plugin Name: Popup PLugin
 * Description: The popup plugin to redirect.
 * Version: 1.0
 * Author: Your_Name
 */


add_action( 'wp_head', 'popup_plugin' );
function popup_plugin () {
    if ( is_home() || is_front_page() ) {?>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>
<style type="text/css">
			#overlay {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: #000;
			filter:alpha(opacity=70);
			-moz-opacity:0.7;
			-khtml-opacity: 0.7;
			opacity: 0.7;
			z-index: 100000;
			display: none;
			}
			.cnt223 a{
			text-decoration: none;
			}
			.popup{
			width: 100%;
			margin: 0 auto;
			display: none;
			position: fixed;
			z-index: 101000;
			}
			.cnt223{
			min-width: 600px;
			width: 600px;
			min-height: 150px;
			margin: 100px auto;
			background: #f3f3f3;
			position: relative;
			z-index: 103;
			padding: 15px 35px;
			border-radius: 5px;
			box-shadow: 0 2px 5px #000;
			}
			.cnt223 p{
			clear: both;
			color: #555555;
			/* text-align: justify; */
			font-size: 20px;
			font-family: sans-serif;
			}
			.cnt223 p a{
			color: #d91900;
			font-weight: bold;
			text-align: center;
			}
</style>
<script type='text/javascript'>
	$(function(){
		var overlay = $('<div id="overlay"></div>');
		overlay.show();
		overlay.appendTo(document.body);
		$('.popup').show();
		$('.ok').click(function(){
			if(Intl.DateTimeFormat().resolvedOptions().timeZone == "Asia/Kolkata"){
				var myWindow = window.open("...","_self");
				$('.popup').hide();
				overlay.appendTo(document.body).remove();
				return false;
			}
			else{
				var myWindow = window.open("...","_self");
				$('.popup').hide();
				overlay.appendTo(document.body).remove();
				return false;
			}
		});
		$('.close').click(function(){
		$('.popup').hide();
		overlay.appendTo(document.body).remove();
		return false;
		});
	});
</script>
<div class='popup'>
		<div class='cnt223'>
				<p>
					You are on the international site. If you wish to switch to indian site press OK.
				<br/>
				<br/>
				<a href='' class='close' >Close</a>&emsp;&emsp;&emsp;
				<a href='' class='ok'>OK</a>
				</p>
		</div>
</div>
<?php
}
}
