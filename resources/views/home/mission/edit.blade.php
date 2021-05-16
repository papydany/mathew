@extends('layouts.admin')
@section('title','Edit Mission')
@section('content')
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Edit Our Mission</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Edit Our Mission</a></li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
       
       
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit Our Mission</h5>
                    </div>
                    <form method="POST" action="{{route('updateMission',$m->id)}}" >
                        @method('PUT')
                        {{ csrf_field() }}
                    <div class="card-body">
                  <div class="col-md-12">
                   
                 <div class="form-group">
                <label for="exampleFormControlTextarea1">Edit Mission</label>
              
                <textarea class="form-control" name='content' rows="3">
                    @if(isset($m))
                    {!!$m->content!!}
                    @endif
                </textarea>
                </div>
                <button type="submit" class="btn  btn-warning">Update</button>
                    
                </div>
            </div>
                    </form>
        </div>
            </div>
            </div>
    
    
</section>
@endsection