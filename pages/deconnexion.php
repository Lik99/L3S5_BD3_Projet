<?php 
	session_start() ;
    $_SESSION['IdEtu'];
    $_SESSION['nomEtu'];
?>

<!DOCTYPE html>
<!--[if IE 7 ]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8 oldie"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html> <!--<![endif]-->

<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <meta name="description" content="">
    <meta name="author" content="">

    <title>page inscrire</title>

    <link rel="stylesheet" type="text/css" media="screen" href="CoolBlue11/css/coolblue.css" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.6.1.min.js"><\/script>')</script>

    <script src="js/scrollToTop.js"></script>

</head>

<body id="top">


<!--header -->
<div id="header-wrap"><header>

 	<hgroup>
    </hgroup>
		

    <nav>
	</nav>

<!--/header-->
</header></div>
	
<!-- content-wrap -->
<div id="content-wrap">
    <!-- content -->
    <div id="content" class="clearfix">
   	    <!-- main -->
        <div id="main">

      	    <article class="post">

      		    <div class="primary">

                    <h2>Page de déconnexion</h2>
                    <p class="post-info"><span>Nous attendons la prochaine rencontre avec vous !</span></p>

                    <?php
                        $_SESSION = array();
                        session_destroy();
                    ?>

               	    <div>
                       Vous avez bien été déconnecté.e.
                        <br/>
                        <br/>
                       <a href="index.php">Retour à la page d'accueil</a>
         	        </div>
   
                </div>

                <aside>
            	    
                </aside>
		    </article>           
        <!-- /main -->
        </div>
    <!-- content -->
	</div>
<!-- /content-out -->
</div>

</body>
</html>
