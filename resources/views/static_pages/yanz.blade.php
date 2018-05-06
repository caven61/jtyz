@extends('layouts.default')
@section('title', '注册')

@section('content')
<div class="col-md-offset-2 col-md-8">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5>注册</h5>
    </div>
    <div class="panel-body">
      <form method="POST" action="{{ route('users.store') }}">
          <div class="form-group">
            <label for="name">客户名称：</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
          </div>

          <div class="form-group">
            <label for="phone">手机号码：</label>
            <input type="number" name="phone" class="form-control" value="{{ old('phone') }}">
          </div>

          <div class="form-group">
            <label for="jtdw">集团单位：</label>
            <input type="search" name="jtdw" class="form-control" value="移动">
          </div>

          <div class="form-group">
            <label for="sfz">身份证照片：</label>
            <input type="image" name="sfz" class="form-control">
          </div>

          <div class="form-group">
            <label for="gzz">工作证照片：</label>
            <input type="image" name="email" class="form-control">
          </div>

          

          <button type="submit" class="btn btn-primary">注册</button>
      </form>
    </div>
  </div>
</div>
@stop