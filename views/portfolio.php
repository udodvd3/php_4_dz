<h1>PORTFOLIO</h1>

    <?php
    $count = 0;

    foreach ($porto as $myworks):?>

    <img data-wow-duration="1s" data-wow-delay="0.<?= $count ?>s" class="wow bounceInUp myPortfo"
             src="/resources/img/<?= $myworks ?>"/>


    <?php
    $count++;
    endforeach;?>


<link rel="stylesheet" href="/resources/css/portfolio-style.css">