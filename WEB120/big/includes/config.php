<?php

// this helps eliminate PHP date errors
// date_default_timezone_set('America/Los Angeles');

// this constant allows a page to know it's own url/name
define ('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// this allows us to dynamically change certain elements based on the page we are on
switch(THIS_PAGE)
{
    case 'Bindex.php':
        $title = 'Web Development Examples by Mike Gilson';
        $logo = 'fa fa-fw fa-home'; //change to this font awesome icon
        $PageID = 'Client Questionnaire';
        break;
    case 'flexbox.php':
        $title = 'Flexbox Research';
        $logo = 'fa fa-fw fa-cube';
        $PageID = 'Flexbox Research';
        break;
    case 'galleries.php':
        $title = 'Galleries Research';
        $logo = 'fa fa-fw fa-camera-retro';
        $PageID = 'Galleries';
        break;
    case 'calendar.php':
        $title = 'Responsive Google Calendar';
        $logo = 'fa fa-fw fa-calendar';
        $PageID = 'Google Calendar';
        break;
    case 'map.php':
        $title = 'Responsive Google Map';
        $logo = 'fa fa-fw fa-map-o';
        $PageID = 'Google Map';
        break;
    case 'youtube.php':
        $title = 'Youtube';
        $logo = 'fab fa-youtube';
        $PageID = 'Google Youtube';
        break;
    case 'shoppingcarts.php':
        $title = 'Shopping Carts Research';
        $logo = 'fa fa-fw fa-shopping-basket';
        $PageID = 'Shopping Carts';
        break;
    case 'siteapp.php':
        $title = 'Responsive vs. Mobile Research';
        $logo = 'fab fa-html5';
        $PageID = 'Responsive Sites vs. Mobile Apps';
        break;
    case 'webcam.php':
        $title = 'Live Web Cameras';
        $logo = 'fa fa-fw fa-eye';
        $PageID = 'Live Web Cameras';
        break;
        
    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = '';
}

?>