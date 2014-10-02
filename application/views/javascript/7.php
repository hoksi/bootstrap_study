<div class="row">
	<div class="span6">
		<button type="button" class="btn btn-primary" id="fat-btn" data-loading-text="Loading...">Loading state</button>
		<script>
			$(function(){
				$('#fat-btn').click(function(){
					var btn = $(this);
					btn.button('loading');
					$.get('https://www.googleapis.com/freebase/v1/text/en/bob_dylan', "jsonp", function(data){
						console.log(data);
						setTimeout(function(){
							btn.button('reset');
						}, 1000);
					});
				});
			});
		</script>
	</div>
	<div class="span6">
		<button type="button" class="btn btn-primary" data-toggle="button">Single Toggle</button>
	</div>
	<div class="span6">
		<div class="btn-group" data-toggle="buttons-checkbox">
		  <button type="button" class="btn btn-info">Left</button>
		  <button type="button" class="btn btn-info">Middle</button>
		  <button type="button" class="btn btn-info">Right</button>
		</div>
	</div>
	<div class="span6">
		<div class="btn-group" data-toggle="buttons-radio">
		  <button type="button" class="btn btn-primary">Left</button>
		  <button type="button" class="btn btn-primary">Middle</button>
		  <button type="button" class="btn btn-primary">Right</button>
		</div>
	</div>
	<div class="span6">
		<label for="checkbox1">
			<input type="checkbox" name="secret" id="checkbox1" class="checkbox">
			<button class="btn btn-danger" data-toggle="buttons-checkbox">Secret</button>
		</label>
	</div>
</div>
