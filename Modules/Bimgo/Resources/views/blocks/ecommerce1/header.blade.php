@php
    $sub_categories = \Modules\Bimgo\Entities\BgSubCategory::orderBy('updated_at', 'desc')->limit(7)->get();
@endphp
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
                    @foreach ($sub_categories as $item)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a class="dark-grey-text font-small"><i class="{{ $item->icons }}" aria-hidden="true"></i> {{ $item->title }}</a>
                            @php
                                $cant = \Modules\Bimgo\Entities\BgProduct::where('sub_category_id', $item->id)->count();
                            @endphp
                            <a href="#"></a><span class="badge badge-danger badge-pill">{{ $cant }}</span></a>
                        </li>
                    @endforeach
                </ul>
            </section>
        </div>
    </div>
</section>