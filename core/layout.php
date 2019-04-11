<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $meta['title']; ?></title>

        <?php if(!empty($meta['description'])):?>
            <meta name="description" content="<?php echo $meta['description']; ?>">
        <?php endif; ?>

        <?php if(!empty($meta['keywords'])):?>
            <meta name="keywords" content="<?php echo $meta['keywords']; ?>">
        <?php endif; ?>

        
        <link rel="stylesheet" type="text/css" href="./src/scss/main.scss">
        <meta name="viewport" content="width=device=width, initial-scale=1.0">
        <meta charset="UTF-8">
        <!--<meta name="description" content="My resume">-->
        <meta name="keywords" content="hello, intro, web developer, full stack">
        <meta name="msapplication.config" content="http://www.traveller.com.au/content/dam/images/g/u/n/q/h/0/image.related.articleLeadwide.620x349.gunpvd.png/1488330286332.png">
    </head>
    <body>
        <header>
            <span class="logo">My Website</span>
            <a id="toggleMenu">Menu</a>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="resume.php">Resume</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <?php echo $content; ?>
        </main>



    <script>

            var toggleMenu = document.getElementById('toggleMenu');
            var nav = document.querySelector('nav');
            toggleMenu.addEventListener('click',
                function()
                {
                    if(nav.style.display=='block')
                    {
                        nav.style.display='none';
                    }
                    else
                    {
                        nav.style.display='block';
                    }
                }
            );
    </script>
            
    </body>
</html>