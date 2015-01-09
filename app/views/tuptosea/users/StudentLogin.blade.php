@extends('layouts.default')

@section('content')
      <td>
    <br><br><br>
    <div id="student-portal_1">
      <legend><h3>Student Portal</h3></legend>

        <div>
            <input type="text"class="inputs" placeholder="Username" /> 
             <br><br> 
            <input type="password" class="inputs"placeholder="Password" /> 
    
        </div>
    
     <div class="checkbox">
     <br><br>
        <label><input type="checkbox"> Remember me</label>
        </div>
        <br><br>
       <input type="submit" class="login_button" value="LOGIN" /> <input type="submit" class="login_button" value="SIGNUP" />
        <br><br>
        <h4>Sign in to your Student account.</h4>
        <br><br><br>
        </form>
    </div>
    </td>
@stop