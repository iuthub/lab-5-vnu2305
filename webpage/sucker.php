<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Buy Your Way to a Better Education!</title>
    <link href="buyagrade.css" type="text/css" rel="stylesheet" />
</head>

<body>
<?php if($_SERVER["REQUEST_METHOD"]!='POST'){?>
    <h3>This page accepts only POST</h3>
    <?php } else { ?>
<h1>Thanks,sucker!</h1>

<p>
    Your information has been recorded.
</p>
    <dl>

        <dt>Name</dt>
        <dd>
            <?=$_POST["nameOfSucker"]?>
        </dd>

        <dt>Section</dt>
        <dd>
            <?=$_POST["section"]?>
        </dd>

        <dt>Credit Card</dt>
        <dd>
            <p><?=$_POST["creditCardNumber"]?>
                (<?=$_POST["creditCardType"]?>)</p>
        </dd>
    </dl>
    <?php
    $file = fopen("sucker.txt","a+");
    fwrite($file,$_POST["nameOfSucker"].";".$_POST["section"].";".$_POST["creditCardNumber"]."(".$_POST["creditCardType"].")\n");
    fclose($file);
    ?>
    <pre>
        <?php
        $file = fopen("sucker.txt","a+");
        print_r(fread($file,filesize("sucker.txt")));
        fclose($file);
        ?>
    </pre>
<?php } ?>
</body>
</html>
