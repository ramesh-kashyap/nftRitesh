   <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Nft</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Add Nft Image</a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row">
     
     
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Nft Image</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{ route('admin.addnft_post') }}" method="POST" enctype="multipart/form-data">
                                     {{ csrf_field() }}
                                        <div class="row">
                                            <!-- <div class="mb-3 col-md-12">
                                                <label class="form-label">Id</label>
                                                <input class="form-control" id="inputEmail3" placeholder="ID" type="" name="id">
                                            </div> -->
     
                                           
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Number</label>
                                                <input class="form-control" id="inputEmail3" placeholder="number" type="" name="number">
                                            </div>


                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Select Category</label>
                                               
                                                <select class="form-control" id="inputEmail3" name="collection_id">
                                                @foreach($categories as $value)
                                                
                                                <option value="{{$value->id}}">{{$value->name}}</option>
                                               
                                               
                                               
                                                @endforeach

                                                           </select>
                                            </div>
                                          
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Price</label>
                                                <input class="form-control" id="inputEmail3" placeholder="Price" type="" name="price">
                                            </div>
                                            
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Upload Image</label>
                                                <input class="form-control" id="inputEmail3" placeholder="Upload Image" type="file" name="img">
                                            </div>

                                           

<!-- 
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Discription</label>
                                              
                                                <textarea name="description" class="form-control" ></textarea>
                                            </div>                -->
                                        </div>
     
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label">
                                                    Check me out
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
     
     
     
     
                </div>
            </div>
        </div>
        <!--**********************************
                 Content body end
             ***********************************-->
     