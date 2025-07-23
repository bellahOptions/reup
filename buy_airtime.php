<?php include 'includes/header.php'; include 'includes/nav.php'; ?>
<link rel="stylesheet" type="text/css" href="assets/styles/forms.css">
 <main class="main">
 	<div class="buy-airtime" id="airtime">
 	<h2 class="text-center">Buy Airtime/Data</h2>
 	<p class="text-center lead mb-5">Affordable Airtime & Data plans here</p>
 	<div class=" alert alert-danger"> Ensure you have completed kyc </div>
 	<div class=" alert alert-info"> 
 		<strong>Check airtime Balance:</strong>
 		MTN/GLO/Airtel/9Mobile = *310#  GLO 5x = #555*5# MTN Awuf = *559*14#
 	</div>
 	<div class="">
 	<!--FORM-->
 	<div class="airtime-form buy-form">
 		<form action="#" method="post">
    <div class="form-floating mb-3">
      <select type="text" class="form-control" id="floatingInput" placeholder="Payment Option">
      	<option class="form-control" value="">Wallet - ₦20,000</option>
      </select>
      <label for="floatingInput">Payment Option</label>
    </div>
 			<div class="form-floating mb-3">
     			<input type="number" class="form-control" id="floatingInput" placeholder="080xxxxxxxxx" required="">
      		<label for="floatingInput">Phone Number</label>
      		<small>Enter one number per line or separate with comma e.g. 09000998877, 09176235342</small>
    </div>
 			<div class="form-floating mb-3">
     			<input type="number" class="form-control" id="floatingInput" placeholder="080xxxxxxxxx" required="">
      		<label for="floatingInput">Airtime Value <strong class="text-info">(₦50 - ₦200,000)</strong></label>
    </div>
    <div class="form-floating mb-3">
      <select type="text" class="form-control" id="floatingInput" placeholder="Payment Option">
      	<option class="form-control" value="">No</option>
      </select>
      <label for="floatingInput">Auto Renew</label>
    </div>
       <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Bypass Number validator
      </label>
    </div>
    <button class="w-100 btn btn-lg reup-success" type="submit">Buy Now</button>
 		</form>
 	</div>
 </div>
 <!--BUY DATA -->
 <div class="buy-data" id="Data">
 	<h2 class="text-center">Buy Airtime/Data</h2>
 	<p class="text-center lead mb-5">Affordable Airtime & Data plans here</p>
 	<div class=" alert alert-info"> 
 		<strong>Check data Balance:</strong>
 		MTN/GLO/Airtel/9Mobile = *323# MTN SME = *323*3# MTN Corporate = *323*2*4#
 	</div>
 	<div class="">
 	<!--FORM-->
 	<div class="airtime-form buy-form">
 		<form action="#" method="post">
    <div class="form-floating mb-3">
      <select type="text" class="form-control" id="floatingInput" placeholder="Payment Option">
      	<option class="form-control" value="">Wallet - ₦20,000</option>
      </select>
      <label for="floatingInput">Payment Option</label>
    </div>
    <div class="form-floating mb-3">
      <select type="text" class="form-control" id="floatingInput" placeholder="Payment Option">
      	<option class="form-control" value="">MTN</option>
      	<option class="form-control" value="">AIRTEL</option>
      	<option class="form-control" value="">9MOBILE</option>
      	<option class="form-control" value="">GLO</option>
      </select>
      <label for="floatingInput">Mobile Network</label>
    </div>
 			<div class="form-floating mb-3">
     			<input type="number" class="form-control" id="floatingInput" placeholder="080xxxxxxxxx" required="">
      		<label for="floatingInput">Phone Number</label>
      		<small>Enter one number per line or separate with comma e.g. 09000998877, 09176235342</small>
    </div>
 			<div class="form-floating mb-3">
     			<input type="number" class="form-control" id="floatingInput" placeholder="080xxxxxxxxx" required="">
      		<label for="floatingInput">Airtime Value <strong class="text-info">(₦50 - ₦200,000)</strong></label>
    </div>
    <div class="form-floating mb-3">
      <select type="text" class="form-control" id="floatingInput" placeholder="Payment Option">
      	<option class="form-control" value="">No</option>
      </select>
      <label for="floatingInput">Auto Renew</label>
    </div>
       <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Bypass Number validator
      </label>
    </div>
    <button class="w-100 btn btn-lg reup-success" type="submit">Buy Now</button>
 		</form>
 	</div>
 </div>
 <?php include 'includes/footer.php';?>	