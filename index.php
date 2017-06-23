<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php wp_title('|', true, 'right'); ?></title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

        <link href="css/main.css" rel="stylesheet" >
        
        
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
       
       <?php wp_head(); ?>
    </head>
     <body>
        <div class="container-fluid indexBG" id="first">
        <nav class="navbar navbar-inverse navbar-fixed-top " >
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logo" href="#"><img src="http://ishedorene.com/thecoffee/wp-content/themes/thecoffee/images/logo.png" class="img-responsive"/></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
              <li><a href="#first">HOME3</a></li>
              <li><a href="#second">ABOUT</a></li>
              <li><a href="#third">PRODUCTS</a></li>
               <li><a href="#fourth">CONTACT</a></li>
              
            </ul>

          </div><!--/.nav-collapse -->
        </div>
      </nav>
           <div class="container" >
               <h1>Hellow World</h1>
               <h1>Hellow World</h1>
               <h1>Hellow World</h1>
               <h1>Hellow World</h1>
               <h1>Hellow World</h1>
               <h1>Hellow World</h1>
          </div>
            
          
        </div><!--the first-->
        <div class="row ">
            <div class="indexBG2">
                <div class="container">
               <h1>Hellow World</h1>
               <h1>Hellow World</h1>
               <h1>Hellow World</h1>
               <h1>Hellow World</h1>
               <h1>Hellow World</h1>
               <h1>Hellow World</h1> 
                </div>
            </div>
        </div>
        
     </body>
</html>
                
      
