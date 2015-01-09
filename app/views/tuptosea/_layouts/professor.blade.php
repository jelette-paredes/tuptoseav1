<!DOCTYPE html>
<html>
<head>
	<title>TUP-T Online Subject Evaluation and Accreditation</title>
	<meta charset="utf-8"/>
	<link rel="shortcut icon" href="designosea/images/tuplogo.ico">
	{{HTML::style('designosea/css/bootstrap.min.css')}}
	{{HTML::style('designosea/css/bootstrap.css')}}
	<!-- {{HTML::style('designosea/css/pref/cyborg.css')}} -->
	{{HTML::style('designosea/jquery-ui-1.11.2.custom/jquery-ui.css')}}
	{{HTML::style('designosea/src/jquery.multiselect.css')}}
	<!-- {{HTML::script('designosea/js/bootstrap.min.js')}} -->
	{{HTML::script('designosea/jquery-ui-1.11.2.custom/external/jquery/jquery.js')}}
	{{HTML::script('designosea/jquery-ui-1.11.2.custom/jquery-ui.js')}}
	{{HTML::script('designosea/js/bootstrap.js')}}
	{{HTML::script('designosea/src/jquery.multiselect.js')}}
	<script>
	  $(function() {
	    $( "#accordion" )
	      .accordion({
	        header: "> div > h3",collapsible: true
	      })
	      .sortable({
	        axis: "y",
	        handle: "h3",
	        stop: function( event, ui ) {
	          // IE doesn't register the blur when sorting
	          // so trigger focusout handlers to remove .ui-state-focus
	          ui.item.children( "h3" ).triggerHandler( "focusout" );
	 
	          // Refresh accordion to handle new order
	          $( this ).accordion( "refresh" );
	        }
	      });
		$("select").multiselect();
	
	  });
  	</script>
  	<script type="text/javascript">
  	 $(document).ready(function() {

    //         // make sure labels are drawn in the correct state

            $('label').each(function()
            {
                if ($(this).find(':checkbox').attr('checked'))
               		$(this).addClass('selected');
                	


            });
            
            // toggle label css when checkbox is clicked

            $(':checkbox').click(function(e)
            {
                
                var checked = $(this).attr('checked');
                $(this).closest('label').toggleClass('selected', checked);

            });

        });
  	</script>
  	<style type="text/css">

        body{
            
            padding:        40px;
            
            font-family:    Arial, Helvetica, sans-serif;
            
        }
        
        h1{
            
            font-size:      1em;
            
        }
        
        ul#studentz{

            width:              100%;
            height:             160px;
            overflow-y:         auto;
            overflow-x:         hidden;
            list-style:         none;
            padding:            0;
            border:             1px solid #CCC;
            
        }
        select#studentz{

            width:              100%;
            height:             160px;
            overflow-y:         auto;
            overflow-x:         hidden;
            list-style:         none;
            padding:            0;
            border:             1px solid #CCC;
            
        }

        #studentz li label{

            display:            block;
            border-bottom:      1px solid #DDD;
            padding:            4px 4px 4px 26px;
            color:              #000;
            outline:            none;
            position:           relative;

        }

        #studentz li label:hover{

            color:              #000;
            background-color:   #EEE;

        }

        #studentz li label.selected{

            color:              #FFF;
            background-color:   #CCC;

        }

        #studentz li label .checkbox{

            position:           absolute;
            top:                2px;
            left:               2px;

        }


    </style>
</head>
<body>
		<div class="navbar navbar-default">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		    </button>
			@yield('content')
			</div>
  			<div class="navbar-collapse collapse navbar-inverse-collapse">
			    <ul class="nav navbar-nav">
			      	<li ><a id="users" href="#">Inbox<span class="badge">42</span></a></li>
			      	
			    </ul>
			    <form class="navbar-form navbar-left" id='srch'>
					<input type="text" class="form-control" placeholder="Search Student/Tracking No." id="tbsrch">
		    	</form>
			    <ul class="nav navbar-nav navbar-right">
			     	<li><a href="#myModal" data-toggle="modal" data-target="#myModal">Upload</a></li>
			     	<!-- <li class="dropdown">
			              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="glyphicon glyphicon-cog"><b class="caret"></b></a>
			              <ul class="dropdown-menu" id="themex">
			                <li><a href="#" setstyle='cyborg'>Default</a></li>
			                <li class="divider"></li>
			                <li><a href="#" setstyle='darkly'>Darkly</a></li>
			                <li><a href="#" setstyle='superhero'>Superhero</a></li>
			                <li><a href="#" setstyle='yeti'>Yeti</a></li>
			              </ul>
			    	</li> -->
		    		<li><a href="#" id="savestyle"><i class="glyphicon glyphicon-cog"></i></a></li>
		    		<li><a href="#" id="savestyle"><i class="glyphicon glyphicon-off"></i></a></li>
				</ul>
			</div>
		</div>
		@yield('sectionz')
		<!Pop-Up Modal For Upload!>
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			        <h4 class="modal-title" id="myModalLabel">Upload your picture</h4>
			      </div>
			      <div class = "modal-body"> 
					</div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary" id ="uploadbtn">Save changes</button>
			      </div>
			    </div>
			  </div>
			</div>
			<!End of Pop-Up Modal For Upload!>
</body>
</html>
