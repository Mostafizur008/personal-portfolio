<script src="{{asset('backend/assets/js/bundle.js?ver=3.0.0')}}"></script>
<script src="{{asset('backend/assets/js/scripts.js?ver=3.0.0')}}"></script>
<script src="{{asset('backend/assets/js/charts/chart-ecommerce.js?ver=3.0.0')}}"></script>
<link rel="stylesheet" href="{{asset('backend/assets/css/editors/summernote.css?ver=3.0.0')}}">
<script src="{{asset('backend/assets/js/libs/editors/summernote.js?ver=3.0.0')}}"></script>
<script src="{{asset('backend/assets/js/editors.js?ver=3.0.0')}}"></script>
<link rel="stylesheet" href="{{asset('backend/assets/css/editors/tinymce.css?ver=3.0.0')}}">
<script src="{{asset('backend/assets/js/libs/editors/tinymce.js?ver=3.0.0')}}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.min.js"></script>
<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch(type){
       case 'info':
       toastr.info(" {{ Session::get('message') }} ");
       break;
   
       case 'success':
       toastr.success(" {{ Session::get('message') }} ");
       break;
   
       case 'warning':
       toastr.warning(" {{ Session::get('message') }} ");
       break;
   
       case 'error':
       toastr.error(" {{ Session::get('message') }} ");
       break; 
    }
    @endif 
   </script>