@extends('layouts.default')

@section('content')
<!--         {{ Form::open(['route' => 'sessions.store']) }}
            <div>
                {{ Form::label('email', 'Email: ') }}
                {{ Form::email('email') }}
            </div>
            <div>
                {{ Form::label('password', 'Password: ') }}
                {{ Form::password('password') }}
            </div>
            <div>
                {{ Form::submit('Login') }}
            </div>
        {{ Form::close() }} -->
        <form class="form-horizontal">  
        <div  id="form_prof">
            <fieldset> 
                <br><br><br><br>
                <a href="ProfessorLogin" class="action-button shadow animate red">Professor Portal</a><br><br><br>
                <!-- {{ HTML::linkAction('SessionsController@create', 'Professor Portal', array(), array('class' => 'action-button shadow animate red')) }} -->
                <!-- {{ HTML::linkRoute('sessions.create', 'Professor Portal', array('class' => 'action-button shadow animate red'), true)}}<br><br><br> -->
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
                <a href="StudentLogin" class="action-button shadow animate red">Student Portal</a><br><br><br>
                <!-- {{ HTML::linkAction('SessionsController@StudentLogin', 'Student Portal', array(), array('class' => 'action-button shadow animate red')) }}<br><br><br> -->
                <br><br><br><br>
                <br><br><br><br>
                <h3>Sign in to your Student account.</h3>
            </fieldset>  
        </div>
        </form> 
@stop