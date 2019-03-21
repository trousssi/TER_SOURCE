
    <?php $filesads = array('bouygue.jpg', 'carrefour.jpg', 'cdiscount.jpg', 'red.png', 'sosh.png');
    $randomNumber = rand (0, count($filesads)-1);
    $myurl = "http://ip_duserveur/ads/";
    echo $myurl.$filesads[$randomNumber]; ?>






