@extends('admin.adminlayout')

@section('page-header')
  Pinjam <small>update</small>
@stop

@section('content')
<div class="row">
  <div class="col-sm-12">
    <div class="box" style="border:1px solid #d2d6de;">
        {!! Form::model($pinjam, [
                'action' => ['PinjamController@update', $pinjam->id],
                'method' => 'PATCH',
                'files' => true
            ])
        !!}

        <div class="box-body" style="margin:10px;">
          @include('admin.pinjam.form')
        </div>

      	<div class="box-footer" style="background-color:#f5f5f5;border-top:1px solid #d2d6de;">
      	  <button type="submit" class="btn btn-info" style="width:100px;">{{ trans('app.update_button') }}</button>
          <a class="btn btn-warning " href="{{ route(ADMIN.'.pinjam.index') }}" style="width:100px;"><i class="fa fa-btn fa-back"></i>Cancel</a>
      	</div>

        {!! Form::close() !!}
    </div>
  </div>
</div>
@stop
