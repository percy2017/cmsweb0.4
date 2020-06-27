<section>
    <div class="row mt-3">
        <div class="col-12">
            <div class="view  z-depth-1">
                <img src="{{ Voyager::Image($data->banner->value) }}" class="img-fluid"
                alt="sample image">
                <div class="mask rgba-stylish-slight">
                    <div class="dark-grey-text text-right pt-lg-5 pt-md-1 mr-5 pr-md-4 pr-0">
                        <div>
                            <a>
                                <span class="badge badge-primary">{{ $data->tag->value }}</span>
                            </a>
                            <h2 class="card-title font-weight-bold pt-md-3 pt-1">
                                <strong>{{ $data->title->value }}</strong>
                            </h2>
                            <p class="pb-lg-3 pb-md-1 clearfix d-none d-md-block">{{ $data->description->value }}</p>
                            <a href="{{ $data->button_link->value }}" class="btn mr-0 btn-primary btn-rounded clearfix d-none d-md-inline-block">{{ $data->button_text->value }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3 pt-1">
        <div class="col-lg-8 col-md-12 mb-3 mb-md-4 pb-lg-2">
            <div class="view zoom z-depth-1">
                <img src="{{ Voyager::Image($data->banner2->value) }}" class="img-fluid" alt="sample image">
                <div class="mask rgba-white-light">
                    <div class="dark-grey-text d-flex align-items-center pt-4 ml-lg-3 pl-lg-3 pl-md-5">
                        <div>
                            <a><span class="badge badge-danger">{{ $data->tag2->value }}</span></a>
                            <h2 class="card-title font-weight-bold pt-2"><strong>{{ $data->title2->value }}</strong></h2>
                            <p class="hidden show-ud-up">{{ $data->description2->value }}</p>
                            <a href="{{ $data->button_link2->value }}" class="btn btn-danger btn-sm btn-rounded clearfix d-none d-md-inline-block"></i> {{ $data->button_text2->value }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 mb-4">
            <div class="view zoom z-depth-1 photo">
                <img src="{{ Voyager::Image($data->banner3->value) }}" class="img-fluid" alt="sample image">
                <div class="mask rgba-stylish-strong">
                    <div class="white-text center-element text-center w-75">
                        <div class="">
                            <a><span class="badge badge-info">{{ $data->tag3->value }}</span></a>
                            <h2 class="card-title font-weight-bold pt-2"><strong>{{ $data->title3->value }}</strong></h2>
                            <p class="">{{ $data->description3->value }} </p>
                            <a href="{{ $data->button_link3->value }}" class="btn btn-info btn-sm btn-rounded"></i> {{ $data->button_text3->value }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>