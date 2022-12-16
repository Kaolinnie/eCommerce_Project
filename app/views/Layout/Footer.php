<footer>
    <span>Kaolin and Eris &copy; 2022</span><br>
    <span><a href="/Main/faq">Need help?</a></span>
    <span><a href="/Site/lang/<?php
        $url = $_SERVER['REQUEST_URI'];
        if($url!='/') echo $url;
        ?>"><?=$_COOKIE['lang']??'fr'?></a></span>
</footer>