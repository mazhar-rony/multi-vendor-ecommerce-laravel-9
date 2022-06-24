<x-frontend.layout.master>

<x-slot:title>
    Home
</x-slot>

@push('css')
    
@endpush

    {{-- Welcome Slides Area --}}
    <x-frontend.home.welcome_slides />
    {{-- Welcome Slides Area --}}

    {{-- Top Catagory Area --}}
    <x-frontend.home.top_category />
    {{-- Top Catagory Area --}}

    {{-- Quick View Modal Area --}}
    <x-frontend.home.quick_view_modal />
    {{-- Quick View Modal Area --}}

    {{-- New Arrivals Area --}}
    <x-frontend.home.new_arrival />
    {{-- New Arrivals Area --}}

    {{-- Featured Products Area --}}
    <x-frontend.home.featured_products />
    {{-- Featured Products Area --}}

    {{-- Best Rated/Onsale/Top Sale Product Area --}}
    <x-frontend.home.top_sale />
    {{-- Best Rated/Onsale/Top Sale Product Area --}}

    {{-- Offer Area --}}
    <x-frontend.home.offer />
    {{-- Offer Area End --}}

    {{-- Popular Brands Area --}}
    <x-frontend.home.popular_brands />
    {{-- Popular Brands Area --}}

    {{-- Special Featured Area --}}
    <x-frontend.home.special_featured />
    {{-- Special Featured Area --}}

@push('js')
    
@endpush

</x-frontend.layout.master>
