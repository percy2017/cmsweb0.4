@extends('layouts.app')

@section('content')
 <div class="container">
    
    <section class="section py-5">
      <!-- First row -->
      <div class="row">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
          {{ session('status') }}
        </div>
        @endif
        <!-- First column -->
        <div class="col-lg-4 mb-4">
  
          <!-- Card -->
          <div class="card card-cascade narrower">
           
            <!-- Card image -->
            <div class="view view-cascade gradient-card-header blue-gradient mdb-color lighten-3">
              <h5 class="mb-0 font-weight-bold">Foto</h5>
            </div>
            <!-- Card image -->
  
            <!-- Card content -->
            <div class="card-body card-body-cascade text-center">
              <img src="{{ Voyager::Image(Auth::user()->avatar) }}" class="img-thumbnail"  style="width: 130px" />
  
              <p class="text-muted"><small>Bienvenido al mejor CmsWeb</small></p>
              <div class="row flex-center">
                {{--  @if(Auth::user()->role->id == 1)  --}}
                <a class="btn btn-info btn-rounded btn-sm" href="{{ route('voyager.dashboard') }}">Ir a Panel</a>
                {{--  @endif  --}}
                <a class="btn btn-danger btn-rounded btn-sm" href="/">Volver</a>
              </div>
            </div>
            <!-- Card content -->
  
          </div>
          <!-- Card -->
  
        </div>
        <!-- First column -->
  
        <!-- Second column -->
        <div class="col-lg-8 mb-4">
  
          <!-- Card -->
          <div class="card card-cascade narrower">
  
            <!-- Card image -->
            <div class="view view-cascade gradient-card-header  blue-gradient mdb-color lighten-3">
              <h5 class="mb-0 font-weight-bold">Mi Perfil</h5>
            </div>
            <!-- Card image -->
  
            <!-- Card content -->
            <div class="card-body card-body-cascade text-center">
  
              <!-- Edit Form -->
              <form>
  
                <!-- First row -->
                <div class="row">
                  <!-- First column -->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <input type="text" id="form1" class="form-control" value="{{ Auth::user()->name }}" disabled>
                      <label style="font-size: 1.1rem;" for="form1" data-error="wrong" data-success="right">Nombres
                        :</label>
  
                    </div>
                  </div>
  
                  <!-- Second column -->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <input type="text" id="form1" class="form-control validate" value="{{ Auth::user()->role->name }}"
                        disabled>
                      <label style="font-size: 1.1rem;" for="form1" data-error="wrong" data-success="right">Rol :</label>
                    </div>
                  </div>
                </div>
                <!-- First row -->
  
                <!-- Second row -->
                <div class="row">
  
                  <!-- First column -->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <input type="text" id="form1" class="form-control validate" value="{{ Auth::user()->email }}"
                        disabled>
                      <label style="font-size: 1.1rem;" for="form1" data-error="wrong" data-success="right">Email
                        :</label>
                    </div>
                  </div>
                  <!-- Second column -->
  
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <input type="text" id="form1" class="form-control validate" value="{{ Auth::user()->created_at }}"
                        disabled>
                      <label style="font-size: 1.1rem;" for="form1" data-error="wrong" data-success="right">Registro
                        :</label>
                    </div>
                  </div>
                </div>
                <!-- Second row -->
  
              </form>
              <!-- Edit Form -->
  
            </div>
            <!-- Card content -->
  
          </div>
          <!-- Card -->
  
        </div>
        <!-- Second column -->
  
      </div>
      <!-- First row -->

      <!-- Modal -->
      <div class="modal fade" id="modal_payment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Pasarela de pago</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Información de pasarela de pago</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Entendido</button>
              {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
          </div>
        </div>
      </div>

      {{-- second row --}}
      @if(session('greetings_histream'))
        <div class="row">
          <!-- First column -->
          <div class="col-lg-12 mb-4">
    
            <!-- Card -->
            <div class="card card-cascade narrower">
    
              <!-- Card content -->
              <div class="card-body card-body-cascade">
                <div class="alert alert-primary" role="alert">
                  {!! setting('histream.greetings') !!}
                </div>
                {!! setting('histream.tutorial') !!}
              </div>
              <!-- Card content -->
    
            </div>
            <!-- Card -->
    
          </div>
          <!-- First column -->
    
        </div>
      @endif
      @php
        session()->forget('greetings_histream');
      @endphp
      {{-- second row --}}
    </section>
  </div>
@endsection

@section('script')
  <script>
    @if(session('greetings_histream'))
      $(document).ready(function(){
        $('#modal_payment').modal('show')
      });
    @endif
  </script>
@endsection
