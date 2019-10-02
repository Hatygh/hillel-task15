@extends('2-col-layout')

@section('title', $title)

@section('container')
<div class="blog-posts-area">

    <!-- Featured Post Area -->
    <div class="featured-posts">
        <a href="#"><img src="img/blog-img/1.jpg" alt=""></a>
        <!-- Featured Post Content -->
        <div class="featured-post-content">
            <p>MAY 8, 2018 / foody</p>
            <a href="#" class="post-title">
                <h2>Quick Vegan Enchiladas with Sweet Potato Sauce</h2>
            </a>
        </div>
    </div>

    <!-- Single Blog Post -->
    <div class="single-blog-post d-flex flex-wrap mt-50">
        <!-- Thumbnail -->
        <div class="post-thumbnail mb-50">
            <a href="#"><img src="img/blog-img/8.jpg" alt=""></a>
        </div>
        <!-- Content -->
        <div class="post-content mb-50">
            <p class="post-date">MAY 8, 2018 / foody</p>
            <a href="#" class="post-title">
                <h4>Vegetarian Spring Pho with Sweet Potato Noodles and Heirloom Beans</h4>
            </a>
            <div class="post-meta">
                <a href="#"><span>by</span> Sarah Jenks</a>
                <a href="#"><i class="fa fa-eye"></i> 192</a>
                <a href="#"><i class="fa fa-comments"></i> 08</a>
            </div>
            <p class="post-excerpt">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
            <a href="#" class="read-more-btn">Continue Reading <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
        </div>
        <!-- Post Curve Line -->
        <img class="post-curve-line" src="img/core-img/post-curve-line.png" alt="">
    </div>

    <!-- Single Blog Post -->
    <div class="single-blog-post d-flex flex-wrap mt-50">
        <!-- Thumbnail -->
        <div class="post-thumbnail mb-50">
            <a href="#"><img src="img/blog-img/9.jpg" alt=""></a>
        </div>
        <!-- Content -->
        <div class="post-content mb-50">
            <p class="post-date">MAY 12, 2018 / drinks</p>
            <a href="#" class="post-title">
                <h4>Grain-Free Sweet &amp; Savory Activated Walnut Granola</h4>
            </a>
            <div class="post-meta">
                <a href="#"><span>by</span> Sarah Jenks</a>
                <a href="#"><i class="fa fa-eye"></i> 192</a>
                <a href="#"><i class="fa fa-comments"></i> 08</a>
            </div>
            <p class="post-excerpt">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
            <a href="#" class="read-more-btn">Continue Reading <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
        </div>
        <!-- Post Curve Line -->
        <img class="post-curve-line" src="img/core-img/post-curve-line.png" alt="">
    </div>

    <!-- Single Blog Post -->
    <div class="single-blog-post d-flex flex-wrap mt-50">
        <!-- Thumbnail -->
        <div class="post-thumbnail mb-50">
            <a href="#"><img src="img/blog-img/10.jpg" alt=""></a>
        </div>
        <!-- Content -->
        <div class="post-content mb-50">
            <p class="post-date">MAY 15, 2018 / Coffee</p>
            <a href="#" class="post-title">
                <h4>Self-Care Interview Series: Gabrielle Russomagno</h4>
            </a>
            <div class="post-meta">
                <a href="#"><span>by</span> Sarah Jenks</a>
                <a href="#"><i class="fa fa-eye"></i> 192</a>
                <a href="#"><i class="fa fa-comments"></i> 08</a>
            </div>
            <p class="post-excerpt">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
            <a href="#" class="read-more-btn">Continue Reading <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
        </div>
        <!-- Post Curve Line -->
        <img class="post-curve-line" src="img/core-img/post-curve-line.png" alt="">
    </div>

    <!-- Single Blog Post -->
    <div class="single-blog-post d-flex flex-wrap mt-50">
        <!-- Thumbnail -->
        <div class="post-thumbnail mb-50">
            <a href="#"><img src="img/blog-img/11.jpg" alt=""></a>
        </div>
        <!-- Content -->
        <div class="post-content mb-50">
            <p class="post-date">MAY 20, 2018 / foody</p>
            <a href="#" class="post-title">
                <h4>Green Skillet Pizza with Asparagus and Pesto</h4>
            </a>
            <div class="post-meta">
                <a href="#"><span>by</span> Sarah Jenks</a>
                <a href="#"><i class="fa fa-eye"></i> 192</a>
                <a href="#"><i class="fa fa-comments"></i> 08</a>
            </div>
            <p class="post-excerpt">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
            <a href="#" class="read-more-btn">Continue Reading <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
        </div>
        <!-- Post Curve Line -->
        <img class="post-curve-line" src="img/core-img/post-curve-line.png" alt="">
    </div>

    <!-- Single Blog Post -->
    <div class="single-blog-post d-flex flex-wrap mt-50">
        <!-- Thumbnail -->
        <div class="post-thumbnail mb-50">
            <a href="#"><img src="img/blog-img/12.jpg" alt=""></a>
        </div>
        <!-- Content -->
        <div class="post-content mb-50">
            <p class="post-date">MAY 28, 2018 / health</p>
            <a href="#" class="post-title">
                <h4>Green Skillet Pizza with Asparagus and Pesto</h4>
            </a>
            <div class="post-meta">
                <a href="#"><span>by</span> Sarah Jenks</a>
                <a href="#"><i class="fa fa-eye"></i> 192</a>
                <a href="#"><i class="fa fa-comments"></i> 08</a>
            </div>
            <p class="post-excerpt">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
            <a href="#" class="read-more-btn">Continue Reading <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
        </div>
        <!-- Post Curve Line -->
        <img class="post-curve-line" src="img/core-img/post-curve-line.png" alt="">
    </div>

</div>

<!-- Pager -->
<ol class="foode-pager mt-50">
    <li><a href="#"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Newer</a></li>
    <li><a href="#">Older <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
</ol>
@endsection

@section('sidebar')
<!-- ##### Single Widget Area ##### -->
<div class="single-widget-area mt-0">
    <form class="search-form" action="#" method="post">
        <input type="search" name="search" class="form-control" placeholder="Search...">
        <button><i class="fa fa-send"></i></button>
    </form>
</div>

<!-- ##### Single Widget Area ##### -->
<div class="single-widget-area">
    <!-- Title -->
    <div class="widget-title">
        <h6>About Me</h6>
    </div>
    <!-- Thumbnail -->
    <div class="about-thumbnail">
        <img src="img/blog-img/about-me.jpg" alt="">
    </div>
    <!-- Content -->
    <div class="widget-content text-center">
        <img src="img/core-img/signature.png" alt="">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
    </div>
</div>
@parent
@endsection