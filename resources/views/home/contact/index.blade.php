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
                    <form method="POST" action="{{('createContact')}}" >
                        {{ csrf_field() }}
                    <div class="card-body">
                  <div class="col-md-12">
                    <div class="form-group">
            <label for="exampleFormControlTextarea1">Phone</label>
            <input class="form-control" name='phone' value="" required/>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Email</label>
                        <input class="form-control" name='email' value="" required/>
                                </div>
            <div class="form-group">
            <label for="exampleFormControlTextarea1">Facebook link</label>
            <input class="form-control" name='facebook' value=""/>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Twitter link</label>
                <input class="form-control" name='twitter' value=""/>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Lindlin link</label>
                    <input class="form-control" name='lindlink' value=""/>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">googleplus link</label>
                        <input class="form-control" name='googleplus' value=""/>
                        </div>
                   
                 <div class="form-group">
                <label for="exampleFormControlTextarea1">Address</label>
                <textarea class="form-control" name='location' rows="3"></textarea>
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
                    <h5>Contact Details</h5>
                </div>
                <div class="card-body">
                    @if($c != Null)
                    <p> <b>Phone :</b>{{$c->phone}} </p>
                    <p> <b>email :</b>{{$c->email}} </p>
                    <p> <b>facebook link :</b>{{$c->facebook}} </p>
                   <p> <b>Twitter :</b>{{$c->twitter}} </p>
                   <p> <b>Lindlin :</b>{{$c->lindlin}} </p>
                   <p> <b>goegleplus :</b>{{$c->goegleplus}} </p>
                   <p> <b>Address :</b>{!!$c->location!!} </p>
                   <a href="{{url('editContact',$c->id)}}" class="btn btn-danger">Edit</a>
                   
                    @else
                        
                    @endif
                 </div>
                        </div>
                    
                </div>
            </div>
    
    
</section>
@endsection