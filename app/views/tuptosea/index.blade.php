@extends('layouts.default')

@section('content')
        <form class="form-horizontal">  
        <div  id="form_prof">
            <fieldset> 
                <br><br><br><br>
                <a href="professor_login.php" class="action-button shadow animate red">Professor Portal</a><br><br><br>
                <br><br><br><br>
                <br><br><br><br>
                <h3>Access for Professor or Admin Account.</h3>
            </fieldset> 
        </div> 
        </form>  

        <form class="form-horizontal">  
        <div id="form_student">
            <fieldset>  
                <br><br><br><br>
                <a href="student_login.php" class="action-button shadow animate red">Student Portal</a><br><br><br>
                <br><br><br><br>
                <br><br><br><br>
                <h3>Sign in to your Student account.</h3>
            </fieldset>  
        </div>
        </form> 
@stop