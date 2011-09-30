<html>
    <head>
        
    </head>
    <body>
        <h2>
            Shorten
        </h2>
        <p>
        <form method="POST" action="<? echo URL::site('welcome'); ?>">
            <input type="text" name="url" />
            <input type="submit" value="SHORTEN" />
        </form>
        </p>
        
        <p>
            <? if(isset($url)) {
                echo $url;
            }
            ?>
        </p>
        
    </body>
    
</html>

