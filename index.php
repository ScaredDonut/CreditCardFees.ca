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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />
		<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" />
		<link rel="stylesheet" href="https://cdn.datatables.net/select/1.4.0/css/select.dataTables.min.css" />
		<link href="https://cdn.datatables.net/searchpanes/2.0.2/css/searchPanes.dataTables.min.css" rel="stylesheet" />		

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
              <h1 class="mb-4 display-3 fw-bold lh-sm">Welcome</h1>
              <p class="mt-3 mb-4 fs-1">Just a simple website to show you a list of all the stores <br class="d-none d-lg-block" />that will charge a Surchargee fee in Canada if you use a credit card.</p>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
     <!-- <section class="py-7">

        <div class="container">
          <div class="row">
            <div class="col-12 mx-auto align-items-center text-center">
              <p class="mb-4">Trusted by companies like</p>
            </div>
          </div>
          <div class="row align-items-center justify-content-center justify-content-lg-around">
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 px-md-0 mb-5 mb-lg-0 text-center"><img src="assets/img/gallery/company-1.png" alt="" /></div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 px-md-0 mb-5 mb-lg-0 text-center"><img src="assets/img/gallery/company-2.png" alt="" /></div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 px-md-0 mb-5 mb-lg-0 text-center"><img src="assets/img/gallery/company-3.png" alt="" /></div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 px-md-0 mb-5 mb-lg-0 text-center"><img src="assets/img/gallery/company-4.png" alt="" /></div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 px-md-0 mb-5 mb-lg-0 text-center"><img src="assets/img/gallery/company-1.png" alt="" /></div>
          </div>
        </div>


      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-8" id="listOfBizes">

        <div class="container">
          <div class="row flex-center">
            <div class="col-lg-9">
              <table id="feeTable" class="table table-striped" cellspacing="0" width="100%">
					  <thead>
						<tr>
								<th>Name</th>
								<th>Type</th>
								<th>City</th>
								<th>Province</th>
								<th>Fee</th>
								<th>Website</th>
						</tr>
					  </thead>
					</table>
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
	
    <!--jQuery library file -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  
    <!--Datatable plugin JS library file -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/searchpanes/2.0.2/js/dataTables.searchPanes.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/select/1.4.0/js/dataTables.select.min.js"></script>
			
	<script type="text/javascript" class="init">
$(document).ready(function() {
  // Create a new DataTable object
  table = $('#feeTable').DataTable({
       ajax: {
         url: "https://admin.creditcardfees.ca/api/businesses?populate=additionalInformation,businessAddress,listOfCreditCardFees,categories",
       },
       columns: [
           { data: 'attributes.name' },
		   { data: 'attributes.categories.data.0.attributes.name' },
		   { data: 'attributes.businessAddress.0.city' },
		   { data: 'attributes.businessAddress.0.province' },
		   { data: 'attributes.listOfCreditCardFees.0.creditCardFeeAmount' },
		   { data: 'attributes.additionalInformation.website' }
         ],
		dom: 'Plfrtip',
		searchPanes: {
			  "viewTotal": true
		},		
        columnDefs: [
            {
                searchPanes: {
                    show: true
                },
                targets: [2]
            }
        ],
		select: true,
		lengthChange: false,
		responsive: true		
       })
});
</script>		
  </body>

</html>