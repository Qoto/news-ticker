<?php
  function ticker_use_rss($file){
  // DOMElement->getElementsByTagName() -- Gets elements by tagname 
  // nodeValue : The value of this node, depending on its type. 
  // Load XML File. You can use loadXML if you wish to load XML data from a string 
  
  $objDOM = new DOMDocument(); 
  $objDOM->load($file);
  $item = $objDOM->getElementsByTagName("item"); 

  // for each item tag,get some values
  $post_id=0; //make up fake post_ids
  foreach( $item as $value ) { 
  	$post_id++;
	$title = $value->getElementsByTagName("title")->item(0)->nodeValue; 
	$link = $value->getElementsByTagName("link")->item(0)->nodeValue; 
	$description = $value->getElementsByTagName("description")->item(0)->nodeValue;

	$posts[$post_id]['post_title']=ticker_html_to_text($title);
	$posts[$post_id]['post_excerpt']=ticker_html_to_text($description);
	$posts[$post_id]['url']=$link;

	//limit the description length - much like for excerpts normally
	  $auto_excerpt_chars = get_option('ticker_auto_excerpt_length');
	  $s = $posts[$post_id]['post_excerpt'];
	  $s = substr($s, 0, $auto_excerpt_chars);
	  $s = substr($s, 0, strrpos($s, ' '));
	  $posts[$post_id]['post_excerpt'] = $s;
  } 
  return $posts;
}
?>