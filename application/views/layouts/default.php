<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $template['title']; ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 

<script src="https://code.jquery.com/jquery-1.11.2.js"></script>
<script src="https://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/style.css">
<link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/header.css">
<link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/footer.css">

<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,700,900,300' rel='stylesheet' type='text/css'>

</head>

<body>
<?php echo $template['partials']['header']; ?>

<div class="middle text-center" >
	<?php echo $template['body']; ?>
</div>

<?php echo $template['partials']['footer']; ?>

<script src="<? echo base_url();?>assets/js/scrollReveal.js"></script>
<script>

  	// window.sr = new scrollReveal();
  	$(document).ready(function() {
        //animation for tablet & laptop screen:
        var windowsize = $(window).width();
        if (windowsize > 767) {
            //if the window is greater than 767px wide then turn on scrollReveal..
            window.sr = new scrollReveal();
        }
    });		
  	//smooth scrolling
	$(function() {
        //$('a[href*=#]:not([href=#])').click(function() {
        $('.smooth-scroll').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });	
</script>
</body>

</html>