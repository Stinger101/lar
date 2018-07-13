@extends('layouts.site-app')

@section('content')
<div class="page-content">

  <section id="showcase">
<div class="container">
<h1>Healthcare Facilities</h1>
<p>Acquiring, analyzing and protecting digital medical information vital to providing quality patient care.</p>
</div>
</section>
<section id="newsletter">
<div class="container">
<h1>Subscribe to our Newsletter</h1>
<form style="border-color: #66cdaa">
  <input type="email" placeholder="Enter Email">
  <button type="submit" class="button_1">Subscribe</button>
</form>
</div>
</section>
<section id="boxes">
<div class="container">
<div class="box">
  <img src="http://localhost/hrks/assets/images/9.jpg">
  <h3>Accepted Insurance Plans</h3>
  <p>First things first, your life first; money later!</p>
</div>
<div class="box">
  <img src="http://localhost/hrks/assets/images/2.jpg">
  <h3>The Capitalest Medical Clinics in the Area</h3>
  <p>Values: Excellence through the sanctification of work; freedom and responsibility; ethical practice; personalized attention; subsidiarity; collegiality; life-long learning; service to society.</p>
</div>
<div class="box">
  <img src="http://localhost/hrks/assets/images/7.jpg">
  <h3>Doctors' Profiles</h3>
  <p>Providing you with the best doctors for the best care provision.</p>
</div>
</section>
</div>
@endsection
