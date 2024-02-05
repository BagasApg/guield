<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap/bootstrap.css') }}">

    <script src="{{ asset('assets/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/bootstrap.js') }}"></script>

    <style>
        html,
        body {
            height: 100%
        }
    </style>

    <title>TickAt</title>
</head>

<body>
    <div class="h-100 d-flex align-items-center justify-content-center">
        {{-- <div class="card"> --}}
        <div class="border border-3 d-flex flex-column justify-content-between align-items-center rounded">
            <p class="p-3 px-5 fs-1 m-0 align-middle">Scan here!</p>
            <input id="scan" style="opacity: 0;" class="position-absolute" type="text">

        </div>
        {{-- </div> --}}
    </div>
</body>

<script>
    $('#scan').focus();
    $('#scan').on('focusout', function() {
        $('#scan').focus();

    });
    $(document).on('keypress', function(e) {
        if (e.which == 13) {
            var scanInput = $('#scan').val();
            // alert(scanInput);
            console.log("you searched for:" + scanInput);
            console.log("loading...");
            $('#scan').val('');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: "{{ route('ticket-scan') }}",
                data: {
                    'unique': scanInput
                },
                dataType: "json",
                success: function(res) {
                    if (res == 0) {
                        console.log("not found!");
                        alert("details with unique :\n" + scanInput + "\ndoes not exist!");
                        return;
                    }
                    console.log("found!");
                    alert("details with unique :\n" + scanInput + "\n" + res.unique + "\nFound!\n"
                            + res.name);
                    // alert("chiuy");
                }
            });

        }
    });
</script>

</html>
