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
                                <input type="file" name="image_about" class="dropify" data-default-file="{{ asset($slider->image_about) }}" />
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Image Service :</label>
                                <input type="file" name="image_services" class="dropify" data-default-file="{{ asset($slider->image_services) }}" />
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Image Product :</label>
                                <input type="file" name="image_product" class="dropify" data-default-file="{{ asset($slider->image_product) }}" />
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Image Faqs :</label>
                                <input type="file" name="image_faqs" class="dropify" data-default-file="{{ asset($slider->image_faqs) }}" />
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



$('.dropify').dropify();



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
