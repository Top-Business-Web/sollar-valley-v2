@extends('Admin.layouts.master')

@section('content')
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />--}}
{{--    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">--}}
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">


    <div class="row mt-4">
        <div class="col-12">
            <div class="card" style="padding: 13px">
                <!-- Card header -->
                <div class="card-header">
                    <h5 class="mb-0">Product</h5>
                </div>
                <div class="table">
                    <table class="table table-responsive data-table YAJRA" id="dataTable" style=" width: 100% !important;" >



                        <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <th>{{ $product->id }}</th>
                                <th>
                                    <img src="{{  asset($product->images[0]) }}" style="width: 100px;
                                    border-radius: 30px;">
                                </th>
                                <th>{{ $product->title_en }}</th>
                                <th>{{ $product->Category->title_en }}</th>
                                <th>
                                    <button type="button"  class="btn btn-pill btn btn-warning mb-3" data-bs-toggle="modal" data-bs-target="#modal-default"><i class="fa fa-eye"></i></button>
                                    </button>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Modal Show -->

            <div class="row">
                <div class="col-md-4">
                  <div class="modal fade bd-example-modal-lg" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal- modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h6 class="modal-title" id="modal-title-default">Show : {{ $product->title_en }}</h6>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Title_Ar</label>
                                        <input type="text"  name="title_ar" value="{{ $product->title_ar }}" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Sub Ar</label>
                                        <input type="text"  name="sub_title_ar" value="{{ $product->title_ar }}" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Sku</label>
                                        <input type="text"  name="sku" readonly value="{{ $product->sku }}" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Title En</label>
                                        <input type="text"  name="title_en" value="{{ $product->title_ar }}" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Sub En</label>
                                        <input type="text"  name="sub_title_en" value="{{ $product->sub_title_en }}" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>



                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Category</label>
                                            <select name="category_id" class="form-control">
                                                <option value="" disabled>Select Category</option>
                                                @foreach ($categoreis as $category)
                                                    <option value="{{ $category->id }}" {{ $category->title_en == $product->category->title_en ? 'selected' : '' }}>{{ $category->title_en }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Tag</label>
                                        <input type="text"  name="tags" value="{{ implode(' ',$product->tags) }}" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Part Number</label>
                                        <input type="number"  name="part_number" value="{{ $product->part_number }}" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Weight</label>
                                        <input type="number"  name="weight" value="{{ $product->weight }}" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Dimensions</label>
                                        <input type="number"  name="dimensions" value="{{ $product->dimensions }}" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Model Number</label>
                                        <input type="number"  name="model_number" value="{{ $product->model_number }}" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Image</label>
                                        <input type="file"  name="files[]" multiple class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Description Ar</label>
                                        <textarea name="desc_ar" class="form-control" id="" cols="30" rows="10">{{ $product->desc_ar }}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Description En</label>
                                        <textarea name="desc_en" class="form-control" id="" cols="30" rows="10">{{ $product->desc_en }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>




            {{-- <!--   edit and create modal   -->
            <div class="modal fade bd-example-modal-lg" id="editOrCreate" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="modal-body">

                        </div>
                    </div>
                </div>
            </div>
            <!--   edit and create modal   -->
            <!--  delete Modal -->
            <div class="modal fade" id="delete_modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Data Delete</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input id="delete_id" name="id" type="hidden">
                            <p>Do You Want to Delete <span id="title" class="text-danger"></span>؟</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-dismiss="modal" id="dismiss_delete_modal">Close</button>
                            <button type="button" class="btn bg-gradient-primary dismiss_delete_modal" id="delete_btn">Delete</button>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>


@endsection
@section('js')
    @include('Admin.layouts.myAjaxHelper')


@stop
