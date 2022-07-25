<!DOCTYPE html>
<html lang="en">


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>LMS - Institute</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/css/app.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/bundles/prism/prism.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/bundles/summernote/summernote-bs4.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/bundles/datatables/datatables.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/bundles/jquery-selectric/selectric.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/index.css')}}">
  <link rel='shortcut icon' type='image/x-icon' href="{{ asset('assets/img/favicon.ico')}}" />
  <script src="{{asset('tinymce/js/tinymce/tinymce.min.js')}}" ></script>

   <style type="text/css">
   .tox-statusbar__branding
	{
		display:none;
	}
	
	.tox-notification__body
	{
		display:none;
	}
	
	.tox-notifications-container
	{
		display:none;
	}
 </style>
</head>
<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      @include('layouts.include.bars')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          @yield('content')
        </section>
        @include('layouts.include.color')
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          <a href="templateshub.net">Templateshub</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
    <!-- General JS Scripts -->
  <script src="{{ asset('assets/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <script src="{{ asset('assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
    <!-- Page Specific JS File -->
  <script src="{{ asset('assets/js/page/index.js') }}"></script>
  <!-- General JS Scripts -->
  <script src="{{ asset('assets/js/app.min.js')}}"></script>
  <script src="{{ asset('assets/bundles/prism/prism.js')}}"></script>
  <!-- JS Libraies -->
  <script src="{{ asset('assets/bundles/summernote/summernote-bs4.js')}}"></script> 
  @if(Request::url() != 'https://management.infinitetechnologyinstitute.com/student/add' &&  Request::url() != 'https://management.infinitetechnologyinstitute.com/student/existing/student/add' &&  Request::url() != 'https://management.infinitetechnologyinstitute.com/accounts/expense' &&  Request::url() != 'https://management.infinitetechnologyinstitute.com/user-managment/roles' &&  Request::url() != 'https://management.infinitetechnologyinstitute.com/user-managment/role/edit/*' &&  Request::url() != 'https://management.infinitetechnologyinstitute.com/academics/visits'   )
  <script src="{{ asset('assets/bundles/jquery-selectric/jquery.selectric.min.js')}}"></script>
  @endif
  <script src="{{ asset('assets/bundles/upload-preview/assets/js/jquery.uploadPreview.min.js')}}"></script>
  <script src="{{ asset('assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{ asset('assets/js/page/create-post.js')}}"></script>
  <!-- Template JS File -->
  <script src="{{ asset('assets/js/scripts.js')}}"></script>
  <!-- excel -->
  
  <!-- Custom JS File -->
  <script src="{{ asset('assets/js/custom.js')}}"></script>
  <!---- datatable js file --->
  
   <script>
      $(document).ready(function(){
        $("#course_title").on("change",function(){
          var v = $(this).val();
          var result= v.split(" ");
          var c = "";
          for (let index = 0; index < result.length; index++) {
                c = c + result[index].charAt(0);            
          }
          $("#code").attr('value',c); 
        });
        $("#discount").on('change',function(){
          var disfee;
          var d  = $(this).val(); // discount ..
          var rf = $("#regularfee").val(); // regular fees
          if(rf == ""){
            alert("Please Add Regular Fee");
          } else {
            disfee = (d/100) * rf;
            var dis = rf - disfee;
            $("#discountfee").attr('value',dis);
          }
        });
        $("#bcourse").on('change',function(){
            var bc = $(this).val();
            $.get('https://management.infinitetechnologyinstitute.com/badges/bcode/'+bc,function(response){
              $('#code').val(response.code);
              $('#fee').val(response.fee);
              console.log(response);
            });
        });
        
        $("#stucourse").on('change',function(){
          var ci = $(this).val();
          $.get('https://management.infinitetechnologyinstitute.com/student/badges/'+ci,function(responses){
             $.each(responses, function(key, value) {   
              // $('#stubadges').append($("<option></option>").attr("value", key).text(value)); 
               $("[stu='badge']").append($('<option>', { 
                    value: value.id,
                    text : value.code 
                }));
            }); 
          });
        });
        $("#stubadges").on('change',function(){
          var bi = $(this).val();
          $.get('https://management.infinitetechnologyinstitute.com/student/code/'+bi,function(responses){
              $("#stuid").val(responses);
          });
        });
      });  
   </script>
</body>
</html>