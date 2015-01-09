@extends('tuptosea._layouts.default')

@section('content')
        <form class="form-horizontal">  
        <div  id="form_prof">
            <fieldset> 
                <br><br><br><br>
                <!-- <a href="ProfessorLogin" class="action-button shadow animate red">Professor Portal</a> -->
                 {{HTML::link('ProfessorLogin','Professor Portal', array('class' => 'action-button shadow animate red')) }}<br><br><br>
                {{-- {{ } HTML::linkAction('SessionsController@create', 'Professor Portal', array(), array('class' => 'action-button shadow animate red')) }}--}}
                {{-- {{ } HTML::linkRoute('sessions.create', 'Professor Portal', array('class' => 'action-button shadow animate red'), true)}}--}}
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
                <!-- <a href="StudentLogin" class="action-button shadow animate red">Student Portal</a> -->
                 {{HTML::link('StudentLogin','Student Portal', array('class' => 'action-button shadow animate red')) }}<br><br><br>
                 {{-- {{ } HTML::linkAction('SessionsController@StudentLogin', 'Student Portal', array(), array('class' => 'action-button shadow animate red')) }} --}}
                <br><br><br><br>
                <br><br><br><br>
                <h3>Sign in to your Student account.</h3>
            </fieldset>  
        </div>
        </form> 
@stop