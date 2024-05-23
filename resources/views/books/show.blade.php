<x-main>

    <div class="container mt-5">
        <div class="row g-5">
          <div class="col-md-8">
            <div class=" pb-5">
              <h1 class="pb-4 mb-4 fst-italic ">
                {{ $book->name }}
              </h1>
              <ul>
                <li>
                    <p>Numero pagine: {{ $book->pages ?? 'Non definito'}}</p>
                </li>
                <li>
                    <p>Anno libro: {{ $book->years ?? 'Ignoto' }}</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

</x-main>