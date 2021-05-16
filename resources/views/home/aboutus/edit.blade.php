@extends('layouts.admin')
@section('title','Edit About US')
@section('content')
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Edit About US</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Edit About us</a></li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
       
       
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit About Us</h5>
                    </div>
                    <form method="POST" action="{{route('updateAboutUs',$abt->id)}}" >
                        @method('PUT')
                        {{ csrf_field() }}
                    <div class="card-body">
                  <div class="col-md-12">
                   
                 <div class="form-group">
                <label for="exampleFormControlTextarea1">Edit About Us</label>
              
                <textarea class="form-control" name='name' rows="3">
                    @if(isset($abt))
                    {!!$abt->name!!}
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