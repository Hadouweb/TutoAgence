<div class="card">
    @if ($property->getPicture())
        <img src="{{ $property->getPicture()->getImageUrl(304, 228) }}" alt="" class="w-100">
    @else
        <img src="/placeholder-image.jpg" alt="" class="w-100">
    @endif
    <div class="card-body">
        <h5 class="card-title">
            <a href="{{ route('property.show', ['slug' => $property->getSlug(), 'property' => $property]) }}">{{ $property->title }}</a>
        </h5>
        <p class="card-text">{{ $property->surface }}m² - {{ $property->city }} ({{ $property->postal_code }})</p>
        <div class="text-primary fw-bold" style="font-size: 1.4rem">
            {{ number_format($property->price, 0, ",", " ") }} €
        </div>
    </div>
</div>
