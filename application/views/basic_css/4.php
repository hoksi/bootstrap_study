<div class="row">
	<div class="span6">
		<form>
			<filedset>
				<legend>Legend</legend>
				<label>Label</label>
				<input type="texst" placeholder="Type somthing ...">
				<span class="help-block">Example block-level help text here.</span>
				<label class="checkbox">
					<input type="checkbox"> Check me out
				</label>
				<button type="submit" class="btn">Submit</button>
			</filedset>
		</form>
	</div>

	<div class="span6">
		<form class="form-search">
			<input type="text" class="input-medium search-query">
			<button stype="submit">Search</button>
		</form>
		<form class="form-search">
			<input type="text" class="input-small search-query">
			<button stype="submit">Search</button>
		</form>
		<form class="form-search">
			<input type="text" class="input-large search-query">
			<button stype="submit">Search</button>
		</form>
	</div>
</div>
<div class="row">
	<div class="span6">
		<form class="form-inline">
		  <input type="text" class="input-small" placeholder="Email">
		  <input type="password" class="input-small" placeholder="Password">
		  <label class="checkbox">
		    <input type="checkbox"> Remember me
		  </label>
		  <button type="submit" class="btn">Sign in</button>
		</form>
	</div>
	<div class="span6">
		<form class="form-horizontal">
		  <div class="control-group">
		    <label class="control-label" for="inputEmail">Email</label>
		    <div class="controls">
		      <input type="text" id="inputEmail" placeholder="Email">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputPassword">Password</label>
		    <div class="controls">
		      <input type="password" id="inputPassword" placeholder="Password">
		    </div>
		  </div>
		  <div class="control-group">
		    <div class="controls">
		      <label class="checkbox">
		        <input type="checkbox"> Remember me
		      </label>
		      <button type="submit" class="btn">Sign in</button>
		    </div>
		  </div>
		</form>
	</div>
</div>
<div class="row">
	<div class="span6">
		<form>
			<input type="text" placeholder="Text input">
			<input type="password" placeholder="password input">
			<input type="datetime" placeholder="datetime input">
			<input type="datetime-local" placeholder="datetime-local input">
			<input type="date" placeholder="date input">
			<input type="month" placeholder="month input">
			<input type="time" placeholder="time input">
			<input type="week" placeholder="week input">
			<input type="number" placeholder="number input">
			<input type="url" placeholder="url input">
			<input type="search" placeholder="search input">
			<input type="tel" placeholder="tel input">
			<input type="color" placeholder="color input">
		</form>
	</div>
	<div class="span6">
		<form>
			<textarea rows="3"></textarea>
			<label class="checkbox">
			  <input type="checkbox" value="">
			  Option one is this and that—be sure to include why it's great
			</label>
			 
			<label class="radio">
			  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
			  Option one is this and that—be sure to include why it's great
			</label>
			<label class="radio">
			  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
			  Option two can be something else and selecting it will deselect option one
			</label>
			
			<label class="checkbox inline">
			  <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
			</label>
			<label class="checkbox inline">
			  <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
			</label>
			<label class="checkbox inline">
			  <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
			</label>
			<select>
			  <option>1</option>
			  <option>2</option>
			  <option>3</option>
			  <option>4</option>
			  <option>5</option>
			</select>
			 
			<select multiple="multiple">
			  <option>1</option>
			  <option>2</option>
			  <option>3</option>
			  <option>4</option>
			  <option>5</option>
			</select>
			
			<div class="input-prepend">
			  <span class="add-on">@</span>
			  <input class="span2" id="prependedInput" type="text" placeholder="Username">
			</div>
			<div class="input-append">
			  <input class="span2" id="appendedInput" type="text">
			  <span class="add-on">.00</span>
			</div>
			<div class="input-prepend input-append">
			  <span class="add-on">$</span>
			  <input class="span2" id="appendedPrependedInput" type="text">
			  <span class="add-on">.00</span>
			</div>
			
			<div class="input-append">
			  <input class="span2" id="appendedInputButton" type="text">
			  <button class="btn" type="button">Go!</button>
			</div>
			<div class="input-append">
			  <input class="span2" id="appendedInputButtons" type="text">
			  <button class="btn" type="button">Search</button>
			  <button class="btn" type="button">Options</button>
			</div>

			<div class="input-append">
			  <input class="span2" id="appendedDropdownButton" type="text">
			  <div class="btn-group">
			    <button class="btn dropdown-toggle" data-toggle="dropdown">선택 <span class="caret"></span></button>
			    <ul class="dropdown-menu" id="appendedBtnSubMenu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
			  </div>
			</div>
			<script>
				$(function(){
					$('#appendedBtnSubMenu a').click(function() {
						$('#appendedDropdownButton').val(($(this).prop('href', 'javascript:;').text()));
					});
				});
			</script>
			<div class="input-prepend">
			  <div class="btn-group">
			    <button class="btn dropdown-toggle" data-toggle="dropdown">선택 <span class="caret"></span></button>
			    <ul class="dropdown-menu" id="prependBtnSubMenu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
			  </div>
			  <input class="span2" id="prependDropdownButton" type="text">
			</div>
			<script>
				$(function(){
					$('#prependBtnSubMenu a').click(function() {
						$('#prependDropdownButton').val(($(this).prop('href', 'javascript:;').text()));
					});
				});
			</script>

			<div class="input-prepend input-append">
			  <div class="btn-group">
			    <button class="btn dropdown-toggle" data-toggle="dropdown">선택1<span class="caret"></span></button>
			    <ul class="dropdown-menu" id="prependAppendBtnSubMenu1">
                  <li><a href="#">Action1</a></li>
                  <li><a href="#">Another action1</a></li>
                  <li><a href="#">Something else here1</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link1</a></li>
                </ul>
			  </div>
			  <input class="span2" id="appendedPrependedDropdownButton" type="text">
			  <div class="btn-group">
			    <button type="button" class="btn">선택2</button>
			    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
			    <ul class="dropdown-menu" id="prependAppendBtnSubMenu2">
                  <li><a href="#">Action2</a></li>
                  <li><a href="#">Another action2</a></li>
                  <li><a href="#">Something else here2</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link2</a></li>
                </ul>
			  </div>
			</div>
			<script>
				$(function(){
					$('#prependAppendBtnSubMenu1 a').click(function() {
						$('#appendedPrependedDropdownButton').val(($(this).prop('href', 'javascript:;').text()));
					});
					$('#prependAppendBtnSubMenu2 a').click(function() {
						$('#appendedPrependedDropdownButton').val(($(this).prop('href', 'javascript:;').text()));
					});
				});
			</script>
		</form>
		
		<form class="form-search">
		  <div class="input-append">
		    <input type="text" class="span2 search-query">
		    <button type="submit" class="btn">Search</button>
		  </div>
		  <div class="input-prepend">
		    <button type="submit" class="btn">Search</button>
		    <input type="text" class="span2 search-query">
		  </div>
		</form>		
	</div>
	<div class="span6">
		<form>
			<input class="input-block-level" type="text" placeholder=".input-block-level">
			<input class="input-mini" type="text" placeholder=".input-mini">
			<input class="input-small" type="text" placeholder=".input-small">
			<input class="input-medium" type="text" placeholder=".input-medium">
			<input class="input-large" type="text" placeholder=".input-large">
			<input class="input-xlarge" type="text" placeholder=".input-xlarge">
			<input class="input-xxlarge" type="text" placeholder=".input-xxlarge">
			<input class="span1" type="text" placeholder=".span1">
			<input class="span2" type="text" placeholder=".span2">
			<input class="span3" type="text" placeholder=".span3">
			<select class="span1">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
			</select>
			<select class="span2">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
			</select>
			<select class="span3">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
			</select>			
		</form>
	</div>
</div>
<div class="row">
	<div class="span6">
		<form>
			<div class="controls">
			  <input class="span5" type="text" placeholder=".span5">
			</div>
			<div class="controls controls-row">
			  <input class="span4" type="text" placeholder=".span4">
			  <input class="span1" type="text" placeholder=".span1">
			</div>
			<span class="input-xlarge uneditable-input">Some value here</span>
		</form>
	</div>
	<div class="span6">
		<form class="form-horizontal">
		  <div class="control-group">
		    <label class="control-label" for="inputEmail">Email</label>
		    <div class="controls">
		      <input type="text" id="inputEmail" placeholder="Email">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputPassword">Password</label>
		    <div class="controls">
		      <input type="password" id="inputPassword" placeholder="Password">
		    </div>
		  </div>
		  <div class="control-group">
		    <div class="controls">
		      <label class="checkbox">
		        <input type="checkbox"> Remember me
		      </label>
		    </div>
		  </div>
		<div class="form-actions">
		  <button type="submit" class="btn btn-primary">Save changes</button>
		  <button type="button" class="btn">Cancel</button>
		</div>
		</form>
	</div>
	<div class="span6">
		<form class="form-horizontal">
			<input type="text"><span class="help-inline">Inline help text</span>
			<input type="text"><span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
			<input class="input-xlarge" id="focusedInput" type="text" value="This is focused...">
			<input class="span3" type="email" required>
			<input class="input-xlarge" id="disabledInput" type="text" placeholder="Disabled input here..." disabled>
		</form>
	</div>
	<div class="span6">
		<form>
			<div class="control-group warning">
			  <label class="control-label" for="inputWarning">Input with warning</label>
			  <div class="controls">
			    <input type="text" id="inputWarning">
			    <span class="help-inline">Something may have gone wrong</span>
			  </div>
			</div>
			 
			<div class="control-group error">
			  <label class="control-label" for="inputError">Input with error</label>
			  <div class="controls">
			    <input type="text" id="inputError">
			    <span class="help-inline">Please correct the error</span>
			  </div>
			</div>
			 
			<div class="control-group info">
			  <label class="control-label" for="inputInfo">Input with info</label>
			  <div class="controls">
			    <input type="text" id="inputInfo">
			    <span class="help-inline">Username is already taken</span>
			  </div>
			</div>
			 
			<div class="control-group success">
			  <label class="control-label" for="inputSuccess">Input with success</label>
			  <div class="controls">
			    <input type="text" id="inputSuccess">
			    <span class="help-inline">Woohoo!</span>
			  </div>
			</div>
			<div class="form-actions">
			  <button type="submit" class="btn btn-primary">Save changes</button>
			  <button type="button" class="btn">Cancel</button>
			</div>
		</form>
	</div>
</div>
