<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $name }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            body, html, #meet {
                margin: 0;
                overflow-x: hidden; 
                overflow-y: auto;
            }
        </style>
    </head>
    <body>
        <div id="meet"></div>
        <script src="{{ setting('histream.server').'/external_api.js' }}"></script>
        <script>
            const domain = "{{ str_replace('https://', '', setting('histream.server')) }}";
            const options = {
                roomName: '{{ $name }}',
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
            let maxParticipants = '{{ $plan_user->status }}' == 1 ? '{{ $plan_user->max_person }}' : '{{ $plan->max_person }}';
            const api = new JitsiMeetExternalAPI(domain, options);
            api.addEventListener('participantJoined', res=>{
                setTimeout(() => {
                    let numberOfParticipants = api.getNumberOfParticipants();
                    if(newParticipant && numberOfParticipants > maxParticipants){
                        api.dispose();
                        window.location = '{{ url("conferencia/error/max_participants") }}'
                    }
                    newParticipant = false;
                }, 1000);
            });
        </script>
    </body>
</html>
