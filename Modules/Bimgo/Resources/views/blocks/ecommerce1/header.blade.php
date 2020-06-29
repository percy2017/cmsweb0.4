<section class="section mt-3">
    <div class="row">
        <div class="col-lg-8 col-md-12 pb-lg-2">
            <div class="view zoom  z-depth-1">
                <img src="{{ Voyager::Image($data->image->value) }}" class="img-fluid" alt="sample image">
                <div class="mask rgba-white-light">
                    <div class="dark-grey-text d-flex align-items-center pt-3 pl-4">
                        <div>
                            <a><span class="badge badge-danger">{{ $data->tag->value }}</span></a>
                            <h2 class="card-title font-weight-bold pt-2"><strong>{{ $data->title->value }}</strong></h2>
                            <p class="">{!! $data->parrafo->value !!}</p>
                            <a href="{{ $data->link->value }}" class="btn btn-danger btn-sm btn-rounded clearfix d-none d-md-inline-block">{{ $data->button->value }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <section class="section">
                <ul class="list-group z-depth-1">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a class="dark-grey-text font-small"><i class="{{ $data->icon1->value }}"
                        aria-hidden="true"></i> {{ $data->name1->value }}</a>
                    {{--  <a href="#"></a><span class="badge badge-danger badge-pill">43</span></a>  --}}
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a class="dark-grey-text font-small"><i class="{{ $data->icon2->value }}"
                        aria-hidden="true"></i> {{ $data->name2->value }}</a>
                    {{--  <span class="badge badge-danger badge-pill">32</span>  --}}
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a class="dark-grey-text font-small"><i class="{{ $data->icon3->value }}"
                        aria-hidden="true"></i> {{ $data->name3->value }}</a>
                    {{--  <span class="badge badge-danger badge-pill">18</span>  --}}
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a class="dark-grey-text font-small"><i class="{{ $data->icon4->value }}"
                        aria-hidden="true"></i>{{ $data->name4->value }}</a>
                    {{--  <span class="badge badge-danger badge-pill">37</span>  --}}
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a class="dark-grey-text font-small"><i class="{{ $data->icon5->value }}"
                        aria-hidden="true"></i> {{ $data->name5->value }}</a>
                    {{--  <span class="badge badge-danger badge-pill">15</span>  --}}
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a class="dark-grey-text font-small"><i class="{{ $data->icon6->value }}"
                        aria-hidden="true"></i> {{ $data->name6->value }}</a>
                    {{--  <span class="badge badge-danger badge-pill">64</span>  --}}
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a class="dark-grey-text font-small"><i class="{{ $data->icon7->value }}"
                        aria-hidden="true"></i> {{ $data->name7->value }}</a>
                    {{--  <span class="badge badge-danger badge-pill">2</span>  --}}
                </li>
                </ul>
            </section>
        </div>
    </div>
</section>