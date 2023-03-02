
@extends('admin.master')
@section('main_content')    

  <div class="page-content container container-plus">
    <div class="page-header pb-2">
      <h1 class="page-title text-primary-d2 text-150">
        Select Message Options:     
      </h1>       
    </div>   


    <div class="row mt-3">
      <div class="col-md-4">
          <a id="voiceBtn" class="btn btn-default px-3 text-95 radius-round border-2 brc-black-tp10 float-left">
            <span class="d-sm-none d-md-inline">Voice</span>
          </a>
      </div>
      <div class="col-md-4">
          <a id="emailBtn" class="btn btn-default px-3 text-95 radius-round border-2 brc-black-tp10 float-left">
            <span class="d-sm-none d-md-inline">Email</span>
          </a>
      </div>
      <div class="col-md-4">
          <a id="smsBtn" class="btn btn-default px-3 text-95 radius-round border-2 brc-black-tp10 float-left">
            <span class="d-sm-none d-md-inline">SMS</span>
          </a>
      </div>
    </div>
    <div class="row mt-3">

      <div class="col-12 col-sm-12 cards-container" id="voiceOption" style="display: none">
        <div class="card ccard" id="card-10" draggable="false">
          <div class="card-header flex-wrap pb-0">
            <h5 class="card-title text-primary-d2">
              Voice Message
            </h5>

            <div class="card-toolbar no-border ml-auto">
              <ul class="nav nav-tabs nav-tabs-simple nav-tabs-scroll nav-tabs-static" role="tablist">
                <li class="nav-item mr-2">
                  <a class="btn btn-light-lightgrey btn-brc-tp btn-h-light-dark btn-a-outline-primary bgc-white py-25 px-2 border-none border-b-4 text-95 active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true" draggable="false">
                    <i class="fa fa-home mr-2px"></i>
                    Message Template
                  </a>
                </li>

                <li class="nav-item mr-2">
                  <a class="btn btn-light-lightgrey btn-brc-tp btn-h-light-dark btn-a-outline-primary bgc-white py-25 px-2 border-none border-b-4 text-95" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-1" aria-selected="false" draggable="false">
                    <i class="fa fa-plus mr-2px"></i>
                    Create New Message
                  </a>
                </li>

              </ul>
            </div>
          </div><!-- /.card-header -->

          <div class="card-body p-4">
            <div class="tab-content border-0 p-1">
              <div class="tab-pane fade active show" id="tab-1">
                
                <form action="save_blog" method="post" enctype="multipart/form-data">
                  @csrf    
                  <div class="form-group">
                    <label for="exampleInputPassword1">Select Template</label>
                    <select class="form-control" name="category_id" required="">
                        <option value="">Select template</option>
                        <?php 
                        
                        $categories=DB::table('blog_categories')->get();
                        ?>
                        @foreach($categories as $category) 
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach  
                    </select>
                  </div>              

                  <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="short_description" class="form-control" rows="10">

                    </textarea>  
                  </div>                 
                  <br>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="button" class="btn btn-default">Cancel</button>
                </form>
                
              </div>

              <div class="tab-pane fade" id="tab-2">
                
                <form action="save_blog" method="post" enctype="multipart/form-data">
                  @csrf                 
                  <div class="form-group">
                    <label for="">Template Title</label>
                    <input type="text" name="title" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter post title here">
                  </div>                 

                  <div class="form-group">
                    <label for="exampleInputPassword1">Select Template</label>
                    <select class="form-control" name="category_id" required="">
                        <option value="">Select template</option>
                        <?php 
                        
                        $categories=DB::table('blog_categories')->get();
                        ?>
                        @foreach($categories as $category) 
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach  
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="short_description" class="form-control" rows="10">

                    </textarea>  
                  </div>                 
                  <br>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="button" class="btn btn-default">Cancel</button>
                </form>

              </div>

            </div>
          </div><!-- /.card-body -->
        </div><!-- /.card -->
      </div>

      <div class="col-12 col-sm-12 cards-container" id="emailOption" style="display: none">
        <div class="card ccard" id="card-10" draggable="false">
          <div class="card-header flex-wrap pb-0">
            <h5 class="card-title text-primary-d2">
              Email
            </h5>

            <div class="card-toolbar no-border ml-auto">
              <ul class="nav nav-tabs nav-tabs-simple nav-tabs-scroll nav-tabs-static" role="tablist">
                <li class="nav-item mr-2">
                  <a class="btn btn-light-lightgrey btn-brc-tp btn-h-light-dark btn-a-outline-primary bgc-white py-25 px-2 border-none border-b-4 text-95 active" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-1" aria-selected="true" draggable="false">
                    <i class="fa fa-home mr-2px"></i>
                    Email Template
                  </a>
                </li>

                <li class="nav-item mr-2">
                  <a class="btn btn-light-lightgrey btn-brc-tp btn-h-light-dark btn-a-outline-primary bgc-white py-25 px-2 border-none border-b-4 text-95" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-1" aria-selected="false" draggable="false">
                    <i class="fa fa-plus mr-2px"></i>
                    Create New Email
                  </a>
                </li>

              </ul>
            </div>
          </div><!-- /.card-header -->

          <div class="card-body p-4">
            <div class="tab-content border-0 p-1">
              <div class="tab-pane fade active show" id="tab-3">
                
                <form action="save_blog" method="post" enctype="multipart/form-data">
                  @csrf    
                  <div class="form-group">
                    <label for="exampleInputPassword1">Select Template</label>
                    <select class="form-control" name="category_id" required="">
                        <option value="">Select template</option>
                        <?php 
                        
                        $categories=DB::table('blog_categories')->get();
                        ?>
                        @foreach($categories as $category) 
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach  
                    </select>
                  </div>              

                  <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="short_description" class="form-control" rows="10">

                    </textarea>  
                  </div>                 
                  <br>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="button" class="btn btn-default">Cancel</button>
                </form>
                
              </div>

              <div class="tab-pane fade" id="tab-4">
                
                <form action="save_blog" method="post" enctype="multipart/form-data">
                  @csrf                 
                  <div class="form-group">
                    <label for="">Template Title</label>
                    <input type="text" name="title" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter post title here">
                  </div>                 

                  <div class="form-group">
                    <label for="exampleInputPassword1">Select Template</label>
                    <select class="form-control" name="category_id" required="">
                        <option value="">Select template</option>
                        <?php 
                        
                        $categories=DB::table('blog_categories')->get();
                        ?>
                        @foreach($categories as $category) 
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach  
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="short_description" class="form-control" rows="10">

                    </textarea>  
                  </div>                 
                  <br>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="button" class="btn btn-default">Cancel</button>
                </form>

              </div>

            </div>
          </div><!-- /.card-body -->
        </div><!-- /.card -->
      </div>

      {{-- sms --}}
      <div class="col-12 col-sm-12 cards-container" id="smsOption" style="display: none">
        <div class="card ccard" id="card-10" draggable="false">
          <div class="card-header flex-wrap pb-0">
            <h5 class="card-title text-primary-d2">
              SMS
            </h5>

            <div class="card-toolbar no-border ml-auto">
              <ul class="nav nav-tabs nav-tabs-simple nav-tabs-scroll nav-tabs-static" role="tablist">
                <li class="nav-item mr-2">
                  <a class="btn btn-light-lightgrey btn-brc-tp btn-h-light-dark btn-a-outline-primary bgc-white py-25 px-2 border-none border-b-4 text-95 active" data-toggle="tab" href="#tab-5" role="tab" aria-controls="tab-1" aria-selected="true" draggable="false">
                    <i class="fa fa-home mr-2px"></i>
                    SMS Template
                  </a>
                </li>

                <li class="nav-item mr-2">
                  <a class="btn btn-light-lightgrey btn-brc-tp btn-h-light-dark btn-a-outline-primary bgc-white py-25 px-2 border-none border-b-4 text-95" data-toggle="tab" href="#tab-6" role="tab" aria-controls="tab-1" aria-selected="false" draggable="false">
                    <i class="fa fa-plus mr-2px"></i>
                    Create New SMS
                  </a>
                </li>

              </ul>
            </div>
          </div><!-- /.card-header -->

          <div class="card-body p-4">
            <div class="tab-content border-0 p-1">
              <div class="tab-pane fade active show" id="tab-5">
                
                <form action="save_blog" method="post" enctype="multipart/form-data">
                  @csrf    
                  <div class="form-group">
                    <label for="exampleInputPassword1">Select Template</label>
                    <select class="form-control" name="category_id" required="">
                        <option value="">Select template</option>
                        <?php 
                        
                        $categories=DB::table('blog_categories')->get();
                        ?>
                        @foreach($categories as $category) 
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach  
                    </select>
                  </div>              

                  <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="short_description" class="form-control" rows="10">

                    </textarea>  
                  </div>                 
                  <br>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="button" class="btn btn-default">Cancel</button>
                </form>
                
              </div>

              <div class="tab-pane fade" id="tab-6">
                
                <form action="save_blog" method="post" enctype="multipart/form-data">
                  @csrf                 
                  <div class="form-group">
                    <label for="">Template Title</label>
                    <input type="text" name="title" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter post title here">
                  </div>                 

                  <div class="form-group">
                    <label for="exampleInputPassword1">Select Template</label>
                    <select class="form-control" name="category_id" required="">
                        <option value="">Select template</option>
                        <?php 
                        
                        $categories=DB::table('blog_categories')->get();
                        ?>
                        @foreach($categories as $category) 
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach  
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="short_description" class="form-control" rows="10">

                    </textarea>  
                  </div>                 
                  <br>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="button" class="btn btn-default">Cancel</button>
                </form>

              </div>

            </div>
          </div><!-- /.card-body -->
        </div><!-- /.card -->
      </div>

     
    </div>

  </div>


<script>        
    $(document).ready(function(){
        $("#voiceBtn").click(function(){
          $("#voiceOption").toggle();
          $(this).toggleClass('active_option');
        });
        $("#emailBtn").click(function(){
          $("#emailOption").toggle();
          $(this).toggleClass('active_option');
        });
        $("#smsBtn").click(function(){
          $("#smsOption").toggle();
          $(this).toggleClass('active_option');
        });
      });
</script>
 
@endsection

