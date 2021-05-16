@extends('layouts.admin')
@section('title','About US')
@section('content')
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">About US</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">About us</a></li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
       
       
        <div class="row">
            <div class="col-sm-5">
                <div class="card">
                    <div class="card-header">
                        <h5>About Us</h5>
                    </div>
                    <form method="POST" action="{{('createAboutUs')}}" >
                        {{ csrf_field() }}
                    <div class="card-body">
                  <div class="col-md-12">
                   
                 <div class="form-group">
                <label for="exampleFormControlTextarea1">About Us</label>
                <textarea class="form-control" name='name' rows="3"></textarea>
                </div>
                <button type="submit" class="btn  btn-primary">Submit</button>
                    
                </div>
            </div>
                    </form>
        </div>
            </div>
     
        <div class="col-sm-7">
            <div class="card">
                <div class="card-header">
                    <h5>About Us</h5>
                </div>
                <div class="card-body">
                    @if($abt != Null)
                    {!!$abt->name!!}
                    <br/>
                   <p> <a href="{{url('editAboutUs',$abt->id)}}" class="btn btn-danger">Edit</a></p>
                    @else
                        
                    @endif
                 </div>
                        </div>
                    
                </div>
            </div>
    
    
</section>
@endsection