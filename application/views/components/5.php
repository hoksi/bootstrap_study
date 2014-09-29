<div class="row">
	<div class="span12">
		<ul class="breadcrumb">
		  <li><a href="#">Home</a></li>
		</ul>
	</div>
	<div class="span12">
		<ul class="breadcrumb">
		  <li><a href="#">Home</a> <span class="divider">/</span></li>
		  <li class="active">Library</li>
		</ul>
	</div>
	<div class="span12">
		<ul class="breadcrumb">
		  <li><a href="#">Home</a> <span class="divider">/</span></li>
		  <li><a href="#">Library</a> <span class="divider">/</span></li>
		  <li class="active">Data</li>
		</ul>
	</div>
</div>
<div class="row">
	<div class="span6">
		<div class="pagination">
		  <ul>
		    <li><a href="#">Prev</a></li>
		    <li><a href="#">1</a></li>
		    <li><a href="#">2</a></li>
		    <li><a href="#">3</a></li>
		    <li><a href="#">4</a></li>
		    <li><a href="#">5</a></li>
		    <li><a href="#">Next</a></li>
		  </ul>
		</div>
	</div>
	<div class="span6">
		<div class="pagination">
		  <ul>
		    <li class="disabled"><a href="#">&laquo;</a></li>
		    <li class="active"><a href="#">1</a></li>
		    <li><a href="#">2</a></li>
		    <li><a href="#">3</a></li>
		    <li><a href="#">4</a></li>
		    <li><a href="#">5</a></li>
		    <li><a href="#">&raquo;</a></li>
		  </ul>
		</div>
	</div>
	<div class="span6">
		<div class="pagination">
		  <ul>
		    <li class="disabled"><span>&laquo;</span></li>
		    <li class="active"><span>1</span></li>
		    <li><a href="#">2</a></li>
		    <li><a href="#">3</a></li>
		    <li><a href="#">4</a></li>
		    <li><a href="#">5</a></li>
		    <li><a href="#">&raquo;</a></li>
		  </ul>
		</div>
	</div>
	<div class="span6">
		<div class="pagination pagination-large">
		  <ul>
		    <li class="disabled"><span>&laquo;</span></li>
		    <li class="active"><span>1</span></li>
		    <li><a href="#">2</a></li>
		    <li><a href="#">3</a></li>
		    <li><a href="#">4</a></li>
		    <li><a href="#">5</a></li>
		    <li><a href="#">&raquo;</a></li>
		  </ul>
		</div>
		<div class="pagination">
		  <ul>
		    <li class="disabled"><span>&laquo;</span></li>
		    <li class="active"><span>1</span></li>
		    <li><a href="#">2</a></li>
		    <li><a href="#">3</a></li>
		    <li><a href="#">4</a></li>
		    <li><a href="#">5</a></li>
		    <li><a href="#">&raquo;</a></li>
		  </ul>
		</div>
		<div class="pagination pagination-small">
		  <ul>
		    <li class="disabled"><span>&laquo;</span></li>
		    <li class="active"><span>1</span></li>
		    <li><a href="#">2</a></li>
		    <li><a href="#">3</a></li>
		    <li><a href="#">4</a></li>
		    <li><a href="#">5</a></li>
		    <li><a href="#">&raquo;</a></li>
		  </ul>
		</div>
		<div class="pagination pagination-mini">
		  <ul>
		    <li class="disabled"><span>&laquo;</span></li>
		    <li class="active"><span>1</span></li>
		    <li><a href="#">2</a></li>
		    <li><a href="#">3</a></li>
		    <li><a href="#">4</a></li>
		    <li><a href="#">5</a></li>
		    <li><a href="#">&raquo;</a></li>
		  </ul>
		</div>
	</div>
	<div class="span6">
		<div class="pagination pagination-centered">
		  <ul>
		    <li class="disabled"><span>&laquo;</span></li>
		    <li class="active"><span>1</span></li>
		    <li><a href="#">2</a></li>
		    <li><a href="#">3</a></li>
		    <li><a href="#">4</a></li>
		    <li><a href="#">5</a></li>
		    <li><a href="#">&raquo;</a></li>
		  </ul>
		</div>
		<div class="pagination pagination-right">
		  <ul>
		    <li class="disabled"><span>&laquo;</span></li>
		    <li class="active"><span>1</span></li>
		    <li><a href="#">2</a></li>
		    <li><a href="#">3</a></li>
		    <li><a href="#">4</a></li>
		    <li><a href="#">5</a></li>
		    <li><a href="#">&raquo;</a></li>
		  </ul>
		</div>
	</div>
</div>
<div class="row">
	<div class="span6">
		<ul class="pager">
		  <li><a href="#">Previous</a></li>
		  <li><a href="#">Next</a></li>
		</ul>
	</div>
	<div class="span6">
		<ul class="pager">
		  <li class="previous">
		    <a href="#">&larr; Older</a>
		  </li>
		  <li class="next">
		    <a href="#">Newer &rarr;</a>
		  </li>
		</ul>
	</div>
	<div class="span6">
		<ul class="pager">
		  <li class="previous">
		    <a href="#">&larr; Older</a>
		  </li>
<?php for($idx=1; $idx < 10; $idx++):?>
		  <li>
		    <a href="#"><?=$idx?></a>
		  </li>
<?php endfor;?>
		  <li class="next">
		    <a href="#">Newer &rarr;</a>
		  </li>
		</ul>
	</div>
	<div class="span6">
		<ul class="pager">
		  <li class="previous disabled">
		    <a href="#">&larr; Older</a>
		  </li>
		  <li class="next">
		    <a href="#">Newer &rarr;</a>
		  </li>
		</ul>
	</div>
</div>
<div class="row">
	<div class="span6">
		<span class="label">Default</span>
		<span class="label label-success">Success</span>
		<span class="label label-warning">Warning</span>
		<span class="label label-important">Important</span>
		<span class="label label-info">Info</span>
		<span class="label label-inverse">Inverse</span>
	</div>
	<div class="span6">
		<span class="badge">1</span>
		<span class="badge badge-success">2</span>
		<span class="badge badge-warning">4</span>
		<span class="badge badge-important">6</span>
		<span class="badge badge-info">8</span>
		<span class="badge badge-inverse">10</span>
	</div>	
</div>
<div class="row">
	<div class="span6">
		<div class="hero-unit">
		  <h1>Heading</h1>
		  <p>Tagline</p>
		  <p>
		    <a class="btn btn-primary btn-large">
		      Learn more
		    </a>
		  </p>
		</div>
	</div>
	<div class="span6">
		<div class="page-header">
		  <h1>Example page header <small>Subtext for header</small></h1>
		</div>
	</div>
</div>
<div class="row">
	<div class="span12">
		<ul class="thumbnails">
          <li class="span3">
            <a href="#" class="thumbnail">
              <img data-src="holder.js/260x180" alt="260x180">
            </a>
          </li>
          <li class="span3">
            <a href="#" class="thumbnail">
              <img data-src="holder.js/260x180" alt="260x180">
            </a>
          </li>
          <li class="span3">
            <a href="#" class="thumbnail">
              <img data-src="holder.js/260x180" alt="260x180">
            </a>
          </li>
          <li class="span3">
            <a href="#" class="thumbnail">
              <img data-src="holder.js/260x180" alt="260x180">
            </a>
          </li>
        </ul>
	</div>
	<div class="span12">
		<ul class="thumbnails">
          <li class="span3">
          	<div class="thumbnail">
	            <a href="#">
	              <img data-src="holder.js/260x180" alt="260x180">
	            </a>
	            <div class="caption">
	            	<h3>Thumbnail label</h3>
	            	<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
	            	<p>Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
	            </div>
          	</div>
          </li>
          <li class="span3">
          	<div class="thumbnail">
	            <a href="#">
	              <img data-src="holder.js/260x180" alt="260x180">
	            </a>
	            <div class="caption">
	            	<h3>Thumbnail label</h3>
	            	<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
	            	<p>Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
	            </div>
          	</div>
          </li>
          <li class="span3">
          	<div class="thumbnail">
	            <a href="#">
	              <img data-src="holder.js/260x180" alt="260x180">
	            </a>
	            <div class="caption">
	            	<h3>Thumbnail label</h3>
	            	<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
	            	<p>Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
	            </div>
          	</div>
          </li>
          <li class="span3">
          	<div class="thumbnail">
	            <a href="#">
	              <img data-src="holder.js/260x180" alt="260x180">
	            </a>
	            <div class="caption">
	            	<h3>Thumbnail label</h3>
	            	<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
	            	<p>Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
	            </div>
          	</div>
          </li>
        </ul>
	</div>
	<div class="span12">
		  <ul class="thumbnails">
            <li class="span4">
              <a href="#" class="thumbnail">
                <img data-src="holder.js/360x270" alt="">
              </a>
            </li>
            <li class="span3">
              <a href="#" class="thumbnail">
                <img data-src="holder.js/260x120" alt="">
              </a>
            </li>
            <li class="span2">
              <a href="#" class="thumbnail">
                <img data-src="holder.js/160x120" alt="">
              </a>
            </li>
            <li class="span3">
              <a href="#" class="thumbnail">
                <img data-src="holder.js/260x120" alt="">
              </a>
            </li>
            <li class="span3">
              <a href="#" class="thumbnail">
                <img data-src="holder.js/260x120" alt="">
              </a>
            </li>
            <li class="span2">
              <a href="#" class="thumbnail">
                <img data-src="holder.js/160x120" alt="">
              </a>
            </li>
            <li class="span3">
              <a href="#" class="thumbnail">
                <img data-src="holder.js/260x120" alt="">
              </a>
            </li>
          </ul>
	</div>
</div>
