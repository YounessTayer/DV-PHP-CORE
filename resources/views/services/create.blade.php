@extends('layout')

@section('header')
    <div class="page-head">
        <h3>
            Service 
        </h3>
        <span class="sub-title">New service/</span>

    </div>
    <!-- page head end-->
@endsection

@section('content')
    @include('error')
 <!--body wrapper start-->
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                         Add Service
                    </header>
                    <div class="panel-body">
                         <form action="{{ route('services.store') }}" method="POST">
                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                         <div class="form-group">
                                                <div class="form-group">
                                                <label for="g-txt">Service Name</label>
                                                <input class="form-control" name="name" id="name"
                                                        type="text" placeholder="Service Name" value="">
                                                 @if($errors->has("name"))
                                                  <span class="help-block">{{ $errors->first("name") }}</span>
                                                @endif
                                                </div>
                                                <div class="form-group">
                                                <label for="g-txt">Service Description</label>
                                                <textarea class="form-control" name="description" id="description"
                                                           value=""> Description</textarea>
                                                 @if($errors->has("description"))
                                                  <span class="help-block">{{ $errors->first("description") }}</span>
                                                @endif
                                                </div>
                                                <div class="form-group">
                                                <label for="g-txt" >Database Type</label>
                                                <select id="db-type" name="driver"  class="form-control m-b-10">
                                                    <?php $options = ['Default'=>'default','Sqlite'=>'sqlite',
                                                        'MySql'=>'mysql','Postgres'=>'Pgsql','SQL Server'=>'sqlsrv'];?>
                                                    @foreach($options as $option_index => $option_value )
                                                    <option value="{{$option_value}}" @if($option_value == "default")selected @endif >{{$option_index}}</option>
                                                    @endforeach
                                                </select>
                                                 @if($errors->has("driver"))
                                                  <span class="help-block">{{ $errors->first("driver") }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="g-txt">Database Name</label>
                                                <input class="form-control" name="database" id="database"
                                                        type="text" placeholder="Database Name" value="">
                                                 @if($errors->has("database"))
                                                  <span class="help-block">{{ $errors->first("database") }}</span>
                                                @endif
                                                </div>
                                            <div class="form-group">
                                                <label for="g-txt">Host Name</label>
                                                <input class="form-control" name="hostname" id="hostname"
                                                       placeholder="" type="text" placeholder="127.0.0.1" value="">
                                                 @if($errors->has("hostname"))
                                                  <span class="help-block">{{ $errors->first("hostname") }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="g-txt">Username</label>
                                                <input class="form-control" name="username" id="username"
                                                       placeholder="" type="text" placeholder="root" value="">
                                                @if($errors->has("username"))
                                                  <span class="help-block">{{ $errors->first("username") }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="g-txt">Password</label>
                                                <input class="form-control" id="password" name="password" placeholder="password" value="" type="password">
                                                @if($errors->has("password"))
                                                  <span class="help-block">{{ $errors->first("password") }}</span>
                                                @endif
                                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-info pull-right">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
<!--body wrapper end-->



@endsection



