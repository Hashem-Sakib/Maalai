@extends('layout.navbar')

@section('title')
Login
@endsection
@section('scripts')
@endsection
@section('content')
<br>
<br>
<br>
<br><br><br>
<h1 style="text-align:center; color:rgb(153, 13, 74); text-shadow: 2px 2px 2px white; font-family: Times New Roman;" ><b>Malai Administration</b></h1>
<br><br><br>
  <div >
    <form action="" method="post">
      <br>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Username" required="required" name="username">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" required="required" name="password">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" name="submit" style="color:white;font-family: Times New Roman;">Log in</button>
      </div>
      <div class="clearfix">
        <label class="float-left form-check-label" style="color:White"><input type="checkbox"> Remember me</label>
      </div>
    </form>
    <a href="home" class="btn btn-success float-left" style="color:white;font-family: Times New Roman;">Back to Home</a>
     
  </div>
@endsection
