<html>
    <head>
        <link href="public/css/bootstrap.min.css" rel="stylesheet">
        <link href="public/css/mystyle.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <div>
                <h2>Страны и флаги</h2>
                <h3>
                    
                <?php echo '<a href="'.$_SERVER['PHP_SELF'].'">Главная</a>';
                if(!empty($state->country_name)) echo ' &#187 ' .$state->country_name;
                ?>
                    <!-- Цепочка -->
                </h3>
            </div>

            <div id="content" >
                <div class="left">
                    <?php echo $menyy; ?>
                </div>

                <div class="right">
                    <?php echo $content; ?>
                </div>
            </div>
            <footer class="footer">
                <p>&copy; 2017 Design <i class="fa fa-child"></i></p>
            </footer>

        </div> <!-- /container -->
    </body>
</html>