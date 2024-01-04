@extends('master')
@section('css')
<style>
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
                            <div class="card-header d-flex justify-content-between">
                                <h5>All Articles</h5>
                                <a  href="{{route('new.articles')}}" class="btn btn-primary" >Add New Article</a>
                            </div>
                            <div class="card-block">
                                <div class="card-header-right">
                                <table id="myTable" style="wdith:100% !important" class="display col-md-12">
                                    <thead>
                                        <tr>
                                            <th>Sr#</th>
                                            <th>Image</th>
                                            <th>Heading</th>
                                            <th>Sub Heading</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($articles as $key=>$article)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td><img width="80px" src="{{asset($article->cover_image)}}"></td>
                                                <td style="font-size:25px; text-align:right; font-family:Jameel Noori Nastaleeq">{{$article->heading}}</td>
                                                <td style="font-size:25px; text-align:right; font-family:Jameel Noori Nastaleeq">{{$article->sub_heading}}</td>
                                                <td ><a href="{{asset('edit_article/'.$article->id)}}"><i class="fas fa-edit p-2"  style="cursor:pointer" title="Edit Article"></i></a><i data-id="<?= $article->id ?>" title="Delete Article" class="fas fa-trash delete_book"  style="cursor:pointer"></i></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Delete Article</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this article?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <a href="" id="yes_delete" class="btn btn-primary">Yes</a>
      </div>
    </div>
  </div>
</div>   
@endsection
@section('js')
    <script>
        $(document).ready(function(){
            $('.delete_book').on('click',function(){
                var id = $(this).data('id');
                var base_url = "<?= asset('/')?>"
                $('#yes_delete').attr('href',base_url+"delete_article/"+id);
                $('#deleteModal').modal('show');
            })
        })
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
        $('#save_book').on('click',function(){
            $('#description').val(editor.getContents());
            $('#add_book').submit();
        })
        
    </script>
@endsection