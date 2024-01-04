@extends('frontsite.master')
@section('content')
<section class="inner_page_head">
    <div class="container_fuild">
    <div class="row">
        <div class="col-md-12">
            <div class="full">
                <h3>All Books</h3>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- product section -->
<section class="product_section">
    <div class="container">
        {{-- <div class="heading_container heading_center">
            <h2>
                 <span>کتابیں</span>
            </h2>
        </div> --}}
        <div class="row">
            @foreach ($books as $book)
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                               <a href="<?= asset('more-details/'.$book->id)?>" class="option1" target="_blank">
                                    More Detail
                                </a>
                                <a href="{{ asset($book->book_url) }}" target="_blank" download class="option2">
                                    Download
                                </a>
                            </div>
                        </div>
                        <div class="img-box">
                            <img style="height:100%; width:100%" src="{{asset($book->cover_image)}}" alt="">
                        </div>
                        <div class="detail-box" style="direction:rtl;">
                            <h5 style="direction:rtl; font-size:25px; text-align:right; font-family:Jameel Noori Nastaleeq">
                                {{$book->heading}}
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
