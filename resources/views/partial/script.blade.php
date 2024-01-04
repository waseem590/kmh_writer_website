<script type="text/javascript" src="{{asset('files/bower_components/jquery/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/bower_components/popper.js/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{asset('files/assets/pages/waves/js/waves.min.js')}}"></script>

<script type="text/javascript" src="{{asset('files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>

<script src="{{asset('files/assets/pages/chart/float/jquery.flot.js')}}"></script>
<script src="{{asset('files/assets/pages/chart/float/jquery.flot.categories.js')}}"></script>
<script src="{{asset('files/assets/pages/chart/float/curvedLines.js')}}"></script>
<script src="{{asset('files/assets/pages/chart/float/jquery.flot.tooltip.min.js')}}"></script>

<script src="{{asset('files/assets/pages/widget/amchart/amcharts.js')}}"></script>
<script src="{{asset('files/assets/pages/widget/amchart/serial.js')}}"></script>
<script src="{{asset('files/assets/pages/widget/amchart/light.js')}}"></script>

<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js')}}"></script>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="{{asset('files/assets/pages/google-maps/gmaps.js')}}"></script>

<script src="{{asset('files/assets/js/pcoded.min.js')}}"></script>
<script src="{{asset('files/assets/js/vertical/vertical-layout.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/assets/pages/dashboard/crm-dashboard.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/assets/js/script.min.js')}}"></script>

{{-- suneditor scripts --}}
<link href="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/css/suneditor.min.css" rel="stylesheet">
<!-- <link href="https://cdn.jsdelivr.net/npm/suneditor@latest/assets/css/suneditor.css" rel="stylesheet"> -->
<!-- <link href="https://cdn.jsdelivr.net/npm/suneditor@latest/assets/css/suneditor-contents.css" rel="stylesheet"> -->
<script src="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/suneditor.min.js"></script>
<!-- languages (Basic Language: English/en) -->
<script src="https://cdn.jsdelivr.net/npm/suneditor@latest/src/lang/ko.js"></script>
<script src="<?= asset('adminassets/app-assets/vendors/js/extensions/toastr.min.js') ?>"></script>  
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<script>
    @if (Session::has('success'))
        toastr.success('<?= Session::get('success') ?>', 'Success!');
    @endif
    @if (Session::has('error'))
        toastr.error('<?= Session::get('error') ?>', 'Error!');
    @endif
</script>
{{-- end --}}