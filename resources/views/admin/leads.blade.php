
@extends('admin.master')
@section('main_content')    

  <div class="page-content container container-plus">
    <div class="page-header pb-2">
      <h1 class="page-title text-primary-d2 text-150">
        Leads
      </h1> 
     
    </div>

<!-- Modal -->
<div class="modal fade" id="addNewEntry" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Entry</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="store_blog_category">
        @csrf
      <div class="modal-body">

          <div class="row"> 
              <div class="col-md-12">
                <span>Name</span>
                <input type="text" name="name"  value="" required="" class="form-control form-control-lg shadow-none" id="id-form-field-2">                
              </div>
          </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal End -->
    


    <div class="row mt-3">
      <div class="col-12">
        <div class="card dcard">
          <div class="card-body px-1 px-md-3">                                   
            <div role="main" class="main-content">         
              <div class="page-content container container-plus">
                <div class="page-header mb-2 pb-2 flex-column flex-sm-row align-items-start align-items-sm-center py-25 px-1">              

                <h1 class="page-title text-primary-d2 text-140">
                Leads  
                  <small class="page-info text-dark-m3">
                    <i class="fa fa-angle-double-right text-80"></i>
                   
                  </small>
                </h1>                     


                <div class="page-tools mt-3 mt-sm-0 mb-sm-n1">
                  <!-- dataTables search box will be inserted here dynamically -->
                </div>
              </div>

              <div class="card bcard h-auto">
               

                  <table id="datatable" class="d-style w-100 table text-dark-m1 text-95 border-y-1 brc-black-tp11 collapsed">
                    <!-- add `collapsed` by default ... it will be removed by default -->
                    <!-- thead with .sticky-nav -->
                    <thead class="sticky-nav text-secondary-m1 text-uppercase text-85">
                      <tr>
                        <th class="td-toggle-details border-0 bgc-white shadow-sm sorting_disabled" rowspan="1" colspan="1" data-column-index="0" style="width: 0px;" aria-label="                        
                        ">
                          <i class="fa fa-angle-double-down ml-2"></i>
                        </th>

                        <th class="border-0 bgc-white pl-3 pl-md-4 shadow-sm sorting_disabled" rowspan="1" colspan="1" data-column-index="1" style="width: 60px;" aria-label="                        
                      ">
                        <input type="checkbox">
                      </th>

                    

                        <th class="border-0 bgc-white pl-3 pl-md-4 shadow-sm"> SN </th>
                        <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">Name</th>                     
                        <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">Email</th>                     

                        <th class="d-none border-0 bgc-white shadow-sm w-2">
                          <!-- the TD will have edit icon -->
                        </th>
                      </tr>
                    </thead>

                    <tbody class="pos-rel">
                    <?php 
                    $data = DB::table('leads') 
                    ->get(); 
                    ?>
                    @foreach($data as $item)                                  
                      <tr class="d-style bgc-h-default-l4">
                        <td class="td-toggle-details pos-rel dtr-control" tabindex="0">
                            <!-- this empty table cell will show the `+` sign which toggles the hidden cells in responsive (collapsed) mode -->    
                          </td>
                          <td class="pl-3 pl-md-4 align-middle pos-rel">
                            <input type="checkbox">
                          </td>

                       
                        <td class="pl-3 pl-md-4 align-middle pos-rel"> {{$loop->iteration}} </td>
                        <td> <span class="text-105"> {{$item->name}} </span> </td>
                        <td> <span class="text-105"> {{$item->email}} </span> </td>

                        <td class="d-none align-middle">
                          <span class="d-none d-lg-inline">
                              <a data-rel="tooltip"  data-toggle="modal" data-target="#item{{$item->id}}"  title="Edit" href="#" class="v-hover">
                                  <i class="fa fa-edit text-blue-m1 text-120"></i>
                              </a>
                          </span>

                          <span class="d-lg-none text-nowrap">
                              <a title="Edit" href="#" class="btn btn-outline-info shadow-sm px-4 btn-bgc-white">
                                  <i class="fa fa-pencil-alt mx-1"></i>
                                  <span class="ml-1 d-md-none">Edit</span>
                          </a>
                          </span>                                                                   

                          <span class="d-none d-lg-inline">
                              <a data-rel="tooltip" title="Delete" href="/delete_blog_category/{{$item->id}}" onclick="confirmDelete()" class="v-hover">
                                  <i class="fa fa-trash text-blue-m1 text-120"></i>
                              </a>
                          </span>

                          <span class="d-lg-none text-nowrap">
                              <a title="Edit" href="#" class="btn btn-outline-info shadow-sm px-4 btn-bgc-white">
                                  <i class="fa fa-trash-alt mx-1"></i>
                                  <span class="ml-1 d-md-none">Delete</span>
                          </a>
                          </span>
                        </td>
                      </tr>
                      @endforeach

                    
                    </tbody>
                  </table>

              </div>
            </div>


           
      </div>
    </div>

  </div>
 
@endsection