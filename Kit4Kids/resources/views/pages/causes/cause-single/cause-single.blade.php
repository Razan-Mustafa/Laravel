@extends('layouts.master')

@section('title', 'Kit')

@section('content')

    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="sk-cube-grid">
                <div class="sk-cube sk-cube1"></div>
                <div class="sk-cube sk-cube2"></div>
                <div class="sk-cube sk-cube3"></div>
                <div class="sk-cube sk-cube4"></div>
                <div class="sk-cube sk-cube5"></div>
                <div class="sk-cube sk-cube6"></div>
                <div class="sk-cube sk-cube7"></div>
                <div class="sk-cube sk-cube8"></div>
                <div class="sk-cube sk-cube9"></div>
            </div>
        </div>
        <!-- end preloader -->

        <!-- start page-title -->
        <section class="page-title">
            <div class="page-title-container">
                <div class="page-title-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col col-xs-12">
                                <h2>Single Kit</h2>
                                <ol class="breadcrumb">
                                    <li><a href="{{route('go-home')}}">Home</a></li>
                                    <li>Kit</li>
                                </ol>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div>
            </div>
        </section>
        <!-- end page-title -->
        <!-- tp-event-details-area start -->
        <div class="tp-case-details-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-8">
                        <div class="tp-case-details-wrap">
                            <div class="tp-case-details-text">
                                <div id="Description">
                                    <div class="tp-case-details-img">
                                        <img src="{{ url('/images/' . $kit->image) }}" alt="{{ $kit->title }}">
                                    </div>
                                    <div class="tp-case-content">
                                        <div class="tp-case-text-top">
                                            <h2>{{$kit->title}}</h2>
                                            <div class="case-b-text">
                                                <p>{{$kit->description}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Will discuss this with the team --}}
                                    {{-- <div class="case-bb-text">
                                        <h4>This package includes:</h4>
                                        <ul>
                                            <li>The wise man therefore always holds in these matters.</li>
                                            <li>In a free hour, when our power of choice and when nothing.</li>
                                            <li>Else he endures pains to avoid worse pains.</li>
                                            <li>We denounce with righteous indignation and dislike men. </li>
                                            <li>Which is the same as saying through.</li>
                                        </ul>
                                    </div> --}}
                                    <div class="submit-area sub-btn">
                                        <a href="{{ route('go-donate', ['kit' => $kit]) }}" class="theme-btn submit-btn">Donate Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-4 col-sm-12">
                        <div class="tp-blog-sidebar">
                            <div class="widget recent-post-widget">
                                <h3>More kits</h3>
                                    @foreach ($moreKits as $kit)
                                    <div class="posts">
                                        <div class="post">
                                            <div class="img-holder">
                                                <a href="{{ route('go-cause-single', ['cat_id' => $cat_id, 'kit' => $kit]) }}"><img src="{{ url('/images/' . $kit->image) }}" alt></a>
                                            </div>
                                            <div class="details">
                                                <h4>
                                                    <a href="{{ route('go-cause-single', ['cat_id' => $cat_id, 'kit' => $kit]) }}">{{$kit->title}}</a>
                                                </h4>
                                                <p class="fs-4">{{$kit->description}}</p>
                                                <span class="price">${{$kit->price}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tp-event-details-area end -->

    </div>

    @endsection



