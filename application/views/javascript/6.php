<div class="row">
	<div class="span6">
		<div class="alert" id="my-alert">
			경고
			<a class="close" data-dismiss="alert" href="#">&times;</a>
		</div>
	</div>
	<div class="span6">
		<button type="button" onclick="$('.alert').alert('close')" class="btn btn-danger">닫기</button>
		<script>
			$(function(){
				$('#my-alert').bind('closed', function () {
					alert('닫음');
				});
			});
		</script>
	</div>
</div>
