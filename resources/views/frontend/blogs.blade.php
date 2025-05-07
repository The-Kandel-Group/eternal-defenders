@extends('frontend.master')
@section('content')

    <section id="blog">
        <div class="blog-post-con dots-right-img">
            <div class="container-fluid-blog overlay-content" style="margin: 100px;">
                <form action="{{route('blogs')}}" method="get" class="in-between">
                    <div class="weight-footer-item-form">
                        <div class="weight-footer-item-form-input">
                            <input required type="text" name="keyword" placeholder="Search..."
                                   value="{{ request('keyword') }}">
                            <button type="submit" class="border-0" value="">
                                <img src="{{asset('frontend/assets/image/submit-img.png')}}"
                                     alt="submit-img"
                                     class="img-fluid">
                            </button>
                        </div>
                    </div>
                </form>
                <div class="row">
                    @foreach($blogs as $blogsKey =>$blogsDatum)
                        @php
                            if ($blogsKey % 2 == 0) {
                                $slideLeftRight = 'mb-lg-0 mb-md-0 mb-4 wow slideInLeft';
                            } else {
                                $slideLeftRight = 'wow slideInRight';
                            }
                        @endphp

                        <div class="col-lg-4 col-md-4 col-12 mt-4 {{$slideLeftRight}} ">
                            <div class="blog-post-item">
                                <div class="blog-post-item-img">
                                    <a href="#">
                                        <figure class="mb-0">
                                            <a href="{{route('blog.detail',$blogsDatum->slug)}}"> <img
                                                    src="{{$blogsDatum->image??asset('frontend/assets/image/blog-post-img1.png')}}"
                                                    alt="blog-post-img" class="img-fluid"
                                                    style="object-fit: cover; height:540px;">
                                            </a>
                                        </figure>
                                    </a>
                                </div>
                                <div class="blog-post-item-title">
                                    <a href="{{route('blog.detail',$blogsDatum->slug)}}">
                                        <h4 class="mb-3">{{$blogsDatum->title}}
                                        </h4>
                                    </a>
                                    <a href="{{route('blog.detail',$blogsDatum->slug)}}"
                                       class="blog-post-item-title-link">
                                        Read more
                                        <i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @if(!$blogs->count())
                            <span class="in-between">No Data found.</span>
                    @endif
                    <div class="col-12">
                        @if ($blogs->hasPages())
                            <nav class="mt-4 d-flex justify-content-center">
                                <ul class="pagination custom-dark-pagination">
                                    {{-- Previous Page Link --}}
                                    @if ($blogs->onFirstPage())
                                        <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
                                    @else
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $blogs->previousPageUrl() }}" rel="prev">&laquo;</a>
                                        </li>
                                    @endif

                                    {{-- Pagination Elements --}}
                                    @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                                        @if ($page == $blogs->currentPage())
                                            <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                                        @else
                                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                        @endif
                                    @endforeach

                                    {{-- Next Page Link --}}
                                    @if ($blogs->hasMorePages())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $blogs->nextPageUrl() }}" rel="next">&raquo;</a>
                                        </li>
                                    @else
                                        <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
                                    @endif
                                </ul>
                            </nav>
                        @endif

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
