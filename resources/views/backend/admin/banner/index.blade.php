@extends('backend.admin.template.defaults')

@section('title', '| banner')

@section('body')
    <div class="row">

        <div class="col-md-12">


            <div class="card ">

                <div class="card-header text-right ">
                      <h4 class="float-left">Banner List</h4>
                    <button class="card-title btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">+</button>
                </div>
                <div  class="modal  fade pt-5" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Creat Banner</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <ul id="saveform_errList"></ul>
                                <div id="success_message"></div>



                                <div class="row">

                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <strong>Title</strong>
                                            <input type="text" name="title" class="title form-control" placeholder="email" value="{{old('title')}}">

                                        </div>

                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <strong>Category:</strong>

                                            <select class="form-control" name="category_id">
                                                <option>---select category---</option>

                                                <option value=""></option>

                                            </select>
                                        </div>

                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                       <div class="form-group">
                                          <label>description</label>
                                           <div class="input-group">
                                               <span class="input-group-btn">
                                                 <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                                   <i class="fa fa-picture-o"></i> Choose
                                                 </a>
                                               </span>
                                               <input id="thumbnail" class="form-control" type="text" name="filepath">
                                           </div>
                                           <img id="holder" style="margin-top:15px;max-height:200px;">
                                       </div>
                                     </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <strong>Condiction</strong>

                                            <select class="form-control" name="category_id">
                                                <option>---select condition---</option>

                                                <option value=""></option>

                                            </select>

                                        </div>

                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <strong>Status</strong>

                                            <select class="form-control" name="category_id">
                                                <option>---select category---</option>

                                                <option value=""></option>

                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>body</strong>
                                            <textarea id="my-editor" cols="30" rows="4" name="content" class="form-control"></textarea>
                                        </div>


                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                                        <button type="submit" class="add_post btn btn-primary">Post</button>
                                    </div>


                                </div>




                            </div>

                        </div>




                    </div>

                </div>

                <div class="card-body ">







                    <div class="table-responsive">
                        <table class="table" id="myTable">
                            <thead class="">

                            <th  class="text-center" >

                            </th>

                            <th >

                                Product

                            </th>

                            <th >

                                Color

                            </th>

                            <th >

                                Size

                            </th>

                            <th  class="text-right" >

                                Price

                            </th>

                            <th  class="text-right" >

                                Qty

                            </th>

                            <th  class="text-right" >

                                Amount

                            </th>


                            </thead>
                            <tbody>






                            <tr>
                                <td>
                                    <div class="img-container">
                                        <img src="../assets/img/saint-laurent.jpg" alt="...">
                                    </div>
                                </td>
                                <td class="td-name">
                                    <a href="#jacket">Suede Biker Jacket</a>
                                    <br /><small>by Saint Laurent</small>
                                </td>
                                <td>
                                    Black
                                </td>
                                <td>
                                    M
                                </td>
                                <td class="td-number">
                                    <small>€</small>3,390
                                </td>
                                <td class="td-number">
                                    1
                                </td>
                                <td class="td-number">
                                    <small>€</small>549
                                </td>

                            </tr>

                            </tbody>
                        </table>
                    </div>



                </div>



            </div>


        </div>
    </div>

@endsection
@section('scripts')

    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js">
    <script>
        $('#lfm').filemanager('image');
    </script>
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>
    <script>
        CKEDITOR.replace('my-editor', options);
    </script>

@endsection
@push('datatable')
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endpush
