<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?php echo $title;?></title>
    </head>
    <body>
        <div class="header">
            <h1>STORES</h1>
            <div class="header-right">
                <span><a href="#"><?php if(isset($_COOKIE["user"])){echo $_COOKIE["user"];} ?></a> | <?php //echo $_COOKIE["attach"];?></span>
                <span><a href="#"><?php if(isset($_COOKIE["user"])){echo $_COOKIE["member"];} ?></a></span>
            </div>
            <div class="clear"></div>
        </div>
