@extends('Front.layouts.master')

@section('content')

    <section class="page-title page-title-12" id="page-title">
        <div class="page-title-wrap bg-overlay bg-overlay-dark-3">
            <div class="bg-section">
                <img src="assets/images/page-titles/14.jpg" alt="Background" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 offset-lg-3">
                        <div class="title text-center">
                            <h1 class="title-heading">projects</h1>
                            <p class="title-desc">
                                We offer products, solutions, and services across the entire
                                energy value chain. We support our customers on their way to
                                a more sustainable future.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-wrap">
            <div class="container">
                <ol class="breadcrumb d-flex">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Projects
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <section
        class="projects projects-standard projects-standard-1"
        id="projects-standard-1"
    >
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="projects-filter">
                        <ul class="list-inline mb-0">
                            <li>
                                <a
                                    class="active-filter"
                                    href="javascript:void(0)"
                                    data-filter="*"
                                >All</a
                                >
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-filter=".filter-finance"
                                >finance</a
                                >
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-filter=".filter-supply"
                                >supply chain</a
                                >
                            </li>
                            <li>
                                <a
                                    href="javascript:void(0)"
                                    data-filter=".filter-inovations"
                                >inovations</a
                                >
                            </li>
                            <li>
                                <a
                                    href="javascript:void(0)"
                                    data-filter=".filter-infrastructure"
                                >infrastructure</a
                                >
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-filter=".filter-green"
                                >green energy</a
                                >
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-filter=".filter-eco"
                                >ECO</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row" id="projects-all">
                <div
                    class="col-12 col-md-6 col-lg-4 project-item filter-finance filter-supply"
                >
                    <div class="project-panel" data-hover="">
                        <div class="project-panel-holder">
                            <div class="project-img">
                                <a class="link" href="projects-single.html"></a
                                ><img
                                    src="assets/images/projects/modern/1.jpg"
                                    alt="project image"
                                    class="w-100"
                                />
                            </div>

                            <div class="project-content">
                                <div class="project-title">
                                    <h4>
                                        <a href="projects-single.html"
                                        >expanding The Solar Supply Chain Finance Program</a
                                        >
                                    </h4>
                                </div>
                                <div class="project-cat">
                                    <a href="projects-standard.html">finance</a
                                    ><a href="projects-standard.html">supply chain</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 project-item filter-green">
                    <div class="project-panel" data-hover="">
                        <div class="project-panel-holder">
                            <div class="project-img">
                                <a class="link" href="projects-single.html"></a
                                ><img
                                    src="assets/images/projects/modern/2.jpg"
                                    alt="project image"
                                    class="w-100"
                                />
                            </div>

                            <div class="project-content">
                                <div class="project-title">
                                    <h4>
                                        <a href="projects-single.html"
                                        >Addressing Wind Energy Innovation Challenges</a
                                        >
                                    </h4>
                                </div>
                                <div class="project-cat">
                                    <a href="projects-standard.html">energy</a
                                    ><a href="projects-standard.html">green energy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="col-12 col-md-6 col-lg-4 project-item filter-infrastructure"
                >
                    <div class="project-panel" data-hover="">
                        <div class="project-panel-holder">
                            <div class="project-img">
                                <a class="link" href="projects-single.html"></a
                                ><img
                                    src="assets/images/projects/modern/3.jpg"
                                    alt="project image"
                                    class="w-100"
                                />
                            </div>

                            <div class="project-content">
                                <div class="project-title">
                                    <h4>
                                        <a href="projects-single.html"
                                        >Smarter Ways to Manage EV Charging Infrastructures</a
                                        >
                                    </h4>
                                </div>
                                <div class="project-cat">
                                    <a href="projects-standard.html">electric vehicle</a
                                    ><a href="projects-standard.html">infrastructure</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="col-12 col-md-6 col-lg-4 project-item filter-green filter-eco"
                >
                    <div class="project-panel" data-hover="">
                        <div class="project-panel-holder">
                            <div class="project-img">
                                <a class="link" href="projects-single.html"></a
                                ><img
                                    src="assets/images/projects/modern/4.jpg"
                                    alt="project image"
                                    class="w-100"
                                />
                            </div>

                            <div class="project-content">
                                <div class="project-title">
                                    <h4>
                                        <a href="projects-single.html"
                                        >New Public Attitude Tracker Towards Renewable
                                            Energy</a
                                        >
                                    </h4>
                                </div>
                                <div class="project-cat">
                                    <a href="projects-standard.html">green energy</a
                                    ><a href="projects-standard.html">eco</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="col-12 col-md-6 col-lg-4 project-item filter-inovations"
                >
                    <div class="project-panel" data-hover="">
                        <div class="project-panel-holder">
                            <div class="project-img">
                                <a class="link" href="projects-single.html"></a
                                ><img
                                    src="assets/images/projects/modern/5.jpg"
                                    alt="project image"
                                    class="w-100"
                                />
                            </div>

                            <div class="project-content">
                                <div class="project-title">
                                    <h4>
                                        <a href="projects-single.html"
                                        >Dangerous Environmental Impacts of Natural Gas</a
                                        >
                                    </h4>
                                </div>
                                <div class="project-cat">
                                    <a href="projects-standard.html">energy</a
                                    ><a href="projects-standard.html">inovation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="col-12 col-md-6 col-lg-4 project-item filter-eco filter-supply"
                >
                    <div class="project-panel" data-hover="">
                        <div class="project-panel-holder">
                            <div class="project-img">
                                <a class="link" href="projects-single.html"></a
                                ><img
                                    src="assets/images/projects/modern/6.jpg"
                                    alt="project image"
                                    class="w-100"
                                />
                            </div>

                            <div class="project-content">
                                <div class="project-title">
                                    <h4>
                                        <a href="projects-single.html"
                                        >What Does the Future Hold for Renewable Energy?</a
                                        >
                                    </h4>
                                </div>
                                <div class="project-cat">
                                    <a href="projects-standard.html">eco</a
                                    ><a href="projects-standard.html">supply chain</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 text-center">
                    <a
                        class="btn btn--primary"
                        id="load-more"
                        href="javascript:void(0)"
                    >load more <i class="fas fa-plus"></i
                        ></a>
                </div>
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

@endsection
