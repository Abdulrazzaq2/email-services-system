@extends('template')
<!-- using template.blade.php as a general layout for all pages -->

@section("contents")
<!-- checking if the user sent an email from a redirect action session. Then send an alert -->
@if(session('res'))  
  <h2 class="big success">Good news. Email sent successfully.</h2>
@endif
<div class="main">
<h1 class="big">Welcome to email services system</h2> <br>
<a href="/write-email">
  <button class="btn">getting started</button>
</a>
</div>

@endsection