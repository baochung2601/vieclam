@extends('body_admin')
@section('content')
	@if(Session::has('success'))
		<div class="text-primary"><h3>{{Session::get('success')}}</h3></div>
	@endif
<!-- form ve chung toi -->
<div class="adm-gioithieu">
<div class="form">
	{{Form::open(array('route'=>'post_gioithieu'))}}
	{{Form::hidden('id',1)}}
	{{Form::label('vechungtoi','Về chúng tôi')}}<br/>
	{{Form::textarea('content',$vechungtoi->content,array('class'=>'textarea'))}}
	{{Form::submit('Cập nhật',array('class'=>'btn btn-primary'))}}
	{{Form::close()}}
</div>
<!-- end ve chung toi -->

<!-- form lien he -->
<div class="form">
	{{Form::open(array('route'=>'post_gioithieu'))}}
	{{Form::hidden('id',2)}}
	{{Form::label('lienhe','Liên hệ với chúng tôi')}}<br/>
	{{Form::textarea('content',$lienhe->content,array('class'=>'textarea'))}}
	{{Form::submit('Cập nhật',array('class'=>'btn btn-primary'))}}
	{{Form::close()}}
</div>
<!-- end form lien he -->

<!-- form quy dinh -->
<div class="form">
	{{Form::open(array('route'=>'post_gioithieu'))}}
	{{Form::hidden('id',3)}}
	{{Form::label('quydinh','Quy định sử dụng')}}<br/>
	{{Form::textarea('content',$quydinh->content,array('class'=>'textarea'))}}
	{{Form::submit('Cập nhật',array('class'=>'btn btn-primary'))}}
	{{Form::close()}}
</div>
</div>
<!-- end form quy dinh -->
@stop