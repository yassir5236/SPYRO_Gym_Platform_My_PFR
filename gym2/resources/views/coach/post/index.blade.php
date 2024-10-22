@extends('layout')
@section('content')
    <div class="  flex flex-col items-center   md:flex-row md:justify-between">


        @if (auth()->user()->role == 'coach')
            <div class=" p-10 ">


                <a href="{{ route('posts.create') }}"
                    class="border border-gray-100 md:w-auto py-2 px-4 bg-gradient-to-r from-red-600 to-gray-800 text-white placeholder-white rounded-md leading-tight focus:outline-none focus:border-blue-500 transition duration-300 ease-in-out">Ajouter
                    un nouveau post</a>
            </div>
        @endif

        <div class="  p-10  ">
            <input type="text" id="searchInput" placeholder="Rechercher..."
                class="border border-gray-100 md:w-auto py-2 px-4 bg-gradient-to-r from-red-600 to-gray-800 text-white placeholder-white rounded-md leading-tight focus:outline-none focus:border-blue-500 transition duration-300 ease-in-out">
        </div>

    </div>



    <div id="searchResults">
        <!-- Les résultats de la recherche seront affichés ici -->
    </div>

    <div id = "adminCheck" data-admin = "{{ auth()->user()->role == 'admin' ? 'true' : 'false' }}"></div>

    <div id="normalPostsContainer" class="w-full flex justify-center align-center mb-20 mt-20">
        <div class="w-3/4  md:w-2/4">
            @foreach ($posts as $post)
                <div class="bg-white shadow-lg overflow-hidden transform hover:scale-105 transition duration-300 mb-6">
                    <div class="relative">
                        <a href="#">
                            <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}"
                                class="w-full h-64 object-cover ">
                            <div
                                class="absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25 hover:bg-transparent transition duration-300">
                            </div>
                        </a>
                    </div>


                    <div class="px-6 py-4 mb-auto">
                        <a href="#"
                            class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out mb-2">{{ $post->title }}</a>
                        <p class="text-gray-500 text-sm" id="postContent{{ $post->id }}">
                            {{ substr($post->content, 0, 100) }}</p>
                        <p class="text-gray-500 text-sm hidden" id="allContent{{ $post->id }}">{{ $post->content }}</p>
                        @if (strlen($post->content) > 100)
                            <button class="voir-plus text-blue-400" data-post-id="{{ $post->id }}">Voir plus</button>
                            <button class="masker text-red-400" data-post-id="{{ $post->id }}"
                                style="display: none;">Masker</button>
                        @endif
                    </div>
                    <div class="px-6 py-3 flex items-center justify-between bg-gray-100">

                        <span class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <svg height="13px" width="13px" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                xml:space="preserve">
                                <g>
                                    <g>
                                        <path
                                            d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <span class="ml-1">{{ $post->created_at->diffForHumans() }}</span>
                        </span>
                        <div class="flex">
                            @if (auth()->id() === $post->user_id)
                                <a href="{{ route('posts.edit', $post->id) }}">
                                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M20.1497 7.93997L8.27971 19.81C7.21971 20.88 4.04971 21.3699 3.27971 20.6599C2.50971 19.9499 3.06969 16.78 4.12969 15.71L15.9997 3.84C16.5478 3.31801 17.2783 3.03097 18.0351 3.04019C18.7919 3.04942 19.5151 3.35418 20.0503 3.88938C20.5855 4.42457 20.8903 5.14781 20.8995 5.90463C20.9088 6.66146 20.6217 7.39189 20.0997 7.93997H20.1497Z"
                                            stroke="#909090" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M21 21H12" stroke="#909090" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="mx-4">
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
                            @endif
                            <div data-post-id="{{ $post->id }}"
                                data-admin="{{ auth()->user()->role == 'admin' ? 'true' : 'false' }}">
                                @if (auth()->user()->role == 'admin')
                                    <form action="{{ route('posts.admin-delete', $post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">
                                            <svg width="50px" height="50px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M22 2L2 22" stroke="#ff570f" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path opacity="0.4"
                                                        d="M20.68 8.70996V19.71C20.68 21.72 19.24 22.57 17.48 21.59L11 17.54"
                                                        stroke="#ff570f" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </path>
                                                    <path
                                                        d="M3.32031 19.95V5.86C3.32031 3.74 5.05031 2 7.18031 2H16.8303C18.0403 2 19.1203 2.56 19.8303 3.44"
                                                        stroke="#ff570f" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </path>
                                                </g>
                                            </svg>
                                        </button>
                                    </form>
                                @endif
                            </div>




                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div id="pagination" class="w-full pb-6 mr-6 p-10">
        pagination {{ $posts->links() }}

    </div>

















    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const adminCheck = document.getElementById('adminCheck');

            const voirPlusButtons = document.querySelectorAll('.voir-plus');
            const maskerButtons = document.querySelectorAll('.masker');

            voirPlusButtons.forEach(button => {
                button.addEventListener('click', function(event) {
                    const postId = this.getAttribute('data-post-id');
                    const postContent = document.getElementById('postContent' + postId);
                    const allContent = document.getElementById('allContent' + postId);

                    postContent.classList.add('hidden');
                    allContent.classList.remove('hidden');
                    this.style.display = 'none';
                    maskerButtons.forEach(maskerButton => {
                        if (maskerButton.getAttribute('data-post-id') === postId) {
                            maskerButton.style.display = 'inline-block';
                        }
                    });
                });
            });

            maskerButtons.forEach(button => {
                button.addEventListener('click', function(event) {
                    const postId = this.getAttribute('data-post-id');
                    const postContent = document.getElementById('postContent' + postId);
                    const allContent = document.getElementById('allContent' + postId);

                    postContent.classList.remove('hidden');
                    allContent.classList.add('hidden');
                    voirPlusButtons.forEach(voirPlusButton => {
                        if (voirPlusButton.getAttribute('data-post-id') === postId) {
                            voirPlusButton.style.display = 'inline-block';
                        }
                    });
                    this.style.display = 'none';
                });
            });

            // Ajoutez un écouteur d'événements pour l'entrée sur l'entrée de recherche
            document.getElementById('searchInput').addEventListener('input', function() {
                handleSearchInput();
            });

            // Appeler handleSearchInput() pour afficher tous les posts la première fois
            handleSearchInput();
        });

        function handleSearchInput() {
            let searchInput = document.getElementById('searchInput').value.trim();

            // Vérifiez si l'entrée de recherche n'est pas vide
            if (searchInput.trim() !== '') {
                document.getElementById('normalPostsContainer').classList.add('hidden');
                document.getElementById('pagination').classList.add('hidden');



                let xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('posts.search') }}', true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.setRequestHeader('X-CSRF-TOKEN', document.head.querySelector('meta[name="csrf-token"]').content);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            let data = JSON.parse(xhr.responseText);
                            console.log(data);
                            if (data.posts && data.posts.length > 0) {
                                let searchResults = document.getElementById('searchResults');
                                searchResults.innerHTML = '';

                                data.posts.forEach(post => {

                                    let postCard = `
                                   
                                    <div  class="    w-3/4 md:w-96 flex justify-center align-center mx-auto mb-20 mt-20">

                                    <div class="bg-white shadow-lg overflow-hidden transform hover:scale-105 transition duration-300 mb-6">
                                        <div class="relative">
                                            <a href="#">
                                                <img src="{{ asset('images/') }}/${post.image}" alt="${post.title}" class="w-full h-64 object-cover ">
                                                <div class="absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25 hover:bg-transparent transition duration-300">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="px-6 py-4 mb-auto">
                                            <a href="#" class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out mb-2">${post.title}</a>
                                            <p class="text-gray-500 text-sm">${post.content}</p>
                                        </div>


                                        <div class="px-6 py-3 flex items-center justify-between bg-gray-100">
                                            ${adminCheck.getAttribute('data-admin') === 'true' ? `
                                                <form action="{{ route('posts.admin-delete', ':postId') }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit">
                                                            <svg width="50px" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                                <g id="SVGRepo_iconCarrier">
                                                                    <path d="M22 2L2 22" stroke="#ff570f" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path opacity="0.4" d="M20.68 8.70996V19.71C20.68 21.72 19.24 22.57 17.48 21.59L11 17.54" stroke="#ff570f" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M3.32031 19.95V5.86C3.32031 3.74 5.05031 2 7.18031 2H16.8303C18.0403 2 19.1203 2.56 19.8303 3.44" stroke="#ff570f" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </g>
                                                            </svg>
                                                        </button>
                                                    </form>
                                                ` : ''}
                                        </div>
                                    </div>
                                </div>
                           
                                `;
                                    postCard = postCard.replace(':postId', post.id);

                                    searchResults.insertAdjacentHTML('beforeend', postCard);
                                });
                            } else {
                                // Affichez un message si aucun résultat n'est trouvé
                                let searchResults = document.getElementById('searchResults');
                                searchResults.innerHTML =
                                    '<p class="text-white text-center">Aucun résultat trouvé.</p>';
                            }
                        } else {
                            console.error('Erreur : ' + xhr.status);
                        }
                    }
                };
                xhr.send('searchTerm=' + encodeURIComponent(searchInput));
            } else {
                document.getElementById('normalPostsContainer').classList.remove('hidden');
                document.getElementById('pagination').classList.remove('hidden');


                let searchResults = document.getElementById('searchResults');
                searchResults.innerHTML = '';
            }
        }
    </script>
@endsection
