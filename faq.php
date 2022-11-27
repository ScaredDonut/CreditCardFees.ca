<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="title" content="Credit Card Surcharge Fees">
		<meta name="description" content="CreditCardFees is a public database with a free API to list all businesses in Canada that charge/will charge a fee for using a credit card in Canada">
		<meta name="keywords" content="credit card fees, credit card, Surchargee fee, Surchargee canada, card fees, Surchargee fees, Surchargee fee databae, Surchargee fee databae canada, credit card fees canada, card fees canada, credit fee canada, canada Surchargee, credit card fee database, Surchargee api, credit card api, credit card fee api">
		<meta name="robots" content="index, follow">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="language" content="English">
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Canada Credit Card Surcharge Fees</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
		<?php include_once "inc/header.php"; ?>
      <section class="py-0" id="home">
        <div class="bg-holder" style="background-image:url(assets/img/illustrations/hero-bg.png);background-position:bottom;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container position-relative">
          <div class="row align-items-center py-8">
            <div class="col-md-5 col-lg-6 order-md-1 text-center text-md-end"><img class="img-fluid" src="assets/img/phoneapp.png" width="350" alt="" /></div>
            <div class="col-md-7 col-lg-6 text-center text-md-start"><!--<span class="badge bg-light rounded-pill text-dark align-items-center d-flex flex-row-reverse justify-content-end mx-auto mx-md-0 ps-0 w-75 w-sm-50 w-md-75 w-xl-50 mb-3">#1 Editiors Choice App of 2020<img class="img-fluid float-start me-3" src="assets/img/illustrations/arrow-right.png" alt=""/>--></span>
              <h1 class="mb-4 display-3 fw-bold lh-sm">F.A.Q.</h1>
              <p class="mt-3 mb-4 fs-1">This page is desgined to answer any questions that you might have regarding the surcharge fees and/or the website in general.</p>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
				<?php 

				//Fee Related CURL
			$FeesFAQCurl = curl_init(); //Initializes curl
			curl_setopt($FeesFAQCurl, CURLOPT_URL, 'https://admin.creditcardfees.ca/api/faqs?filters[FAQType][$eq]=fees');
			curl_setopt($FeesFAQCurl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($FeesFAQCurl, CURLOPT_HTTPHEADER, [
				'Content-Type: application/json'
			]); // Sets header information for authenticated requests

			$getFeesFAQ = curl_exec($FeesFAQCurl);
			curl_close($FeesFAQCurl);
			
			$decodeFeesFAQ = json_decode($getFeesFAQ, true);


			//Website Related curl_close
			$WebsiteFAQCurl = curl_init(); //Initializes curl
			curl_setopt($WebsiteFAQCurl, CURLOPT_URL, 'https://admin.creditcardfees.ca/api/faqs?filters[FAQType][$eq]=website');
			curl_setopt($WebsiteFAQCurl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($WebsiteFAQCurl, CURLOPT_HTTPHEADER, [
				'Content-Type: application/json'
			]); // Sets header information for authenticated requests

			$getWebsiteFAQRes = curl_exec($WebsiteFAQCurl);
			curl_close($WebsiteFAQCurl);
			
			$getWebsiteFAQ = json_decode($getWebsiteFAQRes, true);
			
			$colorOptions = ["primary", "secondary", "success", "danger", "warning", "info", "dark"];
			
			?>  
	  
	  
      <section class="py-8" id="faq">

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 text-center mb-3">
              <h6 class="fw-bold fs-4 display-3 lh-sm mb-3">Frequently asked questions</h6>
              <p class="mb-5">The rise of mobile devices transforms the way we consume information entirely and the world's most elevant channels such as Facebook.</p>
            </div>
          </div>
          <div class="row flex-center">
            <div class="col-lg-9">
              <div class="accordion" id="accordion">
			  <!-- -->
			  <?php foreach($decodeFeesFAQ['data'] as $getFeeFAQPlain) { ?>
                <div class="accordion-item mb-2">
                  <h2 class="accordion-header" id="heading<?php echo $getFeeFAQPlain['id']; ?>">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $getFeeFAQPlain['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $getFeeFAQPlain['id']; ?>"><span class="mb-0 fw-bold text-start fs-1 text-1000"><?php echo $getFeeFAQPlain['attributes']['FAQTitle']; ?></span></button>
                  </h2>
                  <div class="accordion-collapse collapse show" id="collapse<?php echo $getFeeFAQPlain['id']; ?>" aria-labelledby="heading<?php echo $getFeeFAQPlain['id']; ?>" data-bs-parent="#accordion">
                    <div class="accordion-body bg-100"><?php echo $getFeeFAQPlain['attributes']['FAQText']; ?></div>
                  </div>
                </div>
              <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->
	<?php include_once "inc/getApp.php"; ?>
      <!-- ============================================-->
      <!-- <section> begin ============================-->
     <?php include_once "inc/footer.php"; ?>
      <!-- <section> close ============================-->
      <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400&amp;display=swap" rel="stylesheet">
  </body>

</html>