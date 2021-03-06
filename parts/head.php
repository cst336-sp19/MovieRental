<!-- Scripts and styles that are used on every page -->
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php session_start(); ?>
<?php $site["title"]="Mockbuster"; ?>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/theme.php" type="text/css" media="screen"> 
<link href="css/hamburgers.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/cart.js"></script>
<script type="text/javascript" src="js/db.js"></script>
<script type="text/javascript" src="js/functions.js"></script>
<script>
    /* global $, getCart */
    $(function() {
        $(".hamburger").on("click", function() {
           $(".hamburger").toggleClass("is-active");
        });
        
        $(document).ready(function() {
            let file = window.location.pathname.split('/');
            file = file[file.length - 1]; // get the file name only
            $('li.active').removeClass('active');
            $(`a[href="${file}"]`).closest('li').addClass('active'); 
        });
       getCart();
    });
</script>