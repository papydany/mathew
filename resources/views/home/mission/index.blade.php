@extends('layouts.admin')
@section('title','Mission')
@section('content')
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Mission</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/home')}}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Mission</a></li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
       
       
        <div class="row">
            <div class="col-sm-5">
                <div class="card">
                    <div class="card-header">
                        <h5>Mission</h5>
                    </div>
                    <form method="POST" action="{{('mission')}}" >
                        {{ csrf_field() }}
                    <div class="card-body">
                  <div class="col-md-12">
                   
                 <div class="form-group">
                <label for="exampleFormControlTextarea1">Mission</label>
                <textarea class="form-control" name='content' rows="3"></textarea>
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
                    <h5>Our mission</h5>
                </div>
                <div class="card-body">
                    @if($m != Null)
                    {!!$m->content!!}
                    <br/>
                   <p> <a href="{{url('editMission',$m->id)}}" class="btn btn-danger">Edit</a></p>
                    @else
                        
                    @endif
                 </div>
                        </div>
                    
                </div>
            </div>
    
    
</section>
@endsection