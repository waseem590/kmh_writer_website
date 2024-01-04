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
            <div >
                <h1 style="direction:rtl; text-align:right; font-family: Jameel Noori Nastaleeq">{{$book->heading}}</h1>
            </div>
            <div class="col-md-12" style="font-size:20px; direction:rtl; text-align:justify; font-family: Jameel Noori Nastaleeq">
                {!! $book->description !!}
            </div>

            @if(!empty($book->book_url))
            <div class="col-md-12 options text-center">
                <a href="{{ asset($book->book_url) }}" class="more-details">
                    Download Book
                </a>
            </div>
            @endif
        </div>
    </div>
</section>
@endsection
