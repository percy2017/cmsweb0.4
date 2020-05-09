<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ url('images/icons/icon-512x512.png') }}" type="image/x-icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

        <script type="text/javascript" src="{{ asset('vendor/histream/js/jquery-3.4.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('vendor/histream/js/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('vendor/histream/js/bootstrap.min.js') }}"></script>

        @if($error != 'notfound')
            <title>{{ $meeting->name }}</title>
            <meta property="og:url"           content="{{ url('conferencia/'.$meeting->slug) }}" />
            <meta property="og:type"          content="Meeting" />
            <meta property="og:title"         content="{{ $meeting->name }}" />
            <meta property="og:description"   content="{{ $meeting->descriptions }}" />
            <meta property="og:image"         content="{{ url('storage/'.str_replace('.', '_facebook.', $meeting->banner)) }}" />
        @else
            <title>HiStream | Error</title>
        @endif

        @if (!$error)
            <style>
                body, html, #meet {
                    margin: 0;
                    overflow-x: hidden; 
                    overflow-y: auto;
                }
                #dark_mask {
                    position: fixed;
                    background-color: rgba(0, 0, 0, 0.5);
                    color: white;
                    top: 0px;
                    right: 0px;
                    left: 0px;
                    height: 100vh;
                    z-index: 1000;
                }
            </style>
        @else
            <style>
                body {
                    background: #0A68BF;
                    color: white
                }
                .page-wrap {
                    min-height: 100vh;
                }
                small{
                font-size: 12px
                }
            </style>
        @endif
    </head>
    <body>
        @if (!$error)
            <div id="meet"></div>
            <div id="countdown_message" style="display: none">
                <div class="d-flex justify-content-center align-items-center" id="dark_mask">
                    <h1 class="mr-3 pr-3 align-top inline-block align-content-center" id="message_finish">k</h1>
                </div>
            </div>
            <script src="{{ setting('histream.server').'/external_api.js' }}"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
            <script>
                $(document).ready(function(){
                    $.get('{{ url("conferencia/join/increment/".$meeting->id) }}');
                    let enable_alert = true;
                    let alert_finish = false;
                    let hour_finish, min_finish, sec_finish;
                    let getFinishMeet = setInterval(() => {
                        var date = new Date();
                        var finish = new Date({{ date("Y, m, d, H, i, s", strtotime($meeting->day.' '.$meeting->finish)) }});
                        // Quitar 1 mes de la fecha generada en javascript
                        let aux = finish.getMonth()-1;
                        finish.setMonth(aux)

                        hour_finish = parseInt((finish-date)/(1000*60*60));
                        min_finish = parseInt((finish-date)/(1000*60)%60);
                        sec_finish = parseInt((finish-date)/1000);

                        if(hour_finish == 0 && min_finish == 5 && enable_alert){
                            alert_finish = true
                            enable_alert =  false;
                        }
                        if(sec_finish <= 60){
                            $('#countdown_message').css('display', 'block')
                            $('#message_finish').text(`Tu reunión finalizará en ${sec_finish >= 0 ? sec_finish : 0} segundos.`)
                        }
                        if(sec_finish<0){
                            $('#countdown_message').css('display', 'none')
                            clearInterval(getFinishMeet);
                            window.location = '{{ url("conferencia/".$meeting->slug) }}/finish';
                        }

                        if(alert_finish){
                            alert_finish = false;
                            Swal.fire({
                                icon: 'warning',
                                title: 'Advertencia',
                                text: 'Te quedan 5 minutos antes de que se acabe el tiempo de tu reunión!',
                                footer: '<a href="https://histream.loginweb.dev" target="_blank">Por qué ocurre esto?</a>'
                            })

                        }
                    }, 300);
                });
                
                const domain = "{{ str_replace('https://', '', setting('histream.server')) }}";
                const options = {
                    roomName: '{{ $meeting->slug }}',
                    // width: screen.width,
                    height: screen.height-100,
                    parentNode: document.querySelector('#meet'),
                    devices: {
                        audioInput: '<deviceLabel>',
                        audioOutput: '<deviceLabel>',
                        videoInput: '<deviceLabel>'
                    },
                };

                let newParticipant = true;
                let maxParticipants = '{{ $plan_user->status }}' == 1 ? '{{ $plan_user->max_person }}' : '{{ $plan_free->max_person }}';
                const api = new JitsiMeetExternalAPI(domain, options);
                api.addEventListener('participantJoined', res=>{
                    // Update numbre of participants
                    $.get('{{ url("conferencia/join/update_active/".$meeting->id) }}/'+api.getNumberOfParticipants());
                    setTimeout(() => {
                        if(newParticipant && api.getNumberOfParticipants() > maxParticipants){
                            api.dispose();
                            window.location = '{{ url("conferencia/".$meeting->slug."/max_participants") }}'
                        }
                        newParticipant = false;
                    }, 1000);
                });

                @if(Auth::user())
                    setInterval(() => {
                        $.get('{{ url("conferencia/join/update_active/".$meeting->id) }}/'+api.getNumberOfParticipants());
                    }, 30000);
                @endif

                // Deshabilitar que se es nuevo participante en caso de ser el moderador
                setTimeout(() => {
                    newParticipant = false;
                }, 60000)

                function warning(){
                    $.get('{{ url("conferencia/join/decrement/".$meeting->id) }}');
                    let suscription = JSON.parse(sessionStorage.getItem('suscription_histream'));
                    if(suscription.id){
                        $.get('{{ url("conferencia/suscribe/".$meeting->id) }}/'+suscription.id+'/exit');
                    }
                    // return "";
                }
                window.onbeforeunload = warning;
            </script>
        @else
            @switch($error)
                @case('notfound')
                    @php
                        $code = 404;
                        $description = 'Reunión no encontrada.'
                    @endphp
                    @break
                @case('max_participants')
                    @php
                        $code = 403;
                        $description = 'La reunión no permite más participantes.'
                    @endphp
                    @break
                @case('not_start')
                    @php
                        $code = 419;
                        $description = 'La reunión aún no ha inicado.'
                    @endphp
                @break
                @case('finish')
                    @php
                        $code = 419;
                        $description = 'La reunión ha finalizado.'
                    @endphp
                @break  
                @default
                @php
                    $code = 500;
                    $description = 'Error desconocido.'
                @endphp
            @endswitch

            <div class="page-wrap d-flex flex-row align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12 text-center">
                            <span class="display-2 d-block">{{ $code }}</span>
                            <div class="mb-4 lead">{{ $description }}</div>
                            <div class="mb-4 lead" id="counter"></div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                var days, hours, minutes, seconds, diff;
                $(document).ready(function(){
                    @if($error == 'not_start')
                        let getStarthMeet = setInterval(() => {
                            var date = new Date();
                            var start = new Date({{ date("Y, m, d, H, i, s", strtotime($meeting->day.' '.$meeting->start)) }});
                            // Quitar 1 mes de la fecha generada en javascript
                            let aux = start.getMonth()-1;
                            start.setMonth(aux)
                            diff = start-date;
                            days = parseInt(diff/(1000*60*60*24));
                            hours = parseInt(diff/(1000*60*60)%24).toString().padStart(2, 0);
                            minutes = parseInt(diff/(1000*60)%60).toString().padStart(2, 0);
                            seconds = parseInt(diff/(1000)%60).toString().padStart(2, 0);
                            
                            if(diff<300){
                                clearInterval(getStarthMeet);
                                window.location = '{{ url("conferencia/".$meeting->slug) }}'
                            }else{
                                $('#counter').html(`
                                    <h5>Inicia en</h5>
                                    <h3>${days ? (days == 1 ? days+'<small>día </small> ' : days+'<small>días </small> ') : ''} ${hours+'<small>h </small>'} : ${minutes+'<small>m </small>'} : ${(seconds > 0 ? seconds : '00')+'<small>s </small>'}</h3>
                                `);
                            }
                        }, 300);
                    @endif
                    @if($error == 'max_participants')
                        $.get('{{ url("conferencia/join/reject/".$meeting->id) }}');
                    @endif
                });
            </script>
        @endif

        {{-- Suscripción --}}
        <!-- Modal -->
        <form id="form-suscribe" action="{{ route('conferencia.suscribe') }}" method="post">
            <div class="modal fade modal-primary" style="color: black" id="modal_suscription" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Suscríbete</h5>
                            {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button> --}}
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="meeting_id" value="{{ $meeting->id }}">
                            @csrf
                            <div class="form-group">
                                <label>Nombre completo <i class="text-primary" data-toggle="tooltip" title="Requerido">*</i></label>
                                <input type="text" name="name" class="form-control" placeholder="John Doe" required>
                            </div>
                            <div class="form-group">
                                <label>N&deg; de celular <i class="text-primary" data-toggle="tooltip" title="Requerido">*</i></label>
                                <input type="tel" name="phone" class="form-control" placeholder="75199157" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="john.doe@example.com">
                                <small class="text-muted">Con tu email podremos agregar tu gravatar y podrás recibir notificaciones.</small>
                            </div>
                            <div class="form-group">
                                <label>Localidad</label>
                                <input type="text" name="city" class="form-control" placeholder="Trinidad - Beni">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-secondary" onclick="notSuscribe()">Omitir</button>
                            <button type="submit" class="btn btn-primary" id="btn-suscribe">Suscribirme</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
            <script>
                $(document).ready(function(){
                    $('[data-toggle="tooltip"]').tooltip();

                    if("{{ session('suscription_histream') }}"){
                        let suscription = JSON.parse(@json(session('suscription_histream')));
                        if(api && suscription.id){
                            api.executeCommand('displayName', suscription.name);
                            api.executeCommand('email', suscription.email);
                            $.get('{{ url("conferencia/suscribe/".$meeting->id) }}/'+suscription.id+'/join');
                        }
                    }else{
                        if("{{ Auth::user() }}"){
                            $('#modal_suscription').modal('toggle');
                        }
                    }

                    $('#form-suscribe').on('submit', function(e){
                        e.preventDefault();
                        $('#btn-suscribe').html('<i class="fa fa-refresh fa-spin"></i> Suscribiendo...');
                        $('#btn-suscribe').attr('disabled', 'disabled');
                        $.post($(this).attr('action'), $(this).serialize(), function(res){
                            $('#modal_suscription').modal('toggle');
                            $('#btn-suscribe').html('Suscribirme');
                            $('#btn-suscribe').removeAttr('disabled');
                            if(api){
                                api.executeCommand('displayName', res.name);
                                api.executeCommand('email', res.email);
                            }
                        })
                    });
                });

                function notSuscribe(){
                    {{ session(['suscription_histream' => '{}']) }}
                }
            </script>
    </body>
</html>
{{-- @php
    session()->forget('suscription_histream');
@endphp --}}