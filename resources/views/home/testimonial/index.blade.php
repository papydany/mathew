@extends('layouts.admin')
@section('title','Testimonial')
@section('content')
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Testimonial</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/home')}}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Testimonial</a></li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
       
        @include('partial.message')	
        <div class="row">
            
            <div class="col-sm-7">
                <div class="card">
                    <div class="card-header">
                        <h5>Testimonial</h5>
                    </div>
                    <form method="POST" action="{{('testimonial')}}" >
                        {{ csrf_field() }}
                    <div class="card-body">
                  <div class="col-md-12">
                    <div class="form-group">
            <label for="exampleFormControlTextarea1">Client name</label>
 <input class="form-control" name='name' value="" required/>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">School or Institution</label>
             <input class="form-control" name='school' value=""/>
                                </div>
                               
                 <div class="form-group">
                <label for="exampleFormControlTextarea1">Content</label>
                <textarea class="form-control" name='content' rows="5" required></textarea>
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