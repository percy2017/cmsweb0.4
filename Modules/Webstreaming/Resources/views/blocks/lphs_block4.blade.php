 <!-- Streak -->
<div class="streak streak-photo streak-long-2" style="background-image: url('{{ voyager::Image($data->imagen->value) }}');">
  <div class="flex-center rgba-gradient-mask">
    <div class="container">

      <!-- Section heading -->
      <h3 class="text-center mb-5 pb-4 white-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">
        <strong>{{ $data->title_strong->value }}</strong>
      </h3>

      <!--First row-->
      <div class="row text-center">

        <!--First column-->
        <div class="col-md-3 mb-2">
          <h1 class="white-text mb-1 font-weight-bold">{{ $data->title_1->value }}</h1>
          <p class="white-text">{{ $data->parrafo_1->value }}</p>
        </div>
        <!--/First column-->

        <!--Second column-->
        <div class="col-md-3 mb-2">
          <h1 class="white-text mb-1 font-weight-bold">{{ $data->title_2->value }}</h1>
          <p class="white-text">{{ $data->parrafo_2->value }}</p>
        </div>
        <!--/Second column-->

        <!--Third column-->
        <div class="col-md-3 mb-2">
          <h1 class="white-text mb-1 font-weight-bold">{{ $data->title_3->value }}</h1>
          <p class="white-text">{{ $data->parrafo_3->value }}</p>
        </div>
        <!--/Third column-->

        <!--Fourth column-->
        <div class="col-md-3">
          <h1 class="white-text mb-1 font-weight-bold">{{ $data->title_4->value }}</h1>
          <p class="white-text">{{ $data->parrafo_4->value }}</p>
        </div>
        <!--/Fourth column-->

      </div>
      <!--First row-->

    </div>
  </div>
</div>
<!-- Streak -->