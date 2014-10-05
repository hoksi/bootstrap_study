<div class="navbar navbar-inverse">
  <div class="navbar-inner">
    <div class="container">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="brand" href="#">Title</a>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <!-- Home -->
          <li class="active"><a href="<?=site_url('design')?>">Home</a></li>
          <!-- 갤러리 -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">갤러리 <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li class="nav-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
          <!-- 마켓 -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">마켓 <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li class="nav-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
          <!-- 이벤트 -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">이벤트 <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li class="nav-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
          <!-- 더보기 -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">더보기 <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li class="nav-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
		<!-- Search form -->
        <form class="navbar-search pull-left form-search" action="">
        	<div class="input-append">
        		<input type="text" class="span2 search-query" placeholder="Search">
        		<button type="submit" class="btn btn-primary"><i class="icon-search"></i></button>
        	</div>
        </form>
        <!-- 로그인 -->
        <ul class="nav pull-right">
        	<li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">로그인 <b class="caret"></b></a>
	            <div class="dropdown-menu login-form">
	            	<form method="post" action="" accept-charset="UTF-8">
	            		<input type="text" placeholder="아이디" id="username" name="username">
	            		<input type="password" placeholder="비밀번호" id="password" name="password">
	            		<input type="checkbox" name="remember-me" id="remember-me" value="1">
	            		<label class="string optional" for="remember-me">기억하기</label>
	            		<input class="btn btn-primary btn-block" type="submit" id="sign-in" value="로그인">
	            		<button thype="submit" class="btn btn-block"><i class="icon-google-plus"></i> 구글 로그인</button>
	            		<button thype="submit" class="btn btn-block"><i class="icon-twitter"></i> 트위터 로그인</button>
	            	</form>
	            </div>
        	</li>
	        <li class="divider-vertical"></li>
        	<li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">설정 <b class="caret"></b></a>
	            <ul class="dropdown-menu">
	              <li><a href="#">Action</a></li>
	              <li><a href="#">Another action</a></li>
	              <li><a href="#">Something else here</a></li>
	            </ul>
        	</li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>
<!-- Modal -->
<div id="sign-up" class="modal fade hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-remote="<?=site_url('design/register')?>">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
		<h3 id="myModalLabel">회원가입</h3>
	</div>
	<div class="modal-body">
		<p>Loading...</p>
	</div>	
</div>