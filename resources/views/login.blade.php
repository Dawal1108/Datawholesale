@extends('layouts.master')
@section('body')
<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
        
</head>    
<body>    
    {{-- <h2>Login Page</h2><br>     --}}
    <br><br> 
    <div class="login">    
    <form id="login" method="get" action="login.php">
        <h2>Login</h2><br>     
        <label><b>User Name     
        </b>    
        </label>    
        <input type="text" name="Uname" id="Uname" placeholder="Username">    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" name="Pass" id="Pass" placeholder="Password">    
        <br><br>    
        <input type="button" name="log" id="log" value="Log In Here">       
        <br><br>    
        <input type="checkbox" id="check">    
        <span>Remember me</span>    
        <br><br>    
        <span>Forgot </span><a href="#">Password</a>    
    </form> 
        
</div>    
</body>    
</html>
<br><br> 
@endsection