<!DOCTYPE html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>기본 레이아웃</title>
		<meta name="description" content="">
		<meta name="author" content="hoksi">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link rel="stylesheet" href="<?=site_url('assets/bootstrap-2.3.2/css/bootstrap.min.css')?>" media="screen" title="no title" charset="utf-8" />
		<link rel="stylesheet" href="<?=site_url('assets/bootstrap-2.3.2/css/bootstrap-responsive.css')?>" media="screen" title="no title" charset="utf-8" />
		<link rel="stylesheet" href="<?=site_url('assets/font-awesome-3.2.1/css/font-awesome.min.css')?>" media="screen" title="no title" charset="utf-8" />
		<link rel="stylesheet" href="<?=site_url('assets/css/style.css')?>" media="screen" title="no title" charset="utf-8" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<!--[if IE 7]>
		<link rel="stylesheet" href="<?=site_url('assets/font-awesome-3.2.1/css/font-awesome-ie7.min.css')?>" media="screen" title="no title" charset="utf-8" />
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>

	<body>
		<?php $this->load->view('sys_layout/hero_fluid/nav')?>
	    <div class="container-fluid">
	    	<?php $this->load->view('sys_layout/hero/header')?>
			<?php $this->load->view($sys_my_content_view)?>
			<?php $this->load->view('sys_layout/hero/footer')?>
	    </div>		
		<script src="<?=site_url('assets/bootstrap-2.3.2/js/bootstrap.min.js')?>"></script>
		<script src="<?=site_url('assets/holder/holder.js')?>"></script>
	</body>
</html>