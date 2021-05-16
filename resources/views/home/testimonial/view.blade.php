@extends('layouts.admin')
@section('title','View Testimonial')
@section('content')


<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">View Testimonial</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/home')}}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">View Testimonial</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
       
        @include('partial.message')	
        <div class="row">     
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>View Testimonial</h5>
                </div>
                <div class="card-body">
                    @if($t != Null)
                    <?php $i =1; ?> 
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Student</th>
                                <th>School</th>
                                <th>Content</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($t as $v)
                           <tr>
                            <td>{{$i++}} </td>
                                <td>{{$v->name}} </td>
                                <td>{{$v->school}} </td>
                                <td>{!!$v->content!!}</td>
                                <td><a href="{{url('editTestimonial',$v->id)}}" class="btn btn-danger">Edit</a></td>
                            </tr>
                            @endforeach
                           </tbody>
                    </table>
                    
                </div>
              
              
              
                @endif
                 </div>
                        </div>
                    
                </div>
            </div>
    
    
</section>
@endsection