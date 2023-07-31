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
<h1 style="text-align:center; color:rgb(9, 129, 234);  font-family: Times New Roman;" ><b>Malai Administration</b></h1>
<br><br><br>
  <div >
    <form class="inline" action="" method="">
      <br>
      <div class=input-icons>
      <div class="form-group">
        <i class="fa fa-user icon"></i>
        <input type="text" class="form-control" placeholder=" Username" required="required" name="username">
      </div>
      <div class="form-group">
        <i class="fa fa-key icon"></i>
        <input type="password" class="form-control" placeholder=" Password" required="required" name="password">
      </div>
      <div class="form-group">
        <a href="home" class="btn  btn-block btn-primary" style="color:white;font-family: Times New Roman;">Login</a>
        {{-- <button type="submit" class="btn  btn-block btn-primary" name="submit" style="color:black;font-family: Times New Roman;box-shadow:0 0 15px 4px rgba(56, 55, 55, 0.06);border-radius:30px;">Sign In</button> --}}
      </div>
    </div>
     
    </form>
    <a href="home" class="btn btn-success float-left" style="color:white;font-family: Times New Roman;">Back to Home</a>
     
  </div>
@endsection
