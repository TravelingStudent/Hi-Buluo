<?php
/*
 * @Author Goddess of Learning
 * This is made my Goddess of Learning
 * It's open source for you!
 */

require "vendor/bin/loader.php";
if(empty($_GET["page"])){
  $Home = new Hi\Pages\Home;
  $Home->load();
}
