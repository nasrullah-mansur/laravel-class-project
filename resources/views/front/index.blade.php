@extends('layouts.front')

@section('content')
<main>
    <!-- hero-area start -->
    <section class="hero-area ">
        <div class="slider-active slider-arrow">
            @foreach ($sliders as $slider)
            <div class="single-slider slide-height d-flex align-items-end" data-overlay="dark-gradient"
                style="background-image: url({{ asset($slider->image) }})">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="slider pb-60">
                                <div class="slider__text">
                                    <h3 class="mb-15" data-animation="fadeInUp" data-delay=".4s">{{ $slider->content }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- hero-area end -->



    <!-- news area -->
    <section class="news-area mt-60">
        <!-- trendy news -->
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="postbox mb-20">
                                <div class="postbox__thumb">
                                    <a href="#">
                                        <img src="assets/img/tech/t1.jpg" alt="hero image">
                                    </a>
                                </div>
                            </div>
                            <div class="postbox__text mb-30">
                                <h4 class="title-16 font-600 pr-0">
                                    <a href="#">Critic’s notebook deep dives into jutice from Shakespeare Finch.</a>
                                </h4>
                                <div class="postbox__text-meta pb-10">
                                    <ul>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>01 Sep 2018</span>
                                        </li>
                                        <li>
                                            <i class="far fa-comment"></i>
                                            <span>(03)</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="desc-text mb-20">
                                    <p>But I must explain to you how all this mistaken idea of denouncing sure and
                                        praising pain was born and I will give you a
                                        complete account.</p>
                                </div>
                                <a href="#" class="btn btn-soft">read more</a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="postbox mb-20">
                                <div class="postbox__thumb">
                                    <a href="#">
                                        <img src="assets/img/tech/t2.jpg" alt="hero image">
                                    </a>
                                </div>
                            </div>
                            <div class="postbox__text mb-30">
                                <h4 class="title-16 font-600 pr-0">
                                    <a href="#">Few Have Lost Races but All Republicans Have Lost Sub Special
                                        Elections.</a>
                                </h4>
                                <div class="postbox__text-meta pb-10">
                                    <ul>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>01 Sep 2018</span>
                                        </li>
                                        <li>
                                            <i class="far fa-comment"></i>
                                            <span>(03)</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="desc-text mb-20">
                                    <p>But I must explain to you how all this mistaken idea of denouncing sure and
                                        praising pain was born and I will give you a
                                        complete account.</p>
                                </div>
                                <a href="#" class="btn btn-soft">read more</a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="postbox mb-20">
                                <div class="postbox__thumb">
                                    <a href="#">
                                        <img src="assets/img/tech/t3.jpg" alt="hero image">
                                    </a>
                                </div>
                            </div>
                            <div class="postbox__text mb-30">
                                <h4 class="title-16 font-600 pr-0">
                                    <a href="#">Few Have Lost Races but All Republicans Have Lost Sub Special
                                        Elections.</a>
                                </h4>
                                <div class="postbox__text-meta pb-10">
                                    <ul>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>01 Sep 2018</span>
                                        </li>
                                        <li>
                                            <i class="far fa-comment"></i>
                                            <span>(03)</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="desc-text mb-20">
                                    <p>But I must explain to you how all this mistaken idea of denouncing sure and
                                        praising pain was born and I will give you a
                                        complete account.</p>
                                </div>
                                <a href="#" class="btn btn-soft">read more</a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="postbox mb-20">
                                <div class="postbox__thumb">
                                    <a href="#">
                                        <img src="assets/img/tech/t4.jpg" alt="hero image">
                                    </a>
                                </div>
                            </div>
                            <div class="postbox__text mb-30">
                                <h4 class="title-16 font-600 pr-0">
                                    <a href="#">Few Have Lost Races but All Republicans Have Lost Sub Special
                                        Elections.</a>
                                </h4>
                                <div class="postbox__text-meta pb-10">
                                    <ul>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>01 Sep 2018</span>
                                        </li>
                                        <li>
                                            <i class="far fa-comment"></i>
                                            <span>(03)</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="desc-text mb-20">
                                    <p>But I must explain to you how all this mistaken idea of denouncing sure and
                                        praising pain was born and I will give you a
                                        complete account.</p>
                                </div>
                                <a href="#" class="btn btn-soft">read more</a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="postbox mb-20">
                                <div class="postbox__thumb">
                                    <a href="#">
                                        <img src="assets/img/tech/t5.jpg" alt="hero image">
                                    </a>
                                </div>
                            </div>
                            <div class="postbox__text mb-30">
                                <h4 class="title-16 font-600 pr-0">
                                    <a href="#">Few Have Lost Races but All Republicans Have Lost Sub Special
                                        Elections.</a>
                                </h4>
                                <div class="postbox__text-meta pb-10">
                                    <ul>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>01 Sep 2018</span>
                                        </li>
                                        <li>
                                            <i class="far fa-comment"></i>
                                            <span>(03)</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="desc-text mb-20">
                                    <p>But I must explain to you how all this mistaken idea of denouncing sure and
                                        praising pain was born and I will give you a
                                        complete account.</p>
                                </div>
                                <a href="#" class="btn btn-soft">read more</a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="postbox mb-20">
                                <div class="postbox__thumb">
                                    <a href="#">
                                        <img src="assets/img/tech/t6.jpg" alt="hero image">
                                    </a>
                                </div>
                            </div>
                            <div class="postbox__text mb-30">
                                <h4 class="title-16 font-600 pr-0">
                                    <a href="#">Few Have Lost Races but All Republicans Have Lost Sub Special
                                        Elections.</a>
                                </h4>
                                <div class="postbox__text-meta pb-10">
                                    <ul>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>01 Sep 2018</span>
                                        </li>
                                        <li>
                                            <i class="far fa-comment"></i>
                                            <span>(03)</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="desc-text mb-20">
                                    <p>But I must explain to you how all this mistaken idea of denouncing sure and
                                        praising pain was born and I will give you a
                                        complete account.</p>
                                </div>
                                <a href="#" class="btn btn-soft">read more</a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="postbox mb-20">
                                <div class="postbox__thumb">
                                    <a href="#">
                                        <img src="assets/img/tech/t7.jpg" alt="hero image">
                                    </a>
                                </div>
                            </div>
                            <div class="postbox__text mb-30">
                                <h4 class="title-16 font-600 pr-0">
                                    <a href="#">Few Have Lost Races but All Republicans Have Lost Sub Special
                                        Elections.</a>
                                </h4>
                                <div class="postbox__text-meta pb-10">
                                    <ul>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>01 Sep 2018</span>
                                        </li>
                                        <li>
                                            <i class="far fa-comment"></i>
                                            <span>(03)</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="desc-text mb-20">
                                    <p>But I must explain to you how all this mistaken idea of denouncing sure and
                                        praising pain was born and I will give you a
                                        complete account.</p>
                                </div>
                                <a href="#" class="btn btn-soft">read more</a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="postbox mb-20">
                                <div class="postbox__thumb">
                                    <a href="#">
                                        <img src="assets/img/tech/t8.jpg" alt="hero image">
                                    </a>
                                </div>
                            </div>
                            <div class="postbox__text mb-30">
                                <h4 class="title-16 font-600 pr-0">
                                    <a href="#">Few Have Lost Races but All Republicans Have Lost Sub Special
                                        Elections.</a>
                                </h4>
                                <div class="postbox__text-meta pb-10">
                                    <ul>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>01 Sep 2018</span>
                                        </li>
                                        <li>
                                            <i class="far fa-comment"></i>
                                            <span>(03)</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="desc-text mb-20">
                                    <p>But I must explain to you how all this mistaken idea of denouncing sure and
                                        praising pain was born and I will give you a
                                        complete account.</p>
                                </div>
                                <a href="#" class="btn btn-soft">read more</a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="postbox mb-20">
                                <div class="postbox__thumb">
                                    <a href="#">
                                        <img src="assets/img/tech/t9.jpg" alt="hero image">
                                    </a>
                                </div>
                            </div>
                            <div class="postbox__text mb-30">
                                <h4 class="title-16 font-600 pr-0">
                                    <a href="#">Few Have Lost Races but All Republicans Have Lost Sub Special
                                        Elections.</a>
                                </h4>
                                <div class="postbox__text-meta pb-10">
                                    <ul>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>01 Sep 2018</span>
                                        </li>
                                        <li>
                                            <i class="far fa-comment"></i>
                                            <span>(03)</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="desc-text mb-20">
                                    <p>But I must explain to you how all this mistaken idea of denouncing sure and
                                        praising pain was born and I will give you a
                                        complete account.</p>
                                </div>
                                <a href="#" class="btn btn-soft">read more</a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="postbox mb-20">
                                <div class="postbox__thumb">
                                    <a href="#">
                                        <img src="assets/img/tech/t10.jpg" alt="hero image">
                                    </a>
                                </div>
                            </div>
                            <div class="postbox__text mb-30">
                                <h4 class="title-16 font-600 pr-0">
                                    <a href="#">Few Have Lost Races but All Republicans Have Lost Sub Special
                                        Elections.</a>
                                </h4>
                                <div class="postbox__text-meta pb-10">
                                    <ul>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>01 Sep 2018</span>
                                        </li>
                                        <li>
                                            <i class="far fa-comment"></i>
                                            <span>(03)</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="desc-text mb-20">
                                    <p>But I must explain to you how all this mistaken idea of denouncing sure and
                                        praising pain was born and I will give you a
                                        complete account.</p>
                                </div>
                                <a href="#" class="btn btn-soft">read more</a>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-10 mb-60">
                        <div class="col-xl-12">
                            <div class="pagination">
                                <ul>
                                    <li>
                                        <a href="#">Prev</a>
                                    </li>
                                    <li class="active">
                                        <a href="#">
                                            <span>1</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>3</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="widget widget-border mb-40">
                        <h3 class="widget-title">Categories</h3>
                        <ul>
                            <li><a href="#">Business <span>02</span></a></li>
                            <li><a href="#">Politic <span>05</span></a></li>
                            <li><a href="#">Fashion <span>01</span></a></li>
                            <li><a href="#">Corporate <span>03</span></a></li>
                            <li><a href="#">Football <span>07</span></a></li>
                            <li><a href="#">Magazine <span>06</span></a></li>
                        </ul>
                    </div>
                    <div class="widget widget-border mb-40">
                        <h3 class="widget-title">Popular posts</h3>
                        <div class="post__small mb-30">
                            <div class="post__small-thumb f-left">
                                <a href="#">
                                    <img src="assets/img/trendy/xs/xs-1.jpg" alt="hero image">
                                </a>
                            </div>
                            <div class="post__small-text fix pl-10">
                                <span class="sm-cat">
                                    <a href="#">Fashion</a>
                                </span>
                                <h4 class="title-13 pr-0">
                                    <a href="#">Husar asks expenses authority to entitlements after Bruno</a>
                                </h4>
                                <div class="post__small-text-meta">
                                    <ul>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>01 Sep 2018</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="post__small mb-30">
                            <div class="post__small-thumb f-left">
                                <a href="#">
                                    <img src="assets/img/trendy/xs/xs-2.jpg" alt="hero image">
                                </a>
                            </div>
                            <div class="post__small-text fix pl-10">
                                <span class="sm-cat">
                                    <a href="#">Fashion</a>
                                </span>
                                <h4 class="title-13 pr-0">
                                    <a href="#">Researchers claim majo throug in the fight to cure fibrosis</a>
                                </h4>
                                <div class="post__small-text-meta">
                                    <ul>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>01 Sep 2018</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="post__small mb-30">
                            <div class="post__small-thumb f-left">
                                <a href="#">
                                    <img src="assets/img/trendy/xs/xs-3.jpg" alt="hero image">
                                </a>
                            </div>
                            <div class="post__small-text fix pl-10">
                                <span class="sm-cat">
                                    <a href="#">Fashion</a>
                                </span>
                                <h4 class="title-13 pr-0">
                                    <a href="#">Nahan downplays Liberal lership tensions after white ant</a>
                                </h4>
                                <div class="post__small-text-meta">
                                    <ul>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>01 Sep 2018</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="post__small">
                            <div class="post__small-thumb f-left">
                                <a href="#">
                                    <img src="assets/img/trendy/xs/xs-4.jpg" alt="hero image">
                                </a>
                            </div>
                            <div class="post__small-text fix pl-10">
                                <span class="sm-cat">
                                    <a href="#">Travel</a>
                                </span>
                                <h4 class="title-13 pr-0">
                                    <a href="#">Farmers plead for bullets to put down emaciated stock</a>
                                </h4>
                                <div class="post__small-text-meta">
                                    <ul>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>01 Sep 2018</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget-border mb-40">
                        <h3 class="widget-title">Subscribe our Newsletter!</h3>
                        <p>Subscribe to our email newsletter to receive useful articles and special offers.</p>
                        <form class="widget-subscribe" action="#">
                            <input type="email" placeholder="Enter your email :">
                            <button class="btn">subscribe</button>
                        </form>
                    </div>
                    <div class="widget widget-border mb-40">
                        <h3 class="widget-title">Most visited</h3>
                        <div class="postbox">
                            <div class="postbox__thumb">
                                <a href="#">
                                    <img src="assets/img/details/sidebar-post.jpg" alt="hero image">
                                </a>
                            </div>
                            <div class="postbox__text pt-15">
                                <div class="postbox__text-meta pb-10">
                                    <ul>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>01 Sep 2018</span>
                                        </li>
                                        <li>
                                            <i class="far fa-comment"></i>
                                            <span>(03)</span>
                                        </li>
                                    </ul>
                                </div>
                                <h4 class="title-16 pr-0">
                                    <a href="#">Paul Manafort’s Accountant Testifies She Helped Alter Financial
                                        Documents</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget-border mb-40">
                        <h3 class="widget-title">Popular Tags</h3>
                        <div class="tagcloud">
                            <a href="#">Fashion</a>
                            <a href="#">Politic</a>
                            <a href="#">Modern</a>
                            <a href="#">Tips</a>
                            <a href="#">Nav</a>
                            <a href="#">Jason</a>
                            <a href="#">Roster</a>
                            <a href="#">Boat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- trendy news end -->
    </section>
    <!-- news area end -->

</main>
@endsection