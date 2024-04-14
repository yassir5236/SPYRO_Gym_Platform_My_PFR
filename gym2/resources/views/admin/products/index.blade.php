@extends('layout')



@section('content')
    <a href="{{ route('products.create') }}" class="bg-red-800 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Créer
        un nouveau product</a>

    <div class="container mx-auto py-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @forelse ($products as $product)
                <div class="bg-white  shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                    <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}"
                        class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $product->name }}</h3>
                        <p class="text-gray-700 mb-4">{{ $product->description }}</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-gray-800 font-semibold">Price: ${{ number_format($product->price, 2) }}</p>
                                <p class="text-gray-800">Quantity: {{ $product->quantity }}</p>
                                <p class="text-gray-800">Category: {{ $product->category->name }}</p>
                            </div>
                            <div class="flex space-x-4">
                                <a href="{{ route('products.edit', $product->id) }}">
                                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M20.1497 7.93997L8.27971 19.81C7.21971 20.88 4.04971 21.3699 3.27971 20.6599C2.50971 19.9499 3.06969 16.78 4.12969 15.71L15.9997 3.84C16.5478 3.31801 17.2783 3.03097 18.0351 3.04019C18.7919 3.04942 19.5151 3.35418 20.0503 3.88938C20.5855 4.42457 20.8903 5.14781 20.8995 5.90463C20.9088 6.66146 20.6217 7.39189 20.0997 7.93997H20.1497Z"
                                                stroke="#909090" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path d="M21 21H12" stroke="#909090" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </g>
                                    </svg>
                                </a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">
                                        <svg width="30px" height="30px" viewBox="0 0 24 24" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            fill="#000000">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <title>delete_line</title>
                                                <g id="页面-1" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <g id="System" transform="translate(-336.000000, 0.000000)"
                                                        fill-rule="nonzero">
                                                        <g id="delete_line" transform="translate(336.000000, 0.000000)">
                                                            <path
                                                                d="M24,0 L24,24 L0,24 L0,0 L24,0 Z M12.5934901,23.257841 L12.5819402,23.2595131 L12.5108777,23.2950439 L12.4918791,23.2987469 L12.4918791,23.2987469 L12.4767152,23.2950439 L12.4056548,23.2595131 C12.3958229,23.2563662 12.3870493,23.2590235 12.3821421,23.2649074 L12.3780323,23.275831 L12.360941,23.7031097 L12.3658947,23.7234994 L12.3769048,23.7357139 L12.4804777,23.8096931 L12.4953491,23.8136134 L12.4953491,23.8136134 L12.5071152,23.8096931 L12.6106902,23.7357139 L12.6232938,23.7196733 L12.6232938,23.7196733 L12.6266527,23.7031097 L12.609561,23.275831 C12.6075724,23.2657013 12.6010112,23.2592993 12.5934901,23.257841 L12.5934901,23.257841 Z M12.8583906,23.1452862 L12.8445485,23.1473072 L12.6598443,23.2396597 L12.6498822,23.2499052 L12.6498822,23.2499052 L12.6471943,23.2611114 L12.6650943,23.6906389 L12.6699349,23.7034178 L12.6699349,23.7034178 L12.678386,23.7104931 L12.8793402,23.8032389 C12.8914285,23.8068999 12.9022333,23.8029875 12.9078286,23.7952264 L12.9118235,23.7811639 L12.8776777,23.1665331 C12.8752882,23.1545897 12.8674102,23.1470016 12.8583906,23.1452862 L12.8583906,23.1452862 Z M12.1430473,23.1473072 C12.1332178,23.1423925 12.1221763,23.1452606 12.1156365,23.1525954 L12.1099173,23.1665331 L12.0757714,23.7811639 C12.0751323,23.7926639 12.0828099,23.8018602 12.0926481,23.8045676 L12.108256,23.8032389 L12.3092106,23.7104931 L12.3186497,23.7024347 L12.3186497,23.7024347 L12.3225043,23.6906389 L12.340401,23.2611114 L12.337245,23.2485176 L12.337245,23.2485176 L12.3277531,23.2396597 L12.1430473,23.1473072 Z"
                                                                id="MingCute" fill-rule="nonzero"> </path>
                                                            <path
                                                                d="M20,5 C20.5523,5 21,5.44772 21,6 C21,6.55228 20.5523,7 20,7 L19.0001,7 L18.9975,7.07129 L18.9975,7.07129 L18.0638,20.1425 C17.9891,21.1891 17.1182,22 16.0689,22 L7.93116,22 C6.88189,22 6.011,21.1891 5.93624,20.1425 L5.00258,7.07129 C5.00088,7.04738 5.00002,7.02361 5,7 L4,7 C3.44772,7 3,6.55228 3,6 C3,5.44772 3.44772,5 4,5 L20,5 Z M16.9975,7 L7.00259,7 L7.93116,20 L16.0689,20 L16.9975,7 Z M14,2 C14.5523,2 15,2.44772 15,3 C15,3.55228 14.5523,4 14,4 L10,4 C9.44772,4 9,3.55228 9,3 C9,2.44772 9.44772,2 10,2 L14,2 Z"
                                                                id="形状" fill="#8f8f8f"> </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="text-center col-span-3">
                    <p class="text-gray-600">No products found.</p>
                </div>
            @endforelse
        </div>
    </div>





    </div>
@endsection
