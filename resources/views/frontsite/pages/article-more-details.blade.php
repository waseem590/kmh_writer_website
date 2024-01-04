
@extends('frontsite.master')
@section('content')
<section class="inner_page_head">
    <div class="container_fuild">
    <div class="row">
        <div class="col-md-12">
            <div class="full">
                <h3>More Details</h3>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="why_section layout_padding">
    <div class="container">
        <div class="row" style="direction:rtl; text-align:right; font-family: Jameel Noori Nastaleeq">
            <div class="col-md-12" style="font-size:20px; direction:rtl; text-align:justify; font-family: Jameel Noori Nastaleeq">
                {!! $article->description !!}
            </div>
        </div>
        @if($article->letter_image)
        <div class="row" style="direction:rtl; text-align:right; font-family: Jameel Noori Nastaleeq">
            <div  class="col-md-12" style="font-size:20px; direction:rtl; text-align:center; font-family: Jameel Noori Nastaleeq">
                    <img style="height:100%; width:60%" src="{{asset($article->letter_image)}}" alt="">
            </div>
        </div>
        @endif
        @if($article->letter_image_1)
        <div class="row mt-2" style="direction:rtl; text-align:center; font-family: Jameel Noori Nastaleeq">
            <div class="col-md-12" style="font-size:20px; direction:rtl; text-align:center; font-family: Jameel Noori Nastaleeq">
                    <img style="height:100%; width:60%" src="{{asset($article->letter_image_1)}}" alt="">
            </div>
        </div>
        @endif
    </div>
</section>
@endsection
