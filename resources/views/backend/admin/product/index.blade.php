@extends('backend.admin.template.defaults')
@section('title', '| product')
@section('body')
    <div class="row">

        <div class="col-md-12">


            <div class="card ">

                <div class="card-header text-right ">
                    <h4 class="float-left">Product List</h4>
                    <button class="card-title btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">+</button>
                </div>
                <div  class="modal  fade pt-5" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Creat Product</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <ul id="saveform_errList"></ul>
                                <div id="success_message"></div>



                                <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Title</strong>
                                            <input type="text" name="title" class="title form-control" placeholder="email" value="{{old('title')}}">

                                        </div>

                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Slug</strong>
                                            <input type="text" name="slug" class="slug form-control" placeholder="slug" value="">

                                        </div>

                                    </div>



                                    <div class="col-xs-12 col-sm-12 col-md-12 border-light " >
                                        <div class="form-group"style="border: 1px solid red !important; height: 120px !important;" >
                                            <strong>Category:</strong>



                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 border-dark" style="border: 1px solid red !important; height: 120px !important;">


                                            <div class="form-group ">
                                                <strong>Tags:</strong><br>




                                            </div>

                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                                                <label class="custom-file-label" for="customFileLang">Select file</label>
                                            </div>

                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>body</strong>
                                                <textarea style="border: 1px solid red !important;"  id="mytextarea" cols="10" rows="5" placeholder="body" class="body form-control" name="body">
                                                                 {{old('body')}}}
                                                            </textarea>

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

                </div>

                <div class="card-body ">







                    <div class="table-responsive">
                        <table class="table table-shopping">
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







                            <tr>
                                <td>
                                    <div class="img-container">
                                        <img src="../assets/img/balmain.jpg" alt="...">
                                    </div>
                                </td>
                                <td class="td-name">
                                    <a href="#pants">Jersey T-Shirt</a>
                                    <br /><small>by Balmain</small>
                                </td>
                                <td>
                                    Black
                                </td>
                                <td>
                                    M
                                </td>
                                <td class="td-number">
                                    <small>€</small>499
                                </td>
                                <td class="td-number">
                                    2
                                </td>
                                <td class="td-number">
                                    <small>€</small>998
                                </td>

                            </tr>







                            <tr>
                                <td>
                                    <div class="img-container">
                                        <img src="../assets/img/prada.jpg" alt="...">
                                    </div>
                                </td>
                                <td class="td-name">
                                    <a href="#nothing">Slim-Fit Swim Short</a>
                                    <br /><small>by Prada</small>
                                </td>
                                <td>
                                    Red
                                </td>
                                <td>
                                    M
                                </td>
                                <td class="td-number">
                                    <small>€</small>200
                                </td>
                                <td class="td-number">
                                    1
                                </td>
                                <td class="td-number">
                                    <small>€</small>799
                                </td>

                            </tr>







                            <tr>
                                <td colspan="5">
                                </td>
                                <td class="td-total">
                                    Total
                                </td>
                                <td class="td-price">
                                    <small>€</small>2,346
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
