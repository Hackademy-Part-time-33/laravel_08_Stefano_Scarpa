{{-- <form action="{{route('register')}}" method="POST">
    @csrf
    <input type="text" name="name" class="form-control">
    <input type="text" name="email" class="form-control">
    <input type="text" name="password" class="form-control">
    <input type="text" name="password_confirmation" class="form-control">
    <button type="submit">Registrati</button>
</form> --}}

<x-main>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <form class="p-5 border rounded" action="{{route('register')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" value="{{old('name')}}" name="name" class="form-control" id="name">
                    @error('name')
                        <span>{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" value="{{old('email')}}" name="email" class="form-control" id="email">
                    @error('email')
                        <span>{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                    @error('password')
                        <span>{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Conferma la Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                </div>

                <button type="submit" class="btn btn-dark">Registrati</button>
                <a href="{{route('login')}}" class="btn btn-outline-dark">Già registrato? Accedi</a>
            </form>
        </div>
    </div>
</div>
</x-main>