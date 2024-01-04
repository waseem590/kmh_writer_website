@extends('master')
@section('css')
<style>
#suneditor_sample{
    width:100% !important;
}
.sun-editor{
    width: 100% !important;
}
.se-wrapper-inner{
    height:230px !important;
}
.right-hand-side{
  font-family: 'Jameel Noori Nastaleeq';
  font-size:18px;
}
@font-face {
  font-family: 'Jameel Noori Nastaleeq';
  src: url('{{asset("assets/fonts/JameelNooriNastaleeq.ttf")}}') format('truetype');
  /* You can also include additional font formats (e.g., woff, woff2) for cross-browser compatibility */
  font-weight: normal;
  font-style: normal;
}
</style>
@endsection
@section('content')
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">

                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <div class="card latest-update-card">
                            <div class="card-header">
                                <h5>Add New Article</h5>
                            </div>
                            <div class="card-block">
                                <div class="card-header-right">
                                    <form method="POST" action="{{route('save.article')}}" id="add_article" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-static">Heading</label>
                                            <input required type="text" name="heading" class="form-control right-hand-side" placeholder="تحریر کریں" dir="rtl" >
                                        </div>
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-static">Sub Heading</label>
                                            <input required type="text" class="form-control right-hand-side" dir="rtl" placeholder="تحریر کریں" name="sub_heading">
                                        </div>
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-static">Cover Image (Only Jpg,Jpeg,Png files)</label>
                                            <input type="file" class="form-control" name="cover_image" required>
                                        </div>
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-static">Letter Image</label>
                                            <input type="file" class="form-control" name="letter_image">
                                        </div>
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-static">Other Letter Image</label>
                                            <input type="file" class="form-control" name="letter_image_1">
                                        </div>
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-static">Description</label>
                                            <textarea name="description" id="description" class="right-hand-side form-control" placeholder="تحریر کریں"></textarea>
                                        </div>
                                        <div class="form-group bmd-form-group">
                                            <button type="button" class="btn btn-primary" id="save_article">Add Article</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>       
@endsection
@section('js')
    <script>
        const editor = SUNEDITOR.create((document.getElementById('description') || 'description'),{
            // All of the plugins are loaded in the "window.SUNEDITOR" object in dist/suneditor.min.js file
            // Insert options
            // Language global object (default: en)
            lang: SUNEDITOR_LANG['en'],
            font: ['Jameel Noori Nastaleeq'],
            rtl: true, // Set text direction to right-to-left
            defaultStyle: 'direction: rtl; text-align: right;',
            buttonList: [
                    [
                    'undo', 'redo',
                    'font', 'fontSize', 'formatBlock',
                    'paragraphStyle', 'blockquote',
                    'bold', 'underline', 'italic', 'strike', 'subscript', 'superscript',
                    'fontColor', 'hiliteColor', 'textStyle',
                    'removeFormat',
                    'outdent', 'indent',
                    'align', 'horizontalRule', 'list', 'lineHeight',
                    'table', 'link', 'image', 'video', 'audio', /** 'math', */ // You must add the 'katex' library at options to use the 'math' plugin.
                    /** 'imageGallery', */ // You must add the "imageGalleryUrl".
                    'fullScreen', 'showBlocks', 'codeView',
                    'preview', 'print', 'save', 'template',
                    'dir_ltr'
                    /** 'dir', 'dir_ltr', 'dir_rtl' */ // "dir": Toggle text direction, "dir_ltr": Right to Left, "dir_rtl": Left to Right
                    ]
                ]
        });
        $('#save_article').on('click',function(){
            $('#description').val(editor.getContents());
            $('#add_article').submit();
        })
    </script>
@endsection