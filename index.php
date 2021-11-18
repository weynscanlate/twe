<?php

include_once("includes/function.php");

$posts = get_posts();
$title = "Главная";

include_once("includes/header.php");
include_once("includes/tweet_form.php");
include_once("includes/posts.php");
include_once("includes/footer.php");
