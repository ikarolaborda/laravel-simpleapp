<x-main title="Series">
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="float-end"><a href="{{ route('create_new_series') }}" class="btn btn-dark mb-2">Adicionar</a></div>
        </div>
    </div>
    <hr style="border: 5px solid #000000">
    <div class="row">
        <ul class="list-group">
            @foreach ($series as $serie)
                <li class="list-group-item">{{ $serie->nome }}</li>
            @endforeach
        </ul>
    </div>
</x-main>
