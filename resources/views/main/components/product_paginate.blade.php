<div class="row g-3">
    @if ($products->count())
        @foreach ($products as $index => $product)
            <div
                class="card border-0 col-md-6 col-lg-4 bg-transparent my-3 position-relative">
                <img src="{{ asset($product->primary_image) }}" alt="">
                <div><a href="{{ route('shop.show', $product) }}"> <span style="absolute!important"
                            class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center more">more</span></a>
                </div>
                <div class="text-center">
                    <div class="rating mt-3">
                        <span class="text-primary"><i class="fas fa-star"></i></span>
                        <span class="text-primary"><i class="fas fa-star"></i></span>
                        <span class="text-primary"><i class="fas fa-star"></i></span>
                        <span class="text-primary"><i class="fas fa-star"></i></span>
                        <span class="text-primary"><i class="fas fa-star"></i></span>
                    </div>
                    <h6 class="text-capitalize my-1">{{ $product->name }}</h6>
                    </p>
                    <span class="fw-bold">Gh₵ {{ $product->price }}.00</span>
                </div>
            </div>
        @endforeach
        <div class="black" >
            {{$products->links()}}

          </div>
    @endif
</div>

@push('scripts')
   {{-- <script>
        $(document).ready(function(){

        })
   </script> --}}
@endpush
