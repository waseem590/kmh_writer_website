@extends('frontsite.master')
@section('content')
<section class="inner_page_head">
    <div class="container_fuild">
    <div class="row">
        <div class="col-md-12">
            <div class="full">
                <h3>My Family</h3>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- product section -->
<section class="product_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mt-2">
                <img src="<?= asset('assets/images/all-family.jpeg') ?>">
                <label style="direction:rtl; text-align:right; font-family: Jameel Noori Nastaleeq; font-size:30px">اُسوہ مطہرہ احمد خان، ماہ نور فاطمہ علی خان، خانم کوثر خالد، رومائشہ وجیح، سید وجیح، خالد محمود خان ، علی خالد خان، امائرہ علی خان، علی خالد خان</label>
            </div>
            <div class="col-md-12 text-center mt-4">
                <img style="width: 800px; height:600px" src="<?= asset('assets/images/son-and-daughter.jpeg') ?>">
                <label style="direction:rtl; text-align:right; font-family: Jameel Noori Nastaleeq; font-size:30px">علی خالد خان (بھائی )۔عائشہ خالد خان ۔ احمد خالد خان (بھائی )</label>
            </div>
            <div class="col-md-12 text-center mt-4">
                <img style="width: 400px; height:400px" src="<?= asset('assets/images/baby.jpeg') ?>">
            </div>
            <div class="col-md-12 text-center mt-4">
                <label style="direction:rtl; text-align:right; font-family: Jameel Noori Nastaleeq; font-size:30px">بےبی انفال عائشہ خالد خان</label>
            </div>
        </div>
    </div>
</section>
<!-- end product section -->
@endsection
