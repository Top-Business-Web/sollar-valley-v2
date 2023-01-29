<!-- Start Form -->
<form id="updateForm" class="updateForm" method="POST">
    @csrf
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card" style="padding: 13px">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Name :</label>
                            <input type="text" name="hash_en" disabled value="{{ $quote->first_name }}"
                                class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">NickName :</label>
                            <input type="text" name="hash_en" disabled value="{{ $quote->last_name }}"
                                class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Phone :</label>
                            <input type="text" name="" disabled value="{{ $quote->phone }}"
                                class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Email :</label>
                            <input type="text" name="" disabled value="{{ $quote->email }}"
                                class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Address :</label>
                            <input type="text" name="" disabled value="{{ $quote->address }}"
                                class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Product :</label>
                            <a href="{{ route('getOneProduct', $quote->product->id) }}">
                                <input type="text" name="" disabled value="{{ $quote->product->title_en }}"
                                    class="form-control" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        </div>
    </div>
</form>
<!-- End Form -->
