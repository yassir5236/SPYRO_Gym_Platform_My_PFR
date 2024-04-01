<html lang="en">

@extends('layout')
@section('content')

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Clothing Ecommerce Website</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />


        <link rel="stylesheet" href="style.css">
        <!-------------------------Font Awesome Icons --------------->
        <script src="https://kit.fontawesome.com/dad03e859c.js" crossorigin="anonymous"></script>
        <!----------x---------------Font Awesome Icons --------x------->

        <!----------x---------------Google font --------x------->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Alkatra&family=Berkshire+Swash&family=Comic+Neue:wght@700&family=Gentium+Book+Plus:wght@400;700&family=Lato:ital,wght@0,400;0,700;0,900;1,700&family=Lexend+Deca:wght@500&family=Lexend:wght@500&family=Montserrat:wght@500&family=Open+Sans:wght@500;800&family=Roboto:wght@100;400&family=Sue+Ellen+Francisco&family=Work+Sans:wght@400;700;900&display=swap"
            rel="stylesheet">

        <link
            href="https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900;&display:swap">
        <!----------x---------------Google font --------x----------------->

    </head>




    {{-- <section id="hero"> --}}
        {{-- <img src="{{asset('storage/images/products.jpg')}}" alt=""> --}}
    {{-- </section> --}}

    {{-- <section id="hero" style="position: relative;">
        <div style="position: relative;">
            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white;">
                <h1 class="text-4xl w-full">Your Tgym is SPYRO</h1> --}}
                {{-- <p class="text-xl">In the gym, we shape body and soul. Each rep hones resilience, strength, and self-awareness. Fitness: where empowerment meets action</p> --}}
            {{-- </div>
        </div>
    </section> --}}

    <section id="hero" style="position: relative;">
        <div style="position: relative;" class="w-full">
            <div class="w-full" style="position: absolute; top: 50%; left: 25%; transform: translate(-50%, -50%); text-align: center; color: white;">
                <style>
                    @import url('https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation:wght@400..700&display=swap');
                
                    #product {
                      font-family: 'Edu NSW ACT Foundation', sans-serif;
                    }
                  </style>
                <h1 class="text-3xl w-full" id="product" style="font-size: 2.5rem;
                ">Fitness ! where empowerment meets action</h1>
                <br>
                <h1 class="text-3xl w-full" id="product" style="font-size: 2.5rem;
                ">In the gym, we shape body and soul.</h1>
                {{-- <p class="text-xl w-48" >In the gym, we shape body and soul. Each rep hones resilience, strength, and self-awareness. Fitness: where empowerment meets action</p> --}}

            </div>
        </div>
    </section>

<div  style="background-color:rgb(171, 168, 168)">



    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='https://codepen.io/Motun/full/OJBwbrQ'">
                <img src="{{asset('storage/images/products.jpg')}}" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Carton Astronault Tshirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fal fa-shopping-cart cart"></i></a>
            </div>


            <div class="pro text-white">
                <img src="https://i.postimg.cc/2yhT2kvb/f2.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5 >Carton Leave Tshirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fal fa-shopping-cart cart"></i></a>
            </div>


            <div class="pro">
                <img src="https://i.postimg.cc/VL9DtNm2/f3.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Rose Multicolor Tshirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fal fa-shopping-cart cart"></i></a>
            </div>


            <div class="pro">
                <img src="https://i.postimg.cc/vZ3hPS1z/f4.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Pink Flower Tshirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fal fa-shopping-cart cart"></i></a>
            </div>



            <div class="pro">
                <img src="https://i.postimg.cc/q7FLrhx6/f5.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Purple Flowering Tshirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fal fa-shopping-cart cart"></i></a>
            </div>



            <div class="pro">
                <img src="https://i.postimg.cc/L86BZByZ/f7.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Short Knicker </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fal fa-shopping-cart cart"></i></a>
            </div>



            <div class="pro">
                <img src="https://i.postimg.cc/zDxJ2f0H/f6.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>2 in 1 Double Routed</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fal fa-shopping-cart cart"></i></a>
            </div>



            <div class="pro">
                <img src="https://i.postimg.cc/x8qcBrpP/n6.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Ash Short</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fal fa-shopping-cart cart"></i></a>
            </div>

        </div>
    </section>



    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="https://i.postimg.cc/hG1hqqK6/n1.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Carton Astronault Tshirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fal fa-shopping-cart cart"></i></a>
            </div>


            <div class="pro">
                <img src="https://i.postimg.cc/BZkSkvxt/n2.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Carton Leave Tshirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fal fa-shopping-cart cart"></i></a>
            </div>


            <div class="pro">
                <img src="https://i.postimg.cc/KYjcC3sk/n3.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Rose Multicolor Tshirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fal fa-shopping-cart cart"></i></a>
            </div>


            <div class="pro">
                <img src="https://i.postimg.cc/vHvQBtJx/n4.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Pink Flower Tshirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fal fa-shopping-cart cart"></i></a>
            </div>



            <div class="pro">
                <img src="https://i.postimg.cc/908J8S4q/n5.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Purple Flowering Tshirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fal fa-shopping-cart cart"></i></a>
            </div>



            <div class="pro">
                <img src="https://i.postimg.cc/X7r8NsGQ/n7.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Short Knicker </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fal fa-shopping-cart cart"></i></a>
            </div>



            <div class="pro">
                <img src="https://i.postimg.cc/JhrH0hYM/n8.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>2 in 1 Double Routed</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fal fa-shopping-cart cart"></i></a>
            </div>



            <div class="pro">
                <img src="https://i.postimg.cc/2Sq4mytJ/f8.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Ash Short</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fal fa-shopping-cart cart"></i></a>
            </div>

        </div>
    </section>

</div>




    <script>
        const bar = document.getElementById('bar')
        const close = document.getElementById('close')
        const nav = document.getElementById('navbar')

        if (bar) {
            bar.addEventListener('click', () => {
                nav.classList.add('active')
            })

            if (close) {
                close.addEventListener('click', () => {
                    nav.classList.remove('active')
                })
            }
        }
    </script>

<div class="flex overflow-hidden relative flex-col items-center px-16 pt-16 pb-6  min-h-[411px] max-md:px-5">
    <img loading="lazy" srcset="..." class="object-cover absolute inset-0 size-full" />
    <div class="flex relative flex-col items-center w-full max-w-[1200px] max-md:max-w-full">
        <div class="text-4xl font-extrabold bg-clip-text text-red-600  bg-[linear-gradient(90deg,#FF4300_-6.33%,#FF6400_103.92%)]">
            SPYRO
        </div>
        <div
            class="mt-12 text-xl font-medium leading-8 text-center text-white text-opacity-80 w-[876px] max-md:mt-10 max-md:max-w-full">
            Join us today and experience the transformative power of our fitness
            classes. Don't wait to start your fitness journey. Take the first step
            towards a healthier, stronger you. Let's sweat, have fun, and make fitness
            a way of life together!
        </div>
        <div class="flex gap-4 mt-9">
            <img loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/3aca9be230183a2a6898520776404b0331eb1332818a1bc2f8239136694eedc1?"
                class="shrink-0 aspect-square w-[35px]" />
            <img loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/9b20cd0d4b798f46fd0632946f2b31333a4503105cc5cce8baefe56247ab9b0a?"
                class="shrink-0 aspect-square w-[35px]" />
            <img loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/a21e7ea4312026044cd9da9b1b10040d65a9d22e1ddc94a9aa112719b65e5ddd?"
                class="shrink-0 aspect-square w-[35px]" />
            <img loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/3e285806a368101f59320414abc2af9fa0ed975c2ebf6502617b0f19a4440da3?"
                class="shrink-0 aspect-square w-[35px]" />
        </div>
        <div class="shrink-0 self-stretch mt-10 h-px bg-white border border-white border-solid max-md:max-w-full">
        </div>
        <div class="flex gap-1.5 mt-6 text-base font-medium leading-7 text-center text-white text-opacity-70">
            <img loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/09dac7e45971ed66cf6243472a0faf4ad3d3654a6c3924264c222493411c2cea?"
                class="shrink-0 w-5 aspect-square" />
            <div class="flex-auto my-auto">SPYRO 2023. All rights reserved.</div>
        </div>
    </div>
</div>

  
@endsection
