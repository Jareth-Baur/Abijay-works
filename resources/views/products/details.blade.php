<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product Details of ')  }}{{$product[0]->productName}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 detail-holder">
                    <div class="product-card">
                        <img src="/assets/img/fordmustang.jfif" alt="Product Image" class="product-image">
                        <div class="product-info">
                            <h1 class="product-title">{{$product[0]->productName}}</h1>
                            <p class="product-description">{{$product[0]->productDescription}}</p>
                            <p class="product-price">${{$product[0]->buyPrice}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
