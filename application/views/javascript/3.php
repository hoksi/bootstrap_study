<div class="row">
	<div class="span6">
		<ul id="myTab" class="nav nav-tabs">
          <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
          <li><a href="#profile" data-toggle="tab">Profile</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#dropdown1" data-toggle="tab">@fat</a></li>
              <li><a href="#dropdown2" data-toggle="tab">@mdo</a></li>
            </ul>
          </li>
        </ul>
        <script>
        	$(function(){
        		$('#myTab a:last').tab('show');
        	});
        </script>
	</div>
</div>

