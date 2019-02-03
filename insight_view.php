<!-- Emails use the XHTML Strict doctype -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <!-- The character set should be utf-8 -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width"/>
    <!-- Link to the email's CSS, which will be inlined into the email -->
      <!-- <link rel="stylesheet" href="assets/css/foundation-emails.css"> -->
    <link rel="stylesheet" href="css/mine-styles.css">
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    <style>
      /*
      Name: basic-email-test
      Description: Email Confirmation Template
      Authors: Micaela Linda Villani 
      Tags: Template Boilerplate HMTL CSS PRESTASHOP
      */

      /* Fonts
      ---headings
      font-family: 'Brandon Regular', sans-serif;
      font-family: 'Brandon Medium', sans-serif;
      --paragraphs
      font-family: 'Brandon Light', sans-serif;
      */
      /* FONTS  */
      @font-face {
        font-family: Brandon Medium;
        src: './fonts/Brandon_medium.otf';
      }

      @font-face {
        font-family: Brandon Light;
        src: './fonts/Brandon_light.otf';
      }

      @font-face {
        font-family: Brandon Regular;
        src: './fonts/Brandon_reg.otf';
      }

      /* PAGE STYLES */
      *:before *:after {
        box-sizing: border-box;
      }

      html, body { 
        padding: 0;
        margin: 0; 
        color: #1A1919;
        font-size: 18px;
        min-height: 866px;
        max-height: 866px;
        min-width: 834px;
        max-width: 834px;
      }

      /* WHOLE ORDER CONTAINER */
      .main-container {
        margin: 0;
        text-align: center;
        background-color: #EFEFEE;
        padding: 0.1em 0.1em;
      }

      /* LOGO  */
      .logo {
        font-family: 'Brandon Regular', sans-serif;
        letter-spacing: 0.17em;
        color: #1A1919;
      }

      .light-logo-letter {
        font-family: 'Brandon Light', sans-serif;
        font-weight: 100;
      }

      /* INSIDE CONTAINER */
      .order-container {
        background-color: white;
        padding: 1em 1em 0 1em;
        margin: 1em;
      }

      p {
        font-family: 'Brandon Light', sans-serif;
        font-weight: 100;

      }

      td,th {
        font-size: 1em;
        font-family: 'Brandon Light', sans-serif;
        font-weight: 100;

        letter-spacing: 0.05em;
      }

      .second-heading {
        font-family: 'Brandon Medium', sans-serif;
        text-transform: uppercase;
        letter-spacing: 0.05em;
      }

      .details {
        margin: -1em 3em 0 3em;
        padding-bottom: 1em;
      }

      /* TABLE  */
      /* RECAP ORDER TABLE */
      .table-container {
        margin: 0em 2em 0 2em;
      }

      .order-recap {
        border-top: 0.01em solid #1B1A1A;
        font-weight: 700; 
        padding: 1em 1em;
        text-align: left;
        text-transform: uppercase;
        width: 100%;
      }

      .order-recap-row {
        margin: 1em;
      }

      .table-h {
        padding: 0.2em;
        font-family: 'Brandon Medium', sans-serif;
        font-weight: 700;  
      }

      .table-data {
        font-family: 'Brandon Light', sans-serif;
        font-weight: 100;
        text-align: left;
        width: 32%;
      }

      /* ORDER DETAILS TABLE */
      table.order-details {
        border-collapse: collapse;
        padding: 0em 1em;
        text-align: left;
        text-transform: initial; 
        height: 240px;
        width: 100%;
      }

      .details-h {
        border-top: 0.01em solid #1B1A1A;
        border-bottom: 0.01em solid #1B1A1A;
        font-family: 'Brandon Light', sans-serif;
        font-weight: 100;
        padding-left: 0.8em;
      }

      .details-h-one {
        padding-left: 1.5em;
      }

      th:nth-child(2){
        padding-left: 1.9em;
      }

      .model {
        padding-left: 1.5em;
      }

      .quantities {
        padding-right: 1em;
      }

      tr.first-item-row {
        border-bottom: 0.01em solid #C3C4C3;
        height: 90px;
      }

      td.sold-item-values {
        padding-left: 1.3em;
      }

      td.sold-item-quantity {
        padding-left: 2.5em;
      }

      td.sold-item-price {
        padding-left: 2em;
      }
      
      .xs-img {
        height: 4em;
      }

      .first-img {
        margin-right: 1em;
      }

      .second-img{
        margin-top: 1em;
      }

      .product-number {
        color: #8A8B8A;
        font-weight: 100;
      }

      tr.second-item-row {
        border-bottom: 0.01em solid #C3C4C3;
        height: 90px;
      }

      /* PRODUCT RECAP  */
      .payment-container {
        margin: 0em 2em 0 2em;
        height: 10em;
      }

      .payment-recap {
        float: left;
        margin-top: 0.8em;
      }

      .col-1 {
        text-align: left;
        margin-left: 62%;
        font-size: 1em;
      }

      .col-2 {
        text-align: right;
        margin-left: 10%;
      }

      .payment-p {
        margin: 0.5em 0;
        letter-spacing: 0.08em;
      }

      .total {
        font-family: 'Brandon Medium', sans-serif;
      }

      /* DELIVERY ADDRESS + INVOICE DETAILS */
      .delivery-container {
        margin: 0em 2em 0 2em;
        border-top: 0.01em solid #1B1A1A;
        border-bottom: 0.01em solid #1B1A1A;
        height: 13em;
      }

      .delivery-col-left {
        float: left;
        text-align: left;
        width: 43%;
        margin-left: 1em;
      }

      .delivery-heading {
        font-family: 'Brandon Medium', sans-serif;
        font-weight: 500;
      }

      .invoice-col-right {
        float: left;
        text-align: left;
        width: 43%;
        margin-left: 10%;
      }

      /* EXTRA ACTIONS */
      .extra-actions-container {
        margin: 0em 2em 0em 2em;
        padding-bottom: 0.5em;
      }

      .order-state {
        font-family: 'Brandon Light', sans-serif;
        font-size: 14px;
        background-color: black;
        color: white;
        text-decoration: none;
        padding: 0.4em 11em;
      }

      .download-order {
        font-family: 'Brandon Light', sans-serif;
        font-weight: 400;
        font-size: 14px;
        background-color: black;
        color: white;
        text-decoration: none;
        padding: 0.4em 13.45em;
      }

      /* RECOMMENDATIONS */
      .recommendations-container {
        margin: -1em 1em -1em 1em;
        padding: 0 1em;  
        background-color: #FBF9F9;
        height: 17em;
      }

      .recommendations-col {
        float: left;
        width: 33%;
        padding: 2em 0 ;
      }

      .recommendations-img {
        height: 8em;
      }

      .recommendations-h {
        font-family: 'Brandon Medium', sans-serif;
        font-weight: 500;
        margin-bottom: -1em;
      }

      /* GOODBYE IMAGE */
      .goodbye-img-container {
        text-align:center;
      }

      .goodbye-img {
        margin: -0.1em 0;
        height: 607px;
      }

      .goodbye-p {
        font-family: 'Brandon Light', sans-serif;
        font-weight: 600;
        font-size: 1em;
        letter-spacing: 0.1em;
        color: white;
        position: relative;
        bottom: 18em;
        right: 2%;
        margin: auto;
      }

      /* SOCIAL LINKS */
      .social-links-container {
        padding: 1em;
        margin-top: -2em;
      }
      .social-logo {
        height: 2em;
        padding: 1em 0.3em;
      }

      a {
        text-decoration: none;
      }
    </style>
  </head>

  <body>

    <!-- WHOLE ORDER CONTAINER -->
    <div class="main-container">
      <a href="https://www.pdpaola.com/es/">
        <h2 class="logo"> P 
        <span class="light-logo-letter"> Facebook</span> 
        Insights Data</h2>    
      </a>
      <!-- INSIDE CONTAINER -->
      <div class="order-container">
        <p> ¡Hola [FIRSTNAME]! </p> 
        <h2 class="second-heading">facebook dat </h2>
        <p class="details">facebook insight data </p>
        <!-- DELIVERY ADDRESS + INVOICE DETAILS -->
        <div class="delivery-container">
          <!-- delivery column-->
          <div class="delivery-col-left">
                </p>
                <?php foreach ($insights as $insight): 
                  $like =''; $hearts=''; $astoni =''; $haha ='';
                if(strtolower($insight['name']) == "page_actions_post_reactions_like_total") $like ="em em---1";
                if(strtolower($insight['name']) == "page_actions_post_reactions_love_total") $hearts ="em em-hearts";
                if(strtolower($insight['name']) == "page_actions_post_reactions_wow_total ") $astoni ="em em-astonished";
                if(strtolower($insight['name']) == "page_actions_post_reactions_haha_total") $haha ="em em-laughing";
                if(strtolower($insight['name']) == "page_actions_post_reactions_like_total") $comments ="";
                  ?>
                <?php if(strtolower($insight['period'])== "day"){

                 echo '<h4 class="delivery-heading">'.$insight['name']."  DAY".'</h4>';

                  echo '<h4 class="delivery-heading"><i class="'.$like.' '.$hearts.' '.$astoni.' '.$haha.'"></i>'.$insight['values'][0]['value'].'</h4>';
              } ?>
                <?php if(strtolower($insight['period'])== "week"){
                  echo '<h4 class="delivery-heading">'.$insight['name']."  WEEK".'</h4>';

                   echo '<h4 class="delivery-heading"><i class="'.$like.' '.$hearts.' '.$astoni.' '.$haha.'"></i>'.$insight['values'][0]['value'].'</h4>';   
              } ?>
                <?php if(strtolower($insight['period'])== "days_28"){
                  echo '<h4 class="delivery-heading">'.$insight['name']."  DAYS 28".'</h4>';

                  echo '<h4 class="delivery-heading"><i class="'.$like.' '.$hearts.' '.$astoni.' '.$haha.'"></i>'.$insight['values'][0]['value'].'</h4>';
                      
              } ?>
                

                <?php endforeach;  ?>
            
          </div>
          <!-- invoice column-->
        </div>

        <!-- EXTRA ACTIONS -->
      </div>
      
      <!-- RECOMMENDATIONS -->
      <!-- GOODBYE IMAGE -->
      <div class="goodbye-img-container">
        <p class="goodbye-p"> SEE YOU SOON. </p>
      </div>

      <!-- SOCIAL LINKS -->
      <div class="social-links-container">
        <!-- instagram -->
        <a href="https://www.instagram.com/../" class="instagram-logo-link">
          <img src="./images/instagram-logo.png" class="social-logo"/>
        </a>
        <!-- facebook -->
        <a href="https://www.facebook.com/.." class="facebook-logo-link">
          <img src="./images/facebook-logo.png" class="social-logo"/>
        </a>

        </div>
    </div>
  </body>
</html> 