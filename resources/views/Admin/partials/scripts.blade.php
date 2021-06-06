<!-- jQuery -->
<script src="{{ asset('theme_admin/js/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('theme_admin/asset/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('theme_admin/js/fastclick/lib/fastclick.js') }}"></script>
<!-- NProgress -->
<script src="{{ asset('theme_admin/asset/nprogress/nprogress.js') }}"></script>
<!-- bootstrap-progressbar -->
<script src="{{ asset('theme_admin/asset/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('theme_admin/asset/iCheck/icheck.min.js') }}"></script>
<!-- Custom Theme Scripts -->
<script src="{{ asset('theme_admin/js/custom.min.js') }}"></script>
<!-- CKeditor -->
<script src="{{ asset('theme_admin/js/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('assets/js/fileUpload.js') }}"></script>
<script>
CKEDITOR.replace('editor', {
    filebrowserImageUploadUrl: '{!! route('admin.article.upload').'?_token='.csrf_token() !!}',
    height: 1000
});
CKEDITOR.on( 'dialogDefinition', function( ev ) {
      // Take the dialog name and its definition from the event data.
      var dialogName = ev.data.name;
      var dialogDefinition = ev.data.definition;


      var uploadTab = dialogDefinition.getContents( 'Upload' );
      var uploadButton = uploadTab.get('uploadButton');
      uploadButton['filebrowser']['onSelect'] = function( filePath ) {
        var fileName = filePath.split('/').pop();
        var inputValue = $("input.imageList").val() === '' ? '' : $("input.imageList").val()+',';
        $("input.imageList").val(inputValue+fileName);
      }
});
</script>