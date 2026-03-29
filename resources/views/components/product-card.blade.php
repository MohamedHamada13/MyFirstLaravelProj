@props(['product'])

<div class="card" style="width: 18rem;">
    <img src="images/{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">
    <div class="card-body pb-1">
        <h5 class="card-title">{{ $product->name }}</h5>
        <p class="card-text">Price: ${{ $product->price }}</p>
        <a href="#" class="btn btn-primary">Buy</a>
    </div>
</div>