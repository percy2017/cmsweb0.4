@include('bimgo::layouts.navbar')
<!-- Intro -->
<section class="view intro">

    <div class="container-fluid">

        <div class="row d-flex justify-content-center align-items-center h-100 mx-md-5">

            <div class="col-lg-4 col-xl-5 col-flex mt-lg-0 pt-lg-4 mt-5 pt-5">

                <h1 class="heading font-weight-bold display-3 mb-4">{{ $collection['title_h1']['value'] }}<span>.</span> <br
                        class="d-block d-md-none d-lg-block d-xl-none"><br></span>{{ $collection['title_strong']['value'] }}</h1>
                <h5 class="subheading mb-xl-4 pb-xl-0 mb-md-3 pb-md-3 mb-4">
                    <strong>
                        {!! $collection['parrafo']['value']  !!}
                        <br class="d-none d-xl-block">
                    </strong>
                </h5>
                <div class="mr-auto">
                    <a href="{{ $collection['btn_action']['value'] }}" type="button" class="btn purple-gradient btn-rounded ml-0">{{ $collection['btn_name']['value'] }}</a>
                </div>

            </div>

            <div class="col-lg-8 col-xl-7 pt-lg-4">

                <div class="view">
                    <img src="{{ voyager::Image($collection['img1']['value']) }}" class="img-fluid"  alt="smaple image">
                    {{-- https://mdbootstrap.com/img/illustrations/graphics(2).png --}}
                      
                </div>

            </div>

        </div>

    </div>

</section>
<!-- Intro -->