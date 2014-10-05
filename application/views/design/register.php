<form class="form-horizontal" action="" method="post">
	<h3>아래 양식을 작성해주세요.</h3>
	<hr>
	<div class="control-group">
		<label class="control-label" for="username">아이디</label>
		<div class="controls">
			<input type="text" id="username" name="username" placeholder="아이디" class="input-xlarge" required>
			<p class="help-block">아이디는 문자와 숫자로 공백없이 입력해주세요.</p>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="email">이메일</label>
		<div class="controls">
			<input type="text" id="email" name="email" placeholder="이메일" class="input-xlarge" required>
			<p class="help-block">이메일 주소를 입력해주세요.</p>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="password">비밀번호</label>
		<div class="controls">
			<input type="text" id="password" name="password" placeholder="비밀번호" class="input-xlarge" required>
			<p class="help-block">비밀번호는 최소한 4글자 이상으로 해주세요.</p>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="repassword">비밀번호(재입력)</label>
		<div class="controls">
			<input type="text" id="repassword" name="repassword" placeholder="비밀번호(재입력)" class="input-xlarge" required>
			<p class="help-block">비밀번호를 다시 입력해주세요.</p>
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			<input type="submit" class="btn btn-success" value="가입하기">
		</div>
	</div>
</form>
