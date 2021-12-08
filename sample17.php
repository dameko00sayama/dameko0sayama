<?php 

$xmltree = simplexml_load_file('rss.xml');
echo $xmltree->channel->title;

?>