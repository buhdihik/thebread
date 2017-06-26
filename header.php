<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>The Bread House</title>
         <?php wp_head();?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

        <link href="http://ishedorene.com/thebread/wp-content/themes/thebread/css/main.css" rel="stylesheet" >
        <link href="https://fonts.googleapis.com/css?family=Oswald|Montserrat|Frijole|Kaushan+Script" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet"> 
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>
		$(document).ready(function(){
		$('a[href^="#"]').on('click',function(e){
		e.preventDefault();

		var target = this.hash;
		var $target = $(target);

		  //Scroll and show hash

		//$('html,bod').animate({
		//'scrollTop': $target.offset().top
		//}, 1000, 'swing' , function() {
		//window.location.hash = target;
		//});

		// Scroll and don't show hash
		  $('html,body').animate({
		  'scrollTop': $target.offset().top
		   }, 1000, 'swing');
		});
		});
       </script>
     <?php wp_head();?>
       
    </head>
     <body>