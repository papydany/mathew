@extends('layouts.admin')
@section('title','Posting')
@section('content')
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Posting</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/home')}}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Posting</a></li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
       
       
        <div class="row">
            <div class="col-sm-5">
                <div class="card">
                    <div class="card-header">
                        <h5>Posting</h5>
                    </div>
                    <form method="POST" action="{{('posting')}}" >
                        {{ csrf_field() }}
                    <div class="card-body">
                  <div class="col-md-12">
                   
                 <div class="form-group">
                <label for="exampleFormControlTextarea1">Posting </label>
                <textarea class="form-control" name='content' rows="6"></textarea>
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
                    <h5>Posting</h5>
                </div>
                <div class="card-body">
                    @if($v != Null)
                    {!!$v->content!!}
                    <br/>
                   <p> <a href="{{url('editPosting',$v->id)}}" class="btn btn-danger">Edit</a></p>
@if($v->status == 0)
                   <p> <a href="{{url('activatePosting',$v->id)}}" class="btn btn-success">Activate Post</a></p>
                   @else
                   <p> <a href="{{url('deactivatePosting',$v->id)}}" class="btn btn-danger">Deactivate Post</a></p>
                   @endif
                    @else
                        
                    @endif
                 </div>
                        </div>
                    
                </div>
            </div>
    
    
</section>
@endsection