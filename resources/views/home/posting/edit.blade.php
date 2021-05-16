@extends('layouts.admin')
@section('title','Edit Posting')
@section('content')
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Edit Posting</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Edit Posting</a></li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
       
       
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit Our Posting</h5>
                    </div>
                    <form method="POST" action="{{route('updatePosting',$v->id)}}" >
                        @method('PUT')
                        {{ csrf_field() }}
                    <div class="card-body">
                  <div class="col-md-12">
                   
                 <div class="form-group">
                <label for="exampleFormControlTextarea1">Edit Posting</label>
              
                <textarea class="form-control" name='content' rows="3">
                    @if(isset($v))
                    {!!$v->content!!}
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