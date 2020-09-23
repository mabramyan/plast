@extends('layouts.app')

@section('content')

<!-- breadcam_area_start -->
<div class="breadcam_area  overlay2" style="background-image: url(/{{ $page->top_banner}});">
    <div class="bradcam_text">
        <h3>{{ $page->title}}</h3>
    </div>
</div>
<!-- breadcam_area_end -->

<!-- about_area_start -->
<div class="about_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-md-6">
                <div class="about_thumb">
                    <img src="/{{$page->image}}" alt="">
                    <div class="exprience">
                        <h1>25</h1>
                        <span>Years of Experience</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 offset-xl-1 col-md-6">
                <div class="about_info">
                    <div class="section_title">
                        <span class="sub_heading">{{__('common.about_us')}}</span>
                        <h3>{{ $page->heading}}</h3>
                        <div class="seperator"></div>
                    </div>
                    {!! $page->content !!}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about_area_end -->
<!-- lastest_project_strat -->
<div class="lastest_project">
    <div class="container">
        <div class="row align-items-center mb-80">
            <div class="col-xl-6 col-md-6">
                <div class="section_title padding-right">
                    <span class="sub_heading">{{__('common.about_us')}}</span>
                    <h3>{{ $page->mission_title}}</h3>
                    <div class="seperator"></div>
                    {!! $page->mission !!}
                </div>
            </div>
            <div class="col-xl-5 offset-xl-1 col-md-6">
                <div class="single_project_thumb">
                    
                    <img src="/{{$page->mission_image}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- lastest_project_end -->
<?php $video = !empty($page->video) ? json_decode($page->video) : []; ?>
@if(!empty($video))

<!-- youtube_video_area_start -->
<div class="youtube_video_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <div class="youtube_video " style="background-image: url({{ $video->image}});">
                    <div class="youtube_play_btn">
                        <a class="popup-video" href="{{ $video->url}}">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- youtube_video_area_end -->
@endif
<!-- dream_service_start -->
<div class="team_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-95">
                    <span class="sub_heading">Our Team members</span>
                    <h3>Meet Our Experts</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-4">
                <div class="single_team text-center">
                    <div class="thumb team_1">
                        <div class="author_links">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <h3>Lallu Mia</h3>
                    <p>Design Expert</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="single_team text-center">
                    <div class="thumb team_2">
                        <div class="author_links">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <h3>Kobra King</h3>
                    <p>Builder Expert</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="single_team text-center">
                    <div class="thumb team_3">
                        <div class="author_links">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <h3>Zamboo Ali</h3>
                    <p>3d Archtect</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- dream_service_end -->


<!-- testmonial_area_start -->
<div class="testmonial_area testimonial_bg overlay2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="testmonial_active owl-carousel">
                    <div class="single_testmonial">
                        <div class="testmonial_info text-center">
                            <div class="author">
                                <img src="img/testmonial/author.png" alt="">
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor
                                incididunt ut
                                <br> labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                                Risus
                                commodo
                                viverra <br> maecenas accumsan lacus vel facilisis. </p>
                            <div class="author_name">
                                <h4>-MITHILA</h4>
                                <span> Designer at Colorlib</span>
                            </div>
                        </div>
                    </div>
                    <div class="single_testmonial">
                        <div class="testmonial_info text-center">
                            <div class="author">
                                <img src="img/testmonial/author.png" alt="">
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor
                                incididunt ut
                                <br> labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                                Risus
                                commodo
                                viverra <br> maecenas accumsan lacus vel facilisis. </p>
                            <div class="author_name">
                                <h4>-MITHILA</h4>
                                <span> Designer at Colorlib</span>
                            </div>
                        </div>
                    </div>
                    <div class="single_testmonial">
                        <div class="testmonial_info text-center">
                            <div class="author">
                                <img src="img/testmonial/author.png" alt="">
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor
                                incididunt ut
                                <br> labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                                Risus
                                commodo
                                viverra <br> maecenas accumsan lacus vel facilisis. </p>
                            <div class="author_name">
                                <h4>-MITHILA</h4>
                                <span> Designer at Colorlib</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- testmonial_area_end -->
@endsection