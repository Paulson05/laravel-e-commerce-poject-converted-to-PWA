@extends('backend.admin.template.defaults')

@section('title', '| banner')

@section('body')
    <div class="row">

        <div class="col-md-12">


            <div class="card ">

                <div class="card-header text-right ">
                      <h4 class="float-left">Banner List</h4>

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                       +
                    </button>

                </div>
                @include('backend.admin.template.partials.notification')
                <div   class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Creat Banner</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="col-md-12">
                                    <ul id="saveform_errList"></ul>


                                </div>




                                <form method="POST" action="{{route('banner.store')}}" id="banner" >
                                    @csrf

                                    <div class="row">

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Title</strong>
                                                <input type="text" name="title" id="title" class="title form-control" placeholder="email">

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
                                                    <input id="thumbnail" class="form-control "  type="text"  name="photo">
                                                </div>
                                                <img id="holder" style="margin-top:15px;max-height:200px;">
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <strong>condition</strong>

                                                <select class="form-control" id="conditions"  name="conditions">
                                                    <option>---select condition---</option>

                                                    <option value="banner">banner</option>
                                                    <option value="promo">promo</option>


                                                </select>

                                            </div>

                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <strong>Status</strong>

                                                <select class="form-control status" id="status" name="status">
                                                    <option>---select category---</option>

                                                    <option value="active">Active</option>
                                                    <option value="inactive">Inactive</option>

                                                </select>
                                            </div>

                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>body</strong>
                                                <textarea id="description" cols="30" rows="4" name="description" class="form-control"></textarea>
                                            </div>


                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 text-left">

                                            <button type="submit" class="add_post btn btn-primary add_post">Save</button>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>


                                    </div>
                                </form>




                            </div>

                        </div>




                    </div>

                </div>
                <div  class="modal  fade pt-5" id="example2Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Delete Post</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">

                                <input type="hidden" id="delete_post_id">

                                <h4>are you sure want to delete this data</h4>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="add_post btn btn-outline-secondary" data-dismiss="modal">close</button>
                                <button type="submit" class="delete_post_btn btn btn-primary delete_post_btn">yes delete</button>

                            </div>



                        </div>




                    </div>

                </div>

                <div class="card-body ">







                    <div class="table-responsive">
                        <table class="table table-bordered" id="myTable" >
                            <thead class="">

                            <th  class="text-center" >
                              S/N
                            </th>

                            <th >
                                title

                            </th>



                            <th  class="text-right" >
                                description
                            </th>
                            <th >
                                photo
                            </th>


                            <th  class="text-right" >
                                  condition
                            </th>

                            <th  class="text-right" >
                                status
                            </th>


                            </thead>
                            <tbody>

                            @forelse($banners as $banner)


                                <tr>

                                    <td class="td-name">

                                    {{$loop->iteration}}
                                    <td>
                                        {{$banner->title}}
                                    </td>
                                    <td>
                                        {{$banner->slug}}
                                    </td>
                                    <td>
                                        <img src="{{$banner->photo}}" style="max-height: 190px; max-width: 120px">
                                    </td>
                                    <td class="td-number">

                                        {{Substr(strip_tags($banner->description), 0, 10)}} {{strlen(strip_tags($banner->description)) > 15 ? "......" : ""}}
                                    </td>
                                    <td class="td-number">
                                        {{$banner->conditions}}
                                    </td>
                                    <td class="td-number">
                                        {{$banner->status}}
                                    </td>

                                </tr>
                            @empty
                                <p class="text-center danger"></p>
                            @endforelse
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
        <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
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
<script>

    $(document).ready(function (){

        fetchbanner();
        function fetchbanner() {
            $.ajax({
                type: "GET",
                url:"{{route('banner.fetch')}}",
                dataType:"json",
                success: function (response) {
                    // console.log(response.posts);

                    $('tbody').html("");
                    $.each(response.banners, function (key, item){
                        $('tbody').append('<tr>\
                                            <td>'+item.id+'</td>\
                                           <td>'+item.title+'</td>\
                                           <td>'+item.description+'</td>\
                                           <td>'+item.phone+'</td>\
                                           <td>'+item.conditions+'</td>\
                                           <td>'+item.status+'</td>\
                                            <td><button type="button"  value="'+item.id+'" class="edit_post btn btn-primary" ><i class="fa fa-edit"></i></button></td>\
                                              <td><button type="button" value="'+item.id+'"  class="delete_post btn btn-danger" ><i class="fa fa-trash"></i></button></td>\
                                            </tr>');
                    });
                }
            })
        }
        $(document).on('click', '.add_post', function (e){
            e.preventDefault();

            // console.log('click');
            var data = {
                'title' : $('#title').val(),
                'status' : $('#status').val(),
                'conditions' : $('#conditions').val(),
                'photo' : $('#thumbnail').val(),
                'description' : $('#description').val(),
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url:"{{route('banner.store')}}",
                data:data,


                success: function (response){
                    console.log(response);

                    if (response.status == 400)
                    {
                        $('#saveform_errList').html("");
                        $('#saveform_errList').addClass("alert  alert-danger");
                        $.each(response.errors, function (key, err_value) {
                            $('#saveform_errList').append('<li>'+err_value+'</li>');
                        });
                    }
                    else{
                        $('#saveform_errList').html("");
                        $('#success_message').addClass("alert  alert-success");
                        $('#success_message').text("data added successfully");
                        $('#exampleModal').modal("hide");
                        $('#exampleModal').find("input").val("");
                        $('select').find('option').prop("selected", false)
                        $('#description').val('');
                        fetchbanner();
                        swal.fire(
                            'congratulation!',
                            'banner added successfully',
                            'success'
                        )

                    }


                    // setInterval('location.reload()', 2000);
                }

            });
        });
        $(document).on('click', '.delete_post', function (e){
            e.preventDefault();

            var post_id  = $(this).val();
            // alert(post_id);

            $('#delete_post_id').val(post_id);

            $('#example2Modal').modal("show");

        });
        $(document).on('click', '.delete_post_btn', function (e){
            e.preventDefault();


            var post_id  = $('#delete_post_id').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "DELETE",
                url:"/banner/"+post_id,
                success: function (response){
                    // console.log(response);
                    $('#success_message').addClass("alert  alert_success");
                    $('#success_message').text("response.message");
                    $('#example2Modal').modal("hide");
                    $('.delete_post_btn').text("yes Delete");
                    fetchbanner();
                    swal.fire(
                        'congratulation!',
                        'banner deleted successfully',
                        'success'
                    )
                }

            });

        });
    });
</script>
@endsection
@push('datatable')
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        <script>
            $(document).ready( function () {
            $('#myTable').DataTable()
        } );
    </script>
    </script>

@endpush
