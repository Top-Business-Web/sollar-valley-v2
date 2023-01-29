@extends('Front.layouts.master')

@section('content')
    <div class="module-content module-search-warp">
        <div class="pos-vertical-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                        <form class="form-search">
                            <input class="form-control" type="text" placeholder="type words then enter" />
                            <button></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <a class="module-cancel" href="#"><i class="fas fa-times"></i></a>
    </div>

    <section class="page-title page-title-14" id="page-title">
        <div class="page-title-wrap bg-overlay bg-overlay-dark-3">
            <div class="bg-section">
                <img src="{{ asset('assets/front') }}/assets/images/page-titles/14.jpg" alt="Background" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="title">
                            <h1 class="title-heading">Request quote</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact contact-4" id="contact-4">
        <div class="container">
            <div class="contact-panel contact-panel-3">
                <div class="heading heading-6">
                    <p class="heading-subtitle">
                        Improving The Performance Of Solar Energy.
                    </p>
                    <h2 class="heading-title">
                        Discover Independence Through Using The Power Of Solar Panels!
                    </h2>
                    <p class="heading-desc">
                        We offer products, solutions, and services across the entire
                        energy value chain. We support our customers on their way to a
                        more sustainable future – no matter how far along the journey to
                        energize society with affordable energy systems.
                    </p>
                    <div class="advantages-list-holder">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <ul class="list-unstyled advantages-list advantages-list-3">
                                    <li>Reliabe and performance</li>
                                    <li>Solar material financing</li>
                                    <li>In-time manufacturing</li>
                                </ul>
                            </div>
                            <div class="col-12 col-lg-6">
                                <ul class="list-unstyled advantages-list advantages-list-3">
                                    <li>50% more energy output</li>
                                    <li>Built using ntype mono</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="contact-action">
                        <a class="btn btn--primary" href="page-about.html">learn more <i
                                class="energia-arrow-right"></i></a><a class="btn btn--bordered btn--white"
                            href="page-faqs.html">our core values</a>
                    </div>
                    <div class="contact-quote contact-quote-3">
                        <img src="{{ asset('assets/front') }}/assets/images/icons/noteicon-2.png" alt="icon" />
                        <p>
                            Receive an accurate quote within 3-5 days when you fill out
                            this form. Or, give us a call:
                            <a href="tel:01061245741">(002) 01061245741</a>
                        </p>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="contact-body">
                        <h5 class="card-heading">Request A Quote</h5>
                        <p class="card-desc">
                            We take great pride in everything that we do, control over
                            products allows us to ensure our customers receive the best
                            quality service.
                        </p>
                        <form id="quoteForm" class="form-qoute" method="post">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <div class="mb-20">
                                <div class="row">
                                    <div class="mb-20">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <label class="form-label" for="contact-first-name">First name</label>
                                                <input class="form-control" type="text" id="contact-first-name"
                                                    name="first_name" placeholder="Mahmoud" required="" />
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label class="form-label" for="contact-last-name">Last name</label>
                                                <input class="form-control" type="text" id="contact-last-name"
                                                    name="last_name" placeholder="Adel" required="" />
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label class="form-label" for="contact-phone">Phone</label>
                                                <input class="form-control" type="text" id="contact-phone" name="phone"
                                                    placeholder="Phone" required="" />
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label class="form-label" for="contact-email">Email</label>
                                                <input class="form-control" type="email" id="contact-email" name="email"
                                                    placeholder="Email" required="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="form-label" for="contact-address">Street address</label>
                                                <input class="form-control" type="text" id="contact-address"
                                                    name="address" placeholder="write street address" required="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="row">
                                            <div class="widget-content">
                                                <div class="product" style="display: flex;margin-bottom: 15px;">
                                                    <div class="product-img">
                                                        <img src="{{ asset($product->images[0]) }}"
                                                            style="width: 130px;border-radius: 25px;" alt="product" />
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-title">
                                                            <h5 style="position: absolute;margin: 30px 0px 0px 38px">
                                                                {{ trans_model($product, 'title') }}</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="row">
                                            <div class="col-12">
                                                <button class="btn btn--secondary w-100" id="quote-btn" type="button">
                                                    submit request <i class="energia-arrow-right"></i>
                                                </button>
                                            </div>
                                            <div class="col-12">
                                                <div class="contact-result load-contact"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $('#quote-btn').on('click', function(e) {
            e.preventDefault();
            // var form = $('#contact-form');
            var formData = new FormData(document.getElementById("quoteForm"));
            // alert(formData.message);
            $.ajax({
                'method': 'post',
                'type': 'POST',
                'data': formData,
                '_token': "{{ csrf_token() }}",
                'url': "{{ route('quoteStore') }}",
                beforeSend: function(data) {
                    $('.load-contact').html('Loading ... ');
                },
                success: function(data) {
                    if (data.status === 200) {
                        toastr.success('Quote send success');
                        $('.load-contact').html('');
                        $('#quoteForm input').val('');
                    }
                },
                error: function(data) {
                        if (data.status === 500) {
                            toastr.error('error sending message !!');
                        } else if (data.status === 422) {
                            var errors = $.parseJSON(data.responseText);
                            $.each(errors, function(key, value) {
                                // alert(value);
                                if ($.isPlainObject(value)) {
                                    $.each(value, function(key, value) {
                                        toastr.error('' + value);
                                        // alert(value);
                                    });
                                }
                                $('.load-contact').html('error');
                            });
                            $('.load-contact').html('error');
                        }
                    }

                    ,
                cache: false,
                processData: false,
                contentType: false
            })
        })
    </script>
@endsection
