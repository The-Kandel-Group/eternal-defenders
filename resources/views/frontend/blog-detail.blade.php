@extends('frontend.master')
@section('content')
    <style>
        p {
            font-size: 18px;
            line-height: 32px;
            color: #474b58;
        }
    </style>
    <div class="container-fluid py-5 px-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <h1 class="mb-3 text-secondary">{{$post?->title}}</h1>

                <img src="{{asset($post?->image)}}" class="img-fluid rounded mb-4" alt="Blog Image">

                <div class="content">
                    {!! $post?->body !!}
                </div>

            </div>
        </div>
    </div>
@endsection
