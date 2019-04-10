<!DOCTYPE html>
<html lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
       <title>Hello, I am Groot</title>
       <link rel="stylesheet" type="text/css" href="./src/scss/main.scss">
       <meta name="viewport" content="width=device=width, initial-scale=1.0">
       <meta charset="UTF-8">
       <meta name="description" content="My resume">
       <meta name="keywords" content="hello, intro, web developer, full stack">
       <meta name="msapplication.config" content="http://www.traveller.com.au/content/dam/images/g/u/n/q/h/0/image.related.articleLeadwide.620x349.gunpvd.png/1488330286332.png">
    </head>
    <body>
        <header>
            <span class="logo">My Website</span>
            <a id="toggleMenu">Menu</a>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="resume.html">Resume</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <h1>Hello, I am Groot!</h1>
                <div>
                    <img class="avatar" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvtU2lUd2E9RdbTWRF9GKcF9ecAAaIkX00S0CAZaLzHVaTCnz8" alt="Ai">
                </div>    
                    <p>G'day Mate!  </br> 
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
                            culpa qui officia deserunt mollit anim id est laborum.
                    </p>
        </main>
        <script>

                var toggleMenu = document.getElementById('toggleMenu');
                var nav = document.querySelector('nav');
                toggleMenu.addEventListener(
                  'click',
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