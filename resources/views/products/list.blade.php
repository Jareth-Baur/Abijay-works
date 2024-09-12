<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <table class="table table-striped" id="datatable">
                        <thead>
                            <tr>
                                <td>Code</td>
                                <td>Name</td>
                                <td>ProductLine</td>
                                <td>Vendor</td>
                                <td>Stock</td>
                                <td>Price</td>
                                <td>MSRP</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $prod)
                                    <tr>
                                        <td>{{$prod->productCode}}</td>
                                        <td>{{$prod->productName}}</td>
                                        <td>{{$prod->productLine}}</td>
                                        <td>{{$prod->productVendor}}</td>
                                        <td>{{$prod->quantityInStock}}</td>
                                        <td>{{$prod->buyPrice}}</td>
                                        <td>{{$prod->MSRP}}</td>
                                        <td><a href="/product/{{$prod->productCode}}">View</a></td>
                                    </tr>
                            @endforeach
                        </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
