<div>
    @if($initialVariation)
    <livewire:product-dropdown :variations="$initialVariation">
        @endif

        @if ($skuVariant)
        <div class="py-6">
            <div class="font-semibold text-lg py-6">
                {{$skuVariant->formattedPrice()}}
            </div>
            <x-button wire:click.prevent='addToCart'>Add to cart</x-button>
        </div>

        @endif
</div>