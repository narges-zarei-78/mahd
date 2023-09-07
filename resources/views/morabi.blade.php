@extends('layouts', ['style_file' => 'morabi.css'])
@section('content')
    <div>
        <img src="/image/morabian.jpg" class="img-fluid" alt="...">
    </div>
    <!-- --------morabi-------- -->
    <div class="container rounded-">
        <div class="row align-items-center 4 mt-2">
            <h3 class="titr-saie-tosi text-center pt-5">مربی های <span class="titr">مهدکودک نرگس</span></h3>
        </div>
        <div class="row  my-5  row-cols-md-3 g-4 d-flex justify-content-center ms-5">
            @foreach($teachers as $teacher)
                <div class="col morabian mt-3 py-3 pb-5">
                    <div class="card image-andaze border border-0 rounded-4">
                        <img src="/storage/{{$teacher->image}}" class="card-img-top image-morabi rounded-top-4" alt="...">
                        <div class="card-body">
                            <h6 class="card-title text"> {{$teacher->name}}</h6>
                            <div class="border-top border-3 border-warning pt-2 "></div>
                            <p class="card-text">{{$teacher->madrak}} </p>
                            <p><i class="bi bi-mortarboard-fill text"></i> {{$teacher->semat}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- --------end-morabi-------- -->
@endsection