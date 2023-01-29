@extends('Front.layouts.master')

@section('content')
    <section class="page-title page-title-10" id="page-title">
        <div class="page-title-wrap bg-overlay bg-overlay-dark-2">
            <div class="bg-section">
                <img src="{{ asset($slider->image_services) }}" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="title">
                            <div class="title-list">
                                <div class="icon">
                                    <i class="flaticon-040-green-energy"></i>
                                </div>
                                <div class="icon"><i class="flaticon-020-factory"></i></div>
                                <div class="icon">
                                    <i class="flaticon-031-nuclear-plant"></i>
                                </div>
                            </div>
                            <h1 class="title-heading">our services</h1>
                            <p class="title-desc">
                                We offer products, solutions, and services across the entire
                                energy value chain. We support our customers on their way to
                                a more sustainable future.
                            </p>
                            <div class="title-action">
                                <a class="btn btn--primary btn--inversed" href="{{ route('contact') }}">
                                    get started<i class="energia-arrow-right"></i></a><a
                                    class="btn btn--bordered btn--white" href="{{ route('about_us') }}">explore our
                                    plans</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <ol class="breadcrumb breadcrumb-light d-flex">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Services
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services services-4 bg-grey" id="services-4">
        <div class="container">
            <div class="heading heading-3 text-center">
                <div class="row">
                    <div class="col-12 col-lg-6 offset-lg-3">
                        <p class="heading-subtitle">
                            Energize Society With Sustainable Energy!
                        </p>
                        <h2 class="heading-title">
                            A Leading Supplier Of Solar Materials For Manufacturers,
                            Installers & Contractors.
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $classServices = ['flaticon-024-energy', 'flaticon-028-greenhouse', 'flaticon-026-world', 'flaticon-008-plant', 'flaticon-024-energy', 'flaticon-004-solar-panel'];
                ?>
                @foreach ($services as $service)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="service-panel">
                            <div class="service-icon">
                                <i class="{{ $classServices[rand(0, 5)] }}"></i>
                            </div>
                            <div class="service-content">
                                <h4>
                                    <a href="{{ route('service') }}">{{ $service->title_en }}<br />services</a>
                                </h4>
                                <p>
                                    {{ $service->desc_en }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <section class="features features-2 bg-overlay bg-overlay-theme2" id="features-2">
        <div class="bg-section">
            <img src="{{ asset('assets/front') }}/assets/images/background/2.jpg" alt="Background" />
        </div>
        <div class="container">
            <div class="heading heading-2 heading-light heading-light2">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <p class="heading-subtitle">
                            Sustainable, Reliable & Affordable Energy!
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <h2 class="heading-title">
                            Providing Value To Our ClientsThrough Ongoing Product &
                            Innovation.
                        </h2>
                    </div>
                    <div class="col-12 col-lg-6 offset-lg-1">
                        <p class="heading-desc">
                            While improving the yield and performance of solar energy
                            products, our PV industry experience enables us to provide
                            in-depth material sourcing, financing and supply chain
                            expertise for every step.
                        </p>
                        <p class="heading-desc">
                            Raw polycrystalline silicon for PV manufacturing. Offered in
                            various grades and formats including chunks, chips, powder and
                            ingot.
                        </p>
                        <div class="actions-holder">
                            <a class="btn btn--primary btn--inversed" href="{{ route('contact') }}">
                                get started<i class="energia-arrow-right"></i></a><a class="btn btn--bordered btn--white"
                                href="{{ route('about_us') }}">explore our plans</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($services as $service)
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="feature-panel-holder" data-hover="">
                            <div class="feature-panel">
                                <div class="feature-icon">
                                    <i class="{{ $classServices[rand(0, 5)] }}"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>{{ trans_model($service, 'title') }}</h4>
                                    <p>
                                        {{ trans_model($service, 'desc') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="more-features more-features-3">
                        <p>
                            Sustainable, reliable & affordable energy systems,
                            <a href="{{ route('service') }}">Find Your Solution Now! </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="contact-panel contact-panel-2">
                <div class="row">
                    <div class="col-12 col-lg-5 img-card-holder">
                        <div class="img-card img-card-2 bg-overlay bg-overlay-theme">
                            <div class="bg-section">
                                <img src="{{ asset('assets/front') }}/assets/images/contact/2.jpg" alt="image" />
                            </div>
                            <div class="card-content">
                                <div class="content-top">
                                    <p>
                                        As a world wide distributor of solar supplies we
                                        endeavor provide fast and knowledgeable service, we can
                                        get all the materials you need by sea or air.
                                    </p>
                                    <a href="{{ route('contact') }}"><i class="energia-arrow-right"></i>global office
                                        map</a>
                                </div>
                                <div class="content-bottom">
                                    <ul class="list-unstyled contact-infos">
                                        <li class="contact-info">
                                            <i class="energia-phone-Icon"></i>
                                            <p>
                                                Emergency Line:
                                                <a href="tel:123-456-7890">(002) 01061245741</a>
                                            </p>
                                        </li>
                                        <li class="contact-info">
                                            <i class="energia-location-Icon"></i>
                                            <p>
                                                Location:
                                                <a
                                                    href="../cdn-cgi/l/email-protection.html#c5acaba3aa85a0aba0b7a2aca4eba6aaa8">Brooklyn,
                                                    New York, USA
                                                </a>
                                            </p>
                                        </li>
                                        <li class="contact-info">
                                            <i class="energia-clock-Icon"></i>
                                            <p>Mon - Fri: 8:00 am - 7:00 pm</p>
                                        </li>
                                    </ul>
                                    <a class="btn btn--white" href="{{ route('contact') }}">contact us <i
                                            class="energia-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7">
                        <div class="contact-card">
                            <div class="contact-body">
                                <h5 class="card-heading">Request A Quote</h5>
                                <p class="card-desc">
                                    We take great pride in everything that we do, control over
                                    products allows us to ensure our customers receive the best
                                    quality service.
                                </p>
                                <div class="col-12">
                                    <a href="{{ route('quoteIndex') }}">
                                        <button class="btn btn--secondary w-100" type="submit">
                                            Send Request <i class="energia-arrow-right"></i>
                                        </button></a>
                                </div>
                                <div class="col-12">
                                    <div class="contact-result"></div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial testimonial-3 bg-overlay bg-overlay-white2">
        <div class="bg-section">
            <img src="{{ asset('assets/front') }}/assets/images/background/wavy-pattern.png" alt="background" />
        </div>
    </section>
@endsection
