<?php
    $textAreaClass  =   'form-control';
    
    if (strtolower(env('TEXTEDITOR')) == 'tinymce' || empty(env('TEXTEDITOR'))) {
?>
        <!-- From here script for using TinyMCE Rich text editor-->
        <script src="/js/rte/tinymce/js/tinymce/tinymce.min.js"></script>
		<script src="/js/rte/tinymce/js/tinymce/plugins/code/plugin.min.js"></script>
		<script src="/js/rte/tinymce/js/tinymce/plugins/textcolor/plugin.min.js"></script>
		<script src="/js/rte/tinymce/js/tinymce/plugins/table/plugin.min.js"></script>
		<script src="/js/rte/tinymce/js/tinymce/plugins/wordcount/plugin.min.js"></script>
		<script src="/js/rte/tinymce/js/tinymce/plugins/spellchecker/plugin.min.js"></script>
		<script src="/js/rte/tinymce/js/tinymce/plugins/lists/plugin.min.js"></script>
		<script src="/js/rte/tinymce/js/tinymce/plugins/advlist/plugin.min.js"></script>
		<script src="/js/rte/tinymce/js/tinymce/plugins/emoticons/plugin.min.js"></script>
		<script src="/js/rte/tinymce/js/tinymce/plugins/colorpicker/plugin.min.js"></script>
		<script src="/js/rte/tinymce/js/tinymce/plugins/visualchars/plugin.min.js"></script>
		<script src="/js/rte/tinymce/js/tinymce/plugins/preview/plugin.min.js"></script>
		<script src="/js/rte/tinymce/js/tinymce/plugins/paste/plugin.min.js"></script>
		<script src="/js/rte/tinymce/js/tinymce/plugins/hr/plugin.min.js"></script>
		<script src="/js/rte/tinymce/js/tinymce/plugins/fullpage/plugin.min.js"></script>
		<script src="/js/rte/tinymce/js/tinymce/plugins/link/plugin.min.js"></script>
		<script src="/js/rte/tinymce/js/tinymce/plugins/image/plugin.min.js"></script>
		<script src="/js/rte/tinymce/js/tinymce/plugins/charmap/plugin.min.js"></script>
		<script src="/js/rte/tinymce/js/tinymce/plugins/media/plugin.min.js"></script>
		
		
		
		<script>
			/*tinymce.init({
				selector: 'textarea',
				plugins: "code,textcolor,table,wordcount,spellchecker,lists,advlist,emoticons,colorpicker,visualchars,preview,paste,hr,",
				toolbar: "code,textcolor,table,wordcount,spellchecker,lists,advlist,emoticons,colorpicker,visualchars,preview,paste,hr," });*/
			tinymce.init({
				selector: 'textarea',
				extended_valid_elements: 'span[*]',
				plugins: "code,textcolor,table,wordcount,spellchecker,lists,advlist,emoticons,colorpicker,visualchars,preview,paste,hr,link,image,charmap,media",
				toolbar: "forecolor backcolor | fontselect fontsizeselect | bold italic underline superscript | alignleft aligncenter alignright | bullist numlist | outdent indent | code | preview | link | image | charmap | media",
				charmap_append: [
					['0x8377;', 'R - Kahako']
				],

				});
		</script>
        
        <!-- Till here for tiny MCE -->
<?php
    }
    
    if (strtolower(env('TEXTEDITOR')) == 'summernote') {
?>
		<!-- include jquery -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 

		  <!-- include libs stylesheets -->
		  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.css" />
		  <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.js"></script>
		  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.js"></script> 

		  <!-- include codemirror (codemirror.css, codemirror.js, xml.js, formatting.js)-->
		  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.9.0/codemirror.min.css" />
		  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.9.0/theme/blackboard.min.css">
		  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.9.0/theme/monokai.min.css">
		  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.9.0/codemirror.js"></script>
		  <script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.9.0/mode/xml/xml.min.js"></script>        

		<link rel="stylesheet" href="/js/rte/summernote/dist/summernote-bs4.css">
        <script type="text/javascript" src="/js/rte/summernote/dist/summernote-bs4.js"></script>

        <script type="text/javascript">
			$(document).ready(function() {
			  $('.summernote').summernote({
				height: 200,
				tabsize: 2,
				codemirror: {
				  mode: 'text/html',
				  htmlMode: true,
				  lineNumbers: true,
				  theme: 'monokai'
				}
			  });
			});
		</script>
		
<?php
        $textAreaClass = 'summernote';
    }

	if (strtolower(env('TEXTEDITOR')) == 'ckeditor') {
?>
		<script src="/js/rte/ckeditor/ckeditor5-build-decoupled-document/ckeditor.js"></script>
<?php
	}
?>