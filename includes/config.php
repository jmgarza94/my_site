<?php

//config.php

//enables page to know it's own name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');


//reCAPTCHA credentials here
//Here are the keys for the server: jgarza.net
$siteKey = "6LclwI8UAAAAAEhn7_MFVTA2kw6qhUhDdiclKTrx";
$secretKey = "6LclwI8UAAAAADdgp1EssQtRB3ZrFmMtcescmtbt";

//default in case pages don't have titles
$title = THIS_PAGE;

switch(THIS_PAGE){
   
    case 'index.php':
        $title = 'Joey\'s Home Page';
        $logo = "fa-home";
    break;
        
    case 'contact.php':
        $title = 'Joey\'s Contact Page';
        $logo = "fa-envelope";
    break;   
        
    case 'school.php':
        $title = 'Joey\'s School Web Projects';
        $logo = "fa-school";
    break;          
}

//place URL & labels in the array here for navigation:
$nav1['index.php'] = "Home Page";
$nav1['contact.php'] = "Contact Joey";
$nav1['school.php'] = "School Projects";


/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}



?>