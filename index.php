<!doctype html>
<html lang="en">
  <head>
  <link rel="icon" href="corona_icon.svg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Covid-Simple Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<!--Created by KushanTharaka97-->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/pricing/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>

  <?php
      $content=file_get_contents("https://hpb.health.gov.lk/api/get-current-statistical");
      $result =json_decode($content);
     
      $local_new_cases=number_format($result -> data ->local_new_cases)."<br>";
      $global_new_cases=number_format($result -> data ->global_new_cases)."<br>";
      $local_active_cases=number_format($result -> data ->local_active_cases)."<br>";
      $local_total_cases=number_format($result -> data ->local_total_cases)."<br>";
      $global_total_cases=number_format($result -> data ->global_total_cases)."<br>";
      $local_deaths=number_format($result -> data ->local_deaths)."<br>";
      $global_deaths=number_format($result -> data ->global_deaths)."<br>";
      $local_recovered=number_format($result -> data ->local_recovered)."<br>";
      $global_recovered=number_format($result -> data ->global_recovered)."<br>";

      $local_active_cases=number_format($result -> data ->local_active_cases)."<br>";
      $color;

      if($result -> data ->local_active_cases> 1000){
        $color="red";
      }else if($result -> data ->local_active_cases> 500){
        $color="orange";
      }else{
        $color="green";
      }

      // echo "local_new_cases: ";
      // echo $result -> data ->local_new_cases;
      // "<br>";
      // echo "local_active_cases: ";
      // echo $result -> data ->local_active_cases;
      // "<br>";
      // echo "local_total_cases: ";
      // echo $result -> data ->local_total_cases;
      // "<br>";
      // echo "local_deaths: ";
      // echo $result -> data ->local_deaths;
      // "<br>";

      //print_r( $result);
  ?>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Covid Details SriLanka</h5>
  
   

</div>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4" >COVID-19 situation in Srilanka</h1>

  <p class="lead">
    This data gathered from <b>"Health Promotion Bureau"</b> at : 
    <b><?php echo $result -> data ->update_date_time; ?> </b> in local time.
  </p>

  <h5 class="my-0 mr-md-auto font-weight-normal" style="text-align:center;">
    <b>Srilankan Active COVID-19 Patients: 
      <?php 
          echo $local_active_cases;
      ?>
    </h5>
</div>

<div class="container">
  <div class="card-deck mb-3 text-center">

  <!-- ------------------------------------- -->
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">New Cases Reported</h4>
      </div>

      <div class="card-body">
        <h1 class="card-title pricing-card-title">
        <?php  echo $local_new_cases; ?>  
        <small class="text-muted">/local</small>
        </h1>
        <br>
        <h1 class="card-title pricing-card-title">
        <?php  echo $global_new_cases; ?>  
        <small class="text-muted">/world</small>
        </h1>
       
      </div>
    </div>
 <!-- ------------------------------------- -->
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Total Cases Reported</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">
        <?php  echo $local_total_cases; ?>  
        <small class="text-muted">/Local</small>
        </h1>
        <br>
        <h1 class="card-title pricing-card-title">
        <?php  echo $global_total_cases; ?>  
        <small class="text-muted">/Global</small>
    </h1>

       
      </div>
    </div>
<!-- ------------------------------------- -->
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Recovered</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">
        <?php  echo $local_recovered; ?> 
          <small class="text-muted">/local</small>
        </h1>
        <br>
        <h1 class="card-title pricing-card-title">
        <?php  echo $global_recovered; ?> 
          <small class="text-muted">/global</small>
        </h1>
     
      </div>
    </div>

  <!-- ------------------------------------- -->
      
  <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Deaths</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">
        <?php  echo $local_deaths; ?> 
          <small class="text-muted">/local</small>
        </h1>
        <br>
        <h1 class="card-title pricing-card-title">
        <?php  echo $global_deaths; ?> 
          <small class="text-muted">/global</small>
        </h1>
     
      </div>
    </div>

  <!-- ------------------------------------- -->
  </div>

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
    
   
      created by <a href="https://www.kushantharaka.tk/">KushanTharaka97</a>
     
      </div>
    </div>
  </footer>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

