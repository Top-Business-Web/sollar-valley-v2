@extends('Admin.layouts.master')

@section('content')
    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" /> --}}
    {{--    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet"> --}}
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">




    <form method="POST" id="updateForm" class="updateForm" action="{{ route('sliderUpdate') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $sliders->id }}">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card" style="padding: 13px">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Image Service :</label>
                                <input type="file" name="image_about" value=""
                                    class="form-control image" id="image" />
                            </div>
                            <div class="col-md-12 mb-2">
                                <img id="preview-image-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
                                    alt="preview image" class="preview-image-before-upload" style="max-height: 250px;">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Image Service :</label>
                                <input type="file" name="image_service" value=""
                                    class="form-control image" id="image1" />
                            </div>
                            <div class="col-md-12 mb-2">
                                <img id="preview-image-before-upload1" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
                                    alt="preview image" class="preview-image-before-upload1" style="max-height: 250px;">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Image Product :</label>
                                <input type="file" name="image_product" value=""
                                    class="form-control image" id="image" />
                            </div>
                            <div class="col-md-12 mb-2">
                                <img id="preview-image-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
                                    alt="preview image" style="max-height: 250px;">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Image Faqs :</label>
                                <input class="form-control image" name="image_faqs" value=""
                                    type="file" id="image">
                            </div>
                            <div class="col-md-12 mb-2">
                                <img id="preview-image-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
                                    alt="preview image" style="max-height: 250px;">
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="button" class="btn bg-gradient-primary" id="updateButton">update</button>
                    </div>
                </div>
            </div>

        </div>

    </form>


@endsection
@section('js')
    @include('Admin.layouts.myAjaxHelper')


    {{-- <script src="{{ asset('assets/admin/js/tinymce.min.js') }}" referrerpolicy="origin"></script> --}}

    <script>



$(document).ready(function () {
            $('.image-abdo').change(function () {
                let reader = new FileReader();

                reader.onload = (e) => {
                    $('#preview-image-before-upload').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
        });



        function editScript(){
        $(updateButton).on('click', function (e) {
            e.preventDefault();
            var formData = new FormData(document.getElementById("updateForm"));
            var url = $('#updateForm').attr('action');
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                beforeSend: function () {
                    $('#updateButton').html('<span class="spinner-border spinner-border-sm mr-2" ' +
                        ' ></span> <span style="margin-left: 4px;">انتظر ..</span>').attr('disabled', true);
                },
                success: function (data) {
                    $('#updateButton').html(`تعديل`).attr('disabled', false);
                    if (data.status == 200) {
                        $('#dataTable').DataTable().ajax.reload();
                        toastr.success('تم التعديل بنجاح');
                    } else
                        toastr.error('هناك خطأ ما ..');

                    $('#editOrCreate').modal('hide')
                },
                error: function (data) {
                    if (data.status === 500) {
                        toastr.error('هناك خطأ ما ..');
                    } else if (data.status === 422) {
                        var errors = $.parseJSON(data.responseText);
                        $.each(errors, function (key, value) {
                            // alert(value);
                            if ($.isPlainObject(value)) {
                                $.each(value, function (key, value) {
                                    toastr.error(''+value);
                                    // alert(value);
                                });
                            }
                        });
                    } else
                        toastr.error('هناك خطأ ما ..');
                    $('#updateButton').html(`تعديل`).attr('disabled', false);
                },//end error method

                cache: false,
                contentType: false,
                processData: false
            });
        });
    }
    editScript()
    </script>
@stop
