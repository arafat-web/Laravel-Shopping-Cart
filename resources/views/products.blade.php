@extends('frontend')
@section('content')

    <div class="container px-6 mx-auto">
        @if ($message = Session::get('success'))
            <div class="p-4 mb-3 bg-green-400 rounded">
                <p class="text-green-800">{{ $message }}</p>
            </div>
        @endif
        <h3 class="text-2xl text-center font-medium text-gray-700">Product List</h3>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($products as $product)
                <div class="w-full max-w-sm mx-auto overflow-hidden block bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <img src="{{ url($product->image) }}" alt="" class="w-full max-h-60">
                    <div class="flex items-end justify-end w-full bg-cover">

                    </div>
                    <div class="px-5 py-3">
                        <h3 class="text-gray-700 uppercase font-bold">{{ $product->name }}</h3>
                        <span class="mt-2 text-gray-500">${{ $product->price }}</span>
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $product->id }}" name="id">
                            <input type="hidden" value="{{ $product->name }}" name="name">
                            <input type="hidden" value="{{ $product->price }}" name="price">
                            <input type="hidden" value="{{ $product->image }}" name="image">
                            <input type="hidden" value="1" name="quantity">
                            <button class="mt-2 bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded text-blue-100 text-xs px-4 py-2">Add To Cart</button>
                        </form>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
@endsection
