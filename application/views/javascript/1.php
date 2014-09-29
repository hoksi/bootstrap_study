<div class="row">
	<div class="span6">
		<a href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</a>
	</div>
	<div class="span6">
		<a href="#Login" role="button" class="btn btn-primary" data-toggle="modal">Login</a>
	</div>
	<div class="span6">
		<a href="#backDropOff" role="button" class="btn" data-toggle="modal">Backdrop:false</a>
		<script>
			$(function(){
				$('#backDropOff').modal({
					backdrop: false,
					show: false
				});
			})
		</script>
	</div>
</div>

<!-- MyModal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Modal header</h3>
  </div>
  <div class="modal-body">
    <p>One fine body…</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
  </div>
</div>

<!-- LoginModal -->
<div id="Login" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="Member Login" aria-hidden="true">
  <form action="" method="post" accept-charset="UTF-8">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">로그인</h3>
  </div>
  <div class="modal-body">
	<input id="user_username" type="text" name="user[username]" class="input-block-level" placeholder="아이디" />
	<input id="user_password" type="password" name="user[password]" class="input-block-level" placeholder="비밀번호" />
	<label class="string optional" for="user_remember_me">
		<input id="user_remember_me" type="checkbox" name="user[remember_me]" value="1"/>
		비밀번호 기억하기
	</label>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn" data-dismiss="modal" aria-hidden="true">취소</button>
    <button type="submit" class="btn btn-primary">로그인</button>
  </div>
  </form>
</div>

<!-- BackDropOff -->
<div id="backDropOff" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Modal header</h3>
  </div>
  <div class="modal-body">
    <p>backdrop:false</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
  </div>
</div>