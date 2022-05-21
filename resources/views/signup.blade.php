@extends('layouts.master')
@section('body')
<!DOCTYPE html>
<html>

  <body>    
    {{-- <h2>Login Page</h2><br>     --}}
    <br><br> 
    <div class="login">    
    <form id="login" method="get" action="login.php">
        <h2>Registration</h2><br>     
        <label><b>User Name     
        </b>    
        </label>    
        <input type="text" name="Uname" id="Uname" placeholder="Username">    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>
        <input type="Email" name="Email" id="Email" placeholder="Email">    
        <br><br>     
        <input type="Password" name="Pass" id="Pass" placeholder="Password">    
        <br><br> 
        
        <div class="d-flex justify-content-center">
          <button type="button"
            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
        </div>

        <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!"
            class="fw-bold text-body"><u>Login here</u></a></p>
        {{-- <input type="checkbox" id="check">     --}}
        {{-- <span>I agree all statements in Terms of service</span>    --}}
       
         {{-- <input type="button" name="log" id="log" value="Login">        --}}
        <br><br>    
            
    </form> 
        
</div> 
<br><br>   
</body>    
</html>
@endsection