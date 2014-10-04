<div class="row">
	<div class="span6">
		<input type="text" data-provide="typeahead" data-items="4" data-source='["웹 디자인", "포토샵"]'>
	</div>
	<div class="span6">
		<input id="typeahed" type="text" data-provide="typeahead" data-items="4">
		<script>
			$(function(){
				$('#typeahed').typeahead({
					source: ['Web design', 'Web master']
				});
			});
		</script>
	</div>	
</div>
