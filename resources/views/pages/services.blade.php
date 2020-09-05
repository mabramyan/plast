@extends('layouts.app')

@section('content')

<!-- project_details_start -->
<div class="project_details">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="project_details_left">
                    <div class="single_details">
                        <h3>{{$title}}</h3>
                       {!! $page->content !!}
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="projects_details_info">
                    <div class="details_thumb">
                        <img src="/img/project/details_info.png" alt="">
                    </div>
                    <div class="details_info">
                        <h3>Project info</h3>
                        <div class="details_info_list">
                            <div class="single_details_info d-flex justify-content-between align-items-center">
                                <span class="left_info">client</span>
                                <span class="right_info">Colorlib</span>
                            </div>
                            <div class="single_details_info d-flex justify-content-between align-items-center">
                                <span class="left_info">Categories:</span>
                                <span class="right_info">Exterior</span>
                            </div>
                            <div class="single_details_info d-flex justify-content-between align-items-center">
                                <span class="left_info">Date:</span>
                                <span class="right_info">July 14th, 2019</span>
                            </div>
                            <div class="single_details_info d-flex justify-content-between align-items-center">
                                <span class="left_info">Rating:</span>
                                <span class="right_info star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                            </div>
                            <div class="single_details_info d-flex justify-content-between align-items-center">
                                <span class="left_info">Website:</span>
                                <span class="right_info"><a href="#">examplesite.com</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project_share">
                    <div class="single_details_info d-flex justify-content-between align-items-center">
                        <span class="left_info">Share Project:</span>
                        <span class="right_info">
                            <a href="#"> <i class="fa fa-facebook"></i> </a>
                            <a href="#"> <i class="fa fa-twitter"></i> </a>
                            <a href="#"> <i class="fa fa-instagram"></i> </a>
                            <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- project_details_end -->

<!-- testmonial_area_start -->
<div class="testmonial_area testimonial_bg overlay2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="testmonial_active owl-carousel">
                    <div class="single_testmonial">
                        <div class="testmonial_info text-center">
                            <div class="author">
                                <img src="/img/testmonial/author.png" alt="">
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
                                <img src="/img/testmonial/author.png" alt="">
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
                                <img src="/img/testmonial/author.png" alt="">
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

<!-- messege_area_start -->
<div class="messege_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-md-6">
                <div class="messege_thumb">
                    <img src="/img/testmonial/mesege.png" alt="">
                </div>
            </div>
            <div class="col-xl-5 offset-xl-1 col-md-6">
                <div class="section_title mb-20">
                    <span class="sub_heading">Contact Us</span>
                    <h3>Send your message</h3>
                    <div class="seperator"></div>
                </div>
                <form action="#" class="messege">
                    <input type="email" placeholder="Your Email">
                    <input type="text" placeholder="Subject">
                    <textarea placeholder="Messege"></textarea>
                    <button class="boxed-btn">SEND US</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- messege_area_end -->




@endsection