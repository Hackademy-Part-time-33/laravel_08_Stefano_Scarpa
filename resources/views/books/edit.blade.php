<x-main>

    <div class="px-4 px-md-5 mb-5">
        <div class="row gx-5 justify-content-center ">
            <div class="col-lg-8 col-xl-6 border p-5 rounded">

                <form action="{{ route('books.update', ['book' => $book->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" value="{{$book->name}}" name="name" type="text">
                        <label for="name">Titolo libro</label>
                    </div>
                    @error('name')
                        {{$message}}
                    @enderror

                    <div class="form-floating mb-3">
                        <input class="form-control" id="pages" value="{{$book->pages}}" name="pages" type="text">
                        <label for="name">Pagine del libro</label>
                    </div>
                    @error('name')
                        {{$message}}
                    @enderror

                    <div class="form-floating mb-3">
                        <input class="form-control" id="years" value="{{$book->years}}" name="years" type="text">
                        <label for="name">Anno del libro</label>
                    </div>
                    @error('name')
                        {{$message}}
                    @enderror
                    
                    <div class="form-floating mb-3">
                        <img src="{{Storage::url($book->image)}}" class="img-fluid" style="height: 15rem;" alt="">
                        <input class="form-control" id="image" value="{{$book->image}}" name="image" type="file">
                    </div>
                    
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg" type="submit">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-main>