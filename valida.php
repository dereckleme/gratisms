<?php session_start(); ?>
<?
    if( $_SESSION['captcha'] == $_POST['capcha']){
        print "1";
    }else{
        print "0";
    }
?>