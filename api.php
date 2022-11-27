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
              <h1 class="mb-4 display-3 fw-bold lh-sm">API</h1>
              <p class="mt-3 mb-4 fs-1">API access to our data.</p>
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
				<p>
				<h3>Normal People API</h3>
				This page is desgined to assist you in accessing the API to CreditCardFees.ca.
				<br /> Make sure to use <code>businesses?populate=additionalInformation,businessAddress,categories</code> at the end of each API GET request to get the base dataset.
				<br /><br /><b>Swagger URL:</b> <a href ="https://admin.creditcardfees.ca/documentation/v1.0.0#/">https://admin.creditcardfees.ca/documentation/v1.0.0#/</a>
					  <br /><b>API URL:</b> https://admin.creditcardfees.ca/api
				<br /><br /> Please make sure to respect the API and try to minimize your calls by using populate and field when needed.
				<br /><br /> You can also populate specific requests like just hours with <code>?populate=openingHours</code>. We also have media that you can access with <code>?populate=logo</code> and <code>?populate=media</code>.
				<br /><br /> Media is for pictures of receipts and other general media of the specific store/restaurant and logo is the logo.
				<br /><br /> You can also use <code>?fields=name</code> just to get a specific field, you can also populate the field ex; <code>fields=name&populate=logo</code>
				<br /><br />No auth for GET requests. There is auth for POST/PUT/DELETE requests, however. If you'd like to have access to those you'll need to auth yourself via the API. Further info below.
				<br /><br /> All available endpoints: <code>populate</code>, <code>fields</code>, <code>sort</code> (desc, abc, createdAt, etc), <code>filter</code> (?filter=[fieldName][operator])
				</p>
				<hr />
				<h3>Registration (Local Auth)</h3>
				<p>
				You'll want to send an API Post request to <code>api/auth/local/register</code> (currently only local auth is allowed)..<br />
				You'll need to send the following body:
				<code><br />
				{<br />
				  "username": "Your username",<br />
				  "email": "youremail@newemail.com",<br />
				  "password": "Test1234"<br />
				}<br />
				</code>
				Make sure to save your JWT auth to have the ability to send POST/PUT requests. Please note that the JWT expires so you'll want to use <code>api/auth/local</code> to login.<br />
				</p>
				<hr />
				<h3>Registration (Google Auth)</h3>
				You'll want to use <code>api/connect/google</code> for Google Authentication. When a user logs in using their Google account you'll receive a callback with the following JSON response:
				<code><br />
				{<br />
					"jwt": "JWT...", [str]<br />
					"user": {<br />
						"id": id, [int]<br />
						"username": "username", [str]<br />
						"email": "email", [str]<br />
						"provider": "google", [str]<br />
						"confirmed": true, [bool] (this is subject to change for email valdiation purposes, currently email validation is not required).<br />
						"blocked": false, [bool]<br />
						"createdAt": "dateZ", [str]<br />
						"updatedAt": "dateZ", [str]<br />
					}<br />
					</code>
				<hr />
				<h3>Registration (Continued...)</h3>
				<p>
				Once an account is created a user will receive eleveated permissions that will allow them to submit businesses directly to the database without using the business submission form. You'll obviously need to send the data via the API. <br /><br />
				However, with base permissions they will not be able to create new categories, modify categories, modify existing businseses, etc. If a user requires these permissions they'll need to use the contact form for further details.
				</p>
				<hr /><br />
				<p>
				Feel free to integrate this into your application so your users can use the app to post/update businesses.
				<h3>Available Operators:</h3>
				</p>
				<table class="table table-dark">
   <thead>
      <tr>
         <th>Operator</th>
         <th>Description</th>
      </tr>
   </thead>
   <tbody>
      <tr>
         <td><code>$eq</code></td>
         <td>Equal</td>
      </tr>
      <tr>
         <td><code>$eqi</code></td>
         <td>Equal (case-insensitive)</td>
      </tr>
      <tr>
         <td><code>$ne</code></td>
         <td>Not equal</td>
      </tr>
      <tr>
         <td><code>$lt</code></td>
         <td>Less than</td>
      </tr>
      <tr>
         <td><code>$lte</code></td>
         <td>Less than or equal to</td>
      </tr>
      <tr>
         <td><code>$gt</code></td>
         <td>Greater than</td>
      </tr>
      <tr>
         <td><code>$gte</code></td>
         <td>Greater than or equal to</td>
      </tr>
      <tr>
         <td><code>$in</code></td>
         <td>Included in an array</td>
      </tr>
      <tr>
         <td><code>$notIn</code></td>
         <td>Not included in an array</td>
      </tr>
      <tr>
         <td><code>$contains</code></td>
         <td>Contains</td>
      </tr>
      <tr>
         <td><code>$notContains</code></td>
         <td>Does not contain</td>
      </tr>
      <tr>
         <td><code>$containsi</code></td>
         <td>Contains (case-insensitive)</td>
      </tr>
      <tr>
         <td><code>$notContainsi</code></td>
         <td>Does not contain (case-insensitive)</td>
      </tr>
      <tr>
         <td><code>$null</code></td>
         <td>Is null</td>
      </tr>
      <tr>
         <td><code>$notNull</code></td>
         <td>Is not null</td>
      </tr>
      <tr>
         <td><code>$between</code></td>
         <td>Is between</td>
      </tr>
      <tr>
         <td><code>$startsWith</code></td>
         <td>Starts with</td>
      </tr>
      <tr>
         <td><code>$endsWith</code></td>
         <td>Ends with</td>
      </tr>
      <tr>
         <td><code>$or</code></td>
         <td>Joins the filters in an "or" expression</td>
      </tr>
      <tr>
         <td><code>$and</code></td>
         <td>Joins the filters in an "and" expression</td>
      </tr>
   </tbody>
</table>
<p>You can find more info regarding filters and locales <a href="https://docs.strapi.io/developer-docs/latest/developer-resources/database-apis-reference/rest/filtering-locale-publication.html#filtering">HERE</a></p>
<hr />
<h3>GraphQL (Aka Not normal people API)</h3>
<p>I don't get GraphQL. Literally not even a single thing but I just set it up for people that do. You can access it by using the /graphql endpoint instead of /api. (<a href="https://admin.creditcardfees.ca/graphql">https://admin.creditcardfees.ca/graphql</a>)</p>
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
  </body>

</html>