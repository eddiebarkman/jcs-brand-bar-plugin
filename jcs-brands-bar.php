<?php

/*

Plugin Name: JCS Brands Bar

Plugin URI: https://jcsmarketinginc.com/

Description: This plugin ads the JCS Brands to the top of the website.

Version: 1.1

Author: Eddie Barkman


*/


function prefix_footer_code() { ?>



<!--HTML Code goes here-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@900&family=Cantata+One&family=Copse&family=Roboto+Condensed:wght@300;700&display=swap" rel="stylesheet">
  <style>
    * {
      padding: 0;
      margin: 0;
    }

    #JCSBrandBar {
      width: 100%;
      height: 2em;
      top: 0;
      z-index: 999999;
      background-color: #282C34;
      text-align: center;
    }

    #JCSBrandBar ul {
      color: #fff;
    }

    #JCSBrandBar li {
      display: inline;
      margin-left: 1em;
      margin-right: 1em;
      padding: 0.25em;
      color: #fff;
      user-select: none;
      border-radus:1em;
    }

    #JCSBrandBar li:hover {
      background-color: #fff;
      color:#000;

    }

    #JCSBrandBar a{
  text-decoration:none;
    }

    @media only screen and (max-width: 600px) {
      #JCSBrandBar {
  display:none;
      }
    }

  </style>

  <div id="JCSBrandBar">
    <ul>
      <a href="https://jcsmarketinginc.com" target="_blank"><li style="font-family: 'Roboto Condensed', sans-serif; text-transform:uppercase;"><strong style="background-color:#BE1D2D; padding-left:0.25em; padding-right:0.25em;">JCS</strong> Marketing, Inc.</li></a> |
      <a href="https://wcngg.com" target="_blank"><li style="font-family: 'Cantata One', serif; text-transform:uppercase; font-weight:900;">West Coast Nut</li></a> |
      <a href="https://progressivecrop.com" target="_blank"><li style="font-family: 'Alegreya', serif;">Progressive Crop Consultant</li></a> |
      <a href="https://grapeandwinemag.com" target="_blank"><li style="font-family: 'Roboto Condensed', sans-serif;">Grape <span style="font-family: 'Alegreya', serif;">&</span> Wine Magazine</li></a> |
      <a href="https://myaglife.com" target="_blank"><li style="font-family: 'Copse', serif;text-transform:uppercase;"><span style="font-family: 'Roboto Condensed', sans-serif;">My</span><strong style="font-size:1.25em; font-family: 'Alegreya', serif; color:#529046;">AG</strong>Life</li></a> |
      <a href="https://myaglife.com/faces" target="_blank"><li style="font-family: 'Copse', serif;text-transform:uppercase;"><span style="font-family: 'Roboto Condensed', sans-serif;">FACES</span></li></a>


    </ul>
  </div>
<!--End HTML CODE-->

<?php } 
add_action( 'wp_head', 'prefix_footer_code' );
?>
