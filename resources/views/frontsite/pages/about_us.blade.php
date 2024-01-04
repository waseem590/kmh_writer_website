@extends('frontsite.master')
@section('content')
<section class="inner_page_head">
    <div class="container_fuild">
    <div class="row">
        <div class="col-md-12">
            <div class="full">
                <h3>About Us</h3>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- product section -->
<section class="product_section">
    <div class="container">
        <div class="row">
             <div class="col-md-12 text-center">
                <img src="<?= asset('assets/images/bio-data.gif') ?>">
            </div>
            <div class="col-md-12 text-center">
                <img width="600px" style="margin-right:81px"  src="<?= asset('assets/images/book_list.jpg') ?>">
            </div>
        </div>
    </div>
</section>
<!-- end product section -->
@endsection
