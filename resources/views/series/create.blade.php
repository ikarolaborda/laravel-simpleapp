<div class="container mt-4 m-auto">
    <x-main title="Add new serie">
        <form action="{{ route('add_series') }}" method="POST" class="">
            @csrf
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="nome" class="form-label">Nome da Serie: </label>
                    <div class="input-group">

                    </div>
                    <input type="text" class="form-control" name="nome" value="{{old('nome', $serie->nome ?? '')}}">
                </div>
                <div class="col-md-6 mb-3">
                    <button type="submit" class="btn btn-dark btn-lg">Criar Serie</button>
                </div>
            </div>
        </form>
    </x-main>
</div>
