<x-main>

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <img src="https://images.unsplash.com/photo-1465929639680-64ee080eb3ed?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-cover-custom" alt="">
            </div>
        </div>
    </div>

    <h2 class="text-center mt-5 pt-5">Ecco i nostri libri</h2>
    <div class="container div-custom">
        <div class="row">
            @forelse ($books as $book)
            <div class="col-12 col-md-4">
                    <div class="card m-3 card-custom p-0" style="max-width: 400px;">
                        <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://picsum.photos/200/300.jpg" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                            <h5 class="card-title">{{ $book->name }}</h5>
                            <p class="card-text">{{ $book->years ?? 'Data Ignota' }}</p>
                            <p class="card-text"><small class="text-body-secondary">pagine: {{ $book->pages }}</small></p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                    {{-- <li>{{ $book->name }} - {{ $book->years ?? 'Data Ignota' }} - pagine: {{ $book->pages }}</li> --}}
            @empty
                    Nessun Libro trovato
            @endforelse
        </div>
    </div>

    <h2 class="text-center my-5 pt-5">Inserisci un libro</h2>
    <form class="container my-5" method="POST" action="{{ route('store') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Titolo</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            @error('name')
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Anno</label>
            <input type="text" name="years" class="form-control" value="{{ old('years') }}">
            @error('years')
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pagine</label>
            <input type="text" name="pages" class="form-control" value="{{ old('pages') }}">
            @error('pages')
                {{ $message }}
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>
    </form>

</x-main>