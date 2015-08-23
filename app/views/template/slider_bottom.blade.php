<div class="slider-bottom">
<ul class="bxslider">
    @for ($i=0; $i < 10; $i++)
        @foreach($slider_bottom as $value)
            <li><a href="http://{{$value->link}}"><img src="{{URL::to('/')}}/{{$value->url_img}}" alt="{{$value->alt_img}}" style="width:170px"></a></li>
        @endforeach
    @endfor
</ul>
<div class="tt_bottom">
	<div class="col-sm-1"></div>
	<div class="col-sm-10 center">
		<img src="{{URL::to('public/img/qc.png')}}" alt="việc làm sinh viên đà nẵng" class="img-responsive">
	</div>
	<div class="col-sm-1"></div>
</div>
<div class="mxh">
	<ul>
		<li><a href="https://www.facebook.com/vieclamsinhviendn" target="_blank"><img src="{{URL::to('/')}}/public/img/facebook.png" alt=""></a></li>
		<li><a href="https://plus.google.com/u/1/104356410747915114600/posts" target="_blank"><img src="{{URL::to('/')}}/public/img/google.png" alt=""></a></li>
	</ul>
</div>
</div>