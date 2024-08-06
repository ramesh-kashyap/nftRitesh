   <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
       <div class="container-fluid">
           <div class="row page-titles">
               <ol class="breadcrumb">
                   <li class="breadcrumb-item active"><a href="javascript:void(0)">Settings</a></li>
                   <li class="breadcrumb-item"><a href="javascript:void(0)">Add Notices</a></li>
               </ol>
           </div>
           <!-- row -->
           <div class="row">


               <div class="col-xl-6 col-lg-12">
                   <div class="card">
                       <div class="card-header">
                           <h4 class="card-title">Add Notices</h4>
                       </div>
                       <div class="card-body">
                           <div class="basic-form">
                               <form action="{{route('admin.addnotices')}}" method="POST">
                                {{ csrf_field() }}
                                   <div class="row">
                                       <div class="mb-3 col-md-12">
                                           <label class="form-label">Enter Title</label>
                                        
                                                    <input placeholder="Enter Title" required class="form-control" type="text"  name="title" value="" >
                                       </div>

                                       <div class="mb-3 col-md-12">
                                           <label class="form-label">Notice</label>
                                           <input placeholder="Enter Notice" class="form-control check_sponsor_exist" type="text" data-response="sponsor_res" name="notice"
                                               value="" >
                                               
                                               <!-- <span id="sponsor_res"></span> -->
                                       </div>
                                       
                                       
                                        <!-- <div class="mb-3 col-md-12">
                                           <label class="form-label">Remarks</label>
                                           <input placeholder="Remarks" class="form-control" type="text"  name="remarks"
                                               value="" >
                                               
                                            
                                       </div>  -->
                                       
                                      
                                       
                                   </div>

                                   <div class="mb-3">
                                       <div class="form-check">
                                           <input class="form-check-input" type="checkbox">
                                           <label class="form-check-label">
                                               Check me out
                                           </label>
                                       </div>
                                   </div>
                                   <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                               </form>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-xl-6 col-lg-12">
                   <div class="card">
                       <div class="card-header">
                           <h4 class="card-title">Delete Notices</h4>
                       </div>
                       <div class="card-body">
                           <div class="basic-form">
                               <form action="{{route('admin.del_notices')}}" method="POST">
                                {{ csrf_field() }}
                                  @method('DELETE')
                                   <div class="row">
                                    @foreach($admin_notice as $notices)
                                       <div class="mb-3 col-md-12 row">                                      
                                            <span class="col-8 ">{{ $notices->id}}{{$notices->title}}</span>
                                            <input type="hidden" name="id" value="{{ $notices->id }}">
                                            <button type="submit" class="col-4 btn btn-primary submit-btn" >Delete</button>
                                            </form>
                                       </div>
                                      @endforeach 
                                   </div>                                   
                               
                           </div>
                       </div>
                   </div>
               </div>




           </div>
       </div>
   </div>
   
     <script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>
             <!-- <script>
                 function amtValue() {
                     var amt = document.getElementById('PACKAGE_AMT').value;
                     if (amt % 100 == 0) {
                         return true;
                     } else {
                         alert('Please enter valid amount Multiple of $ 100  ');
                         return false;
                     }
                 }
         
         
         
                 $('.check_sponsor_exist').keyup(function(e) {
                     var ths = $(this);
                     var res_area = $(ths).attr('data-response');
                     var sponsor = $(this).val();
                     // alert(sponsor); 
                     $.ajax({
                         type: "POST"
                         , url: "{{ route('getUserName') }}"
                         , data: {
                             "user_id": sponsor
                             , "_token": "{{ csrf_token() }}"
                         , }
                         , success: function(response) {
                             // alert(response);      
                             if (response != 1) {
                                 // alert("hh");
                                 $(".submit-btn").prop("disabled", false);
                                 $('#' + res_area).html(response).css('color', '#000').css('font-weight', '800')
                                     .css('margin-buttom', '10px');
                             } else {
                                 // alert("hi");
                                 $(".submit-btn").prop("disabled", true);
                                 $('#' + res_area).html("User Not exists!").css('color', 'red').css(
                                     'margin-buttom', '10px');
                             }
                         }
                     });
                 });


                 $('.check_amount').keyup(function(e) {
                     var ths = $(this);
                     var res_area = $(ths).attr('data-response');
                     var amt = $(this).val();
                     if (amt % 100 == 0) 
                     {
                        $('#' + res_area).html("");
                        $(".submit-btn").prop("disabled", false);
                     }
                     else{
                        $(".submit-btn").prop("disabled", true);
                        $('#' + res_area).html("Please enter valid amount Multiple of $ 100!").css('color', 'red').css(
                                     'margin-buttom', '10px');
                     }
                     
                   
                    });
         
             </script> -->
         
   <!--**********************************
            Content body end
        ***********************************-->
