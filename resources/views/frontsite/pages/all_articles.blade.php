@extends('frontsite.master')
@section('content')
<section class="inner_page_head">
    <div class="container_fuild">
    <div class="row">
        <div class="col-md-12">
            <div class="full">
                <h3>All Articles</h3>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- product section -->
<section class="product_section mb-4">
    <div class="container">
        {{-- <div class="heading_container heading_center">
            <h2>
                 <span>کتابیں</span>
            </h2>
        </div> --}}
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <a href="<?= asset('article-more-details/'.$article->id)?>" class="option1" target="_blank">
                                    More Detail
                                </a>
                            </div>
                        </div>
                        <div class="img-box">
                            <img style="height:100%; width:100%" src="{{asset($article->cover_image)}}" alt="">
                        </div>
                        <div class="detail-box" style="direction:rtl;">
                            <h5 style="direction:rtl; font-size:25px; text-align:right; font-family:Jameel Noori Nastaleeq">
                                {{$article->heading}}
                            </h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- end product section -->
@endsection
