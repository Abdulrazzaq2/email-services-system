@extends('template')
<!-- using template.blade.php as a general layout for all pages -->
@section("contents")
<h2 class="big">Fill the following data to send an email</h2>        
<form action="/store" method="post">
  @csrf
  <div style="display: flex;flex-direction: column; ">
    <input type="email" placeholder="Enter receiver's email" class="input" name="receiver" id="receiver" >
    <input type="text" placeholder="Enter title" name="subject" class="input" id="subject" >
    <textarea name="body" id="body" cols="30" class="input" rows="10" placeholder="Enter your message"></textarea>
    <button type="submit" class="btn2" >Send email</button>
  </div>
</form>
@endsection