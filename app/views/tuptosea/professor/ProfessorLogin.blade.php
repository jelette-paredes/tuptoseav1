@extends('tuptosea._layouts.default')

@section('content')
    <td>
    <br><br><br>
    <div id="professor-portal_1">
      <legend><h3>Professor Portal</h3></legend>

        <div>
            <input type="text"class="inputs" placeholder="Username" /> 
             <br><br> 
            <input type="password" class="inputs"placeholder="Password" /> 
    
        </div>
    
     <div class="checkbox">
     <br>
        <label><input type="checkbox"> Remember me</label>
        </div>
        <br>
       
       <a href="#" class="login_button">LOGIN</a>
      <a href="professor_signup.php" class="login_button">SIGN UP</a>
        <br><br>
        <h4>Access your Professor or Admin Account.</h4>
        <br><br>
        </form>
    </div>
    </td>
@stop