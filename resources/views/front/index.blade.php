<link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
<link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />

<div class="container mt-4">

    @foreach ($events as $event)
        <div class="card mb-3">
            <div class="card-head">

            </div>
            <div class="card-body">
                <h3>{{ $event->name }}</h3>
                <p>{{ $event->date }}</p>
                <p>{{ $event->formatDate() }}</p>
            </div>
        </div>
    @endforeach
</div>
