@extends('layouts.admin')
@section('title','Contact')
@section('content')
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Contact</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/home')}}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Contact</a></li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
       
        @include('partial.message')	
        <div class="row">
            
            <div class="col-sm-5">
                <div class="card">
                    <div class="card-header">
                        <h5>Contact </h5>
                    </div>
                    <form method="POST" action="{{route('updateContact',$c->id)}}" >
                        @method('PUT')
                        {{ csrf_field() }}
                    <div class="card-body">
                  <div class="col-md-12">
                    <div class="form-group">
            <label for="exampleFormControlTextarea1">Phone</label>
            <input class="form-control" name='phone' value="{{$c->phone}}" required/>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Email</label>
                        <input class="form-control" name='email' value="{{$c->email}}" required/>
                                </div>
            <div class="form-group">
            <label for="exampleFormControlTextarea1">Facebook link</label>
            <input class="form-control" name='facebook' value="{{$c->facebook}}"/>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Twitter link</label>
                <input class="form-control" name='twitter' value="{{$c->twitter}}"/>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Lindlin link</label>
                    <input class="form-control" name='lindlink' value="{{$c->lindlink}}"/>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">googleplus link</label>
                        <input class="form-control" name='googleplus' value="{{$c->googleplus}}"/>
                        </div>
                   
                 <div class="form-group">
                <label for="exampleFormControlTextarea1">Address</label>
                <textarea class="form-control" name='location' rows="3">{!!$c->location!!}</textarea>
                </div>
                <button type="submit" class="btn  btn-primary">Submit</button>
                    
                </div>
            </div>
                    </form>
        </div>
            </div>
            </div>
    
    
</section>
@endsection