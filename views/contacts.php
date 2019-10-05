
<h1>Contacts</h1>
<ul>

<?php foreach ($ph as $phone):?>
    <?php foreach ($op as $operator=>$valop):?>
<? if (strpos($phone, $valop) !== false):?>
            <li> <?=$phone."-"?><span><?=$operator?></span></li>

    <?endif;?>
        <?php endforeach;?>
<?php endforeach;?>

</ul>
<link rel="stylesheet" href="/resources/css/contacts.css">