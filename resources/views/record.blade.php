@include('header-footar')
<div class="container">
    <div class="card">
        <div class="card-header">Record Full User</div>
        <div class="card-body">
            @foreach ($record as $item)
                <h1>City: {{ $item->city }}</h1>
                <h1>Incharge: {{ $item->lab->incharge }}</h1>
                <h1>Incharge: {{ $item->lab->depp }}</h1>
                <h1>Address: {{ $item->address }}</h1>
            @endforeach
        </div>
    </div>
</div>
