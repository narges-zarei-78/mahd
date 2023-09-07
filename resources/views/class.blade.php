@extends('layouts', ['style_file' => 'index.css'])
@section('content')
    <!-- --------class-------- -->
    <div>
        <img src="/image/class-ha.jpg" class="img-fluid" alt="...">
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mb-5" style="max-width: 600px;">
                <h4 class="mb-3 fw-bold titr-saie-tosi">کلاس های مهد کودک</h4>
                <p>با آموزش های هدفمند و منحصربه فرد مهارت های فکری، رفتاری و زندگی
                    فرزندان خود را در مسیر صحیح قرار دهید </p>
            </div>
            <div class="row g-4 align-items-center">
                @foreach($classes as $class)
                    <div class="col-lg-4 col-md-6">
                        <div class="classes-item">
                            <div class="bg-asli rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle image-class " src="/storage/{{$class->image}}" alt="">
                            </div>
                            <div class="bg-asli rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">{{$class->title}}</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <div class="ms-3">
                                            <h6 class="text mb-1">{{$class->user->name}}</h6>
                                            <small>{{$class->user->semat}} </small>
                                        </div>
                                    </div>
                                    <a class=" btn btn-narengi btn-warning text-white rounded-pill py-2 px-3" href="/admin/lesson/{{$class->id}}/show">مشاهده</a>
                                </div>
                                <div class="row g-1">
                                    <div class="col-4">
                                        <div class="border-top border-3 border-primary pt-2">
                                            <h6 class="text mb-1">سن:</h6>
                                            <small>{{$class->for_age}}</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-success pt-2">
                                            <h6 class="text-success mb-1">ساعت کلاس:</h6>
                                            <small>{{$class->class_time}}</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-warning pt-2">
                                            <h6 class="text-warning mb-1">ظرفیت:</h6>
                                            <small>{{$class->capacity}} کودک</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- --------end-class-------- -->
@endsection