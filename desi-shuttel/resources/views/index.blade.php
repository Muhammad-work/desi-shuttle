<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desi Shuttel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="shortcut icon" href="../asset/img/desi-logo4.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <!--  whatsapp icons code start  -->
    <div class="fixed bottom-8 right-8  z-30">
        <section id="contact">
            <a href="https://wa.me/+16514703675" target="_blank">
                <i
                    class="fa-brands fa-whatsapp bg-green-700 text-white text-3xl md:text-4xl px-[15px] py-[12px]  rounded-full shadow-lg"></i>
            </a>
        </section>
    </div>
    <!--  whatsapp icons code end  -->




    <!-- nav bar section start -->

    <nav
        class="sticky top-0 left-0 w-full bg-[#296FCE] flex justify-between items-center md:px-5 px-3 py-2 shadow-md z-20">
        <div class="flex items-center gap-4 w-[55%]">
            <a href="#"><img class="w-[75px] h-[75px] rounded-full cursor-pointer"
                    src="{{ asset('img/desi-logo4.jpg') }}" alt="Desi Logo"></a>
            <ul class="hidden sm:flex gap-4 text-white cursor-pointer">
                <li><a class="text-md font-normal hover:text-blue-200 transition-all duration-500 text-white "
                        href="#home">Home</a></li>
                <li class="text-md font-normal hover:text-blue-200 transition-all duration-500"><a
                        href="#services">Services</a></li>
                <li class="text-md font-normal hover:text-blue-200 transition-all duration-500"><a
                        href="#abouteus">About Us</a></li>
            </ul>
        </div>
        <div class="flex items-center gap-4">
            <a href="{{ url('UserForm') }}"
                class="bg-white text-gray font-bold py-2 md:px-4 px-1 rounded hover:translate-y-[-1px] transition-all">Book
                a Ride</a>
            <button class="block sm:hidden text-2xl text-white">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </nav>



    <!-- nav bar section start -->


    <!-- Sidebar (Hidden by default) -->
    <div
        class="fixed top-0 left-0 w-72 h-screen z-30 bg-white shadow-lg transform transition-all -translate-x-full sidebat-container">
        <button class="absolute top-4 right-4 text-white bg-red-600 py-2 px-4 rounded sidebar-bar">X</button>
        <div class="flex items-center gap-4 w-full mt-[85px]  justify-center ">
            <ul class=" sm:flex flex-col gap-4  cursor-pointer text-black">
                <li class="text-md font-normal hover:bg-blue-200 px-5 py-2  transition-all duration-500"><a
                        href="#home">Home</a></li>
                <li class="text-md font-normal hover:bg-blue-200 px-5 py-2  transition-all duration-500"><a
                        href="#services">Services</a></li>
                <li class="text-md font-normal hover:bg-blue-200 px-5 py-2  transition-all duration-500"><a href="#abouteus">About Us</a></li>
            </ul>
        </div>
    </div>


    {{-- modal msg --}}
    @if (session('success'))
        <div class="alert alert-primary" role="alert">
            {{ session('success') }}
        </div>
    @endif
    {{-- modal msg --}}


    <!-- hero section start -->
    <a href="" id="home"></a>
    <div class="flex flex-col lg:flex-row h-auto  sm:px-0 px-2 ">
        <!-- Login Form Section -->
        <div class="w-full lg:w-1/3 bg-[#296FCE] h-auto  md:p-3 p-1 flex flex-col ">
            <h2 class="text-white text-xl mb-2 text-center mt-2">User Info</h2>
            <form action="{{ route('sendmail') }}" method="POST" autocomplete="off" id="contact-form">
                @csrf
                <div class="mb-2">
                    <label for="fullname" class="form-label text-white">Full Name</label>
                    <input type="text" class="form-control rounded" id="fullname" name="FullName"
                        value="{{ old('FullName') }}" placeholder="Enter Your Full Name">
                    <span id="fullname-error" class="text-red-900 error-message"></span>
                </div>
                <div class="mb-2">
                    <label for="email" class="form-label text-white">Email</label>
                    <input type="email" class="form-control rounded" id="email" name="Email"
                        value="{{ old('Email') }}" placeholder="Enter Your Email Address">
                    <span id="email-error" class="text-red-900 error-message"></span>
                </div>
                <div class="mb-2">
                    <label for="number" class="form-label text-white">Phone</label>
                    <input type="number" class="form-control rounded" id="number" name="Number"
                        value="{{ old('Number') }}" placeholder="Enter Your Phone Number">
                    <span id="number-error" class="text-red-900 error-message"></span>
                </div>
                <div class="mb-2">
                    <label for="pickup" class="form-label text-white">Pick Up Location</label>
                    <div class="flex bg-white rounded">
                        <input type="text" class="form-control rounded-l" name="Pickup_location"
                            value="{{ old('Pickup_location') }}" placeholder="Enter pickup Location"
                            id="pickup-input">
                        <select class="form-select rounded-r" name="select_Pickup_location"
                            aria-label="Default select example" id="selectbox">
                            <option selected>Select Pickup Location</option>
                            <option value="Dallas Fort Worth International Airport">Dallas Fort Worth International Airport</option>
                            <option value="Dallas Love Field">Dallas Love Field</option>
                            <option value="Dallas Executive Airport-RBD">Dallas Executive Airport-RBD</option>
                            <option value="Ralph M. Hall Rockwall Municipal Airport">Ralph M. Hall Rockwall Municipal Airport</option>
                            <option value="Garland-Dallas-Fort Worth Heloplex Heliport">Garland-Dallas-Fort Worth Heloplex Heliport</option>
                            <option value="McKinney National Airport">McKinney National Airport</option>
                            <option value="Air Park-Dallas Airport">Air Park-Dallas Airport</option>
                            <option value="Addison Airport">Addison Airport</option>
                            <option value="The Club DFW">The Club DFW</option>
                            <option value="Arlington Municipal Airport">Arlington Municipal Airport</option>
                        </select>
                    </div>
                    <span id="pickup-error" class="text-red-900 error-message"></span>
                </div>
                <div class="mb-3">
                    <label for="drop" class="form-label text-white">Drop Location</label>
                    <input type="text" class="form-control rounded" id="drop" name="Drop_Location"
                        value="{{ old('Drop_Location') }}" placeholder="Enter Your Drop Location">
                    <span id="drop-error" class="text-red-900 error-message"></span>
                </div>
                <button type="submit" class="bg-white text-gray font-bold py-2 px-4 rounded hover:translate-y-[-1px] transition-all">Submit</button>
            </form>

        </div>

        <!-- Carousel Section -->
        <div class="w-full lg:w-2/3 h-full">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/Banner 1.2.png ') }}" class="md:h-[505px]  d-block w-100 "
                            alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/Banner 2.png ') }}" class="md:h-[505px]  d-block w-100 "
                            alt="...">
                    </div>
                    <!-- <div class="carousel-item">
                    <img src="../asset/img/Banner 1.2.png" class="md:h-[505px]  d-block w-100 " alt="...">
                  </div> -->
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-primary md:py-4 py-3" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-primary md:py-4 py-3" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <!-- hero section end -->




    <!-- members-save  section start-->
    <a href="" id="abouteus"></a>
    <div class="w-full h-auto  mb-[100px] mt-10   text-center px-3">
        <div class="text-[#2D2E2E] w-[70%]  mx-auto">
            <h1 class="font-bold md:text-5xl text-2xl">Most Members Save $300+ Monthly with Desi Shuttle Services</h1>

        </div>
        <div class="mt-5  text-[#2D2E2E]">
            <p>enjoy unlimited savings on your shuttle rides, grocery deliveries, dining out, and more! </p>
        </div>
    </div>

    <!-- members-save  section  end-->


    <!--  Rides section start -->
    <div class="w-full  h-auto bg-gradient-to-br from-[#00493E] to-[#00A676] clip-path-custom bg-cover"
        style="background-image: url('{{ asset('img/hqRAJQ.png') }}')">
        <div class="w-full h-full md:flex justify-around items-center p-10">
            <div class="md:w-[46%] w-full h-auto mt-5">
                <img class="md:w-[529px] h-[350px] w-full  md:mx-auto rounded-2xl"
                    src="{{ asset('img/Untitled-3.png') }}" alt="Promotional image for Careem services">
            </div>
            <div class="mt-7 text-center md:text-left">
                <h1 class="md:font-black text-4xl mb-3 text-white">About Us</h1>
                <p class="font-bold text-xl text-white md:w-[450px]">At Desi Shuttle Services, we’re dedicated to making your travel
                    experience comfortable and convenient. With a mission to provide reliable transportation across the
                    USA, we offer timely, affordable rides that connect you to your destinations with ease.</p>
            </div>
        </div>
    </div>

    <!--  Rides section  end-->


    <!-- Unlimited free delivery section start -->

    <div class="w-full md:h-[460px] h-auto   mt-10">
        <div class="w-full h-full md:flex  justify-around place-items-center  p-10">

            <div class=" ">
                <h1 class="md:font-bold text-4xl mb-3 w-[55%]">Enjoy Convenient Rides with Desi Shuttle Services</h1>
                <p class="font-bold md:w-[600px]">Experience seamless transportation to your favorite destinations, including local
                    attractions, shopping centers, and more. Get reliable service at an affordable rate!</p>

            </div>

            <div class=" mt-7 md:w-[46%] w-[100%] h-auto ">
                <img class="md:w-[529px] w-[100%] h-full md:mx-auto rounded-2xl"
                    src="{{ asset('img/Untitled-4.png ') }}" alt="">
            </div>
        </div>
    </div>
    <!-- Unlimited free delivery section end -->

    <!-- Unlimited free delivery second section start -->

    <div class="w-full md:h-[460px] h-auto mt-10 bg-gradient-to-br from-[#00493E] to-[#00A676] clip-path-custom bg-cover"
        style="background-image: url('{{ asset('img/hqRAJQ.png') }}');">
        <div class="w-full h-full md:flex  justify-between place-items-center  p-10">
            <div class=" md:w-[46%] w-[100%] h-auto mt-5">
                <img class="md:w-[80%] w-[100%] h-full md:mx-auto rounded-2xl"
                    src="{{ asset('img/Untitled-3.png ') }}" alt="">
            </div>
            <div class="mt-7  md:w-[600px] w-full">
                <h1 class="md:font-bold text-3xl mb-3 text-white text-4xl mb-3 text-4xl mb-3 w-[90%]">Quick and
                    Reliable Shuttle Service for Your Daily Commute</h1>
                <p class="font-bold text-[#fff]">Get to your everyday destinations in minutes with Desi Shuttle
                    Services. Enjoy efficient rides to work, school, shopping, and more—all at competitive rates!

                </p>
            </div>
        </div>
    </div>

    <!-- Unlimited free delivery second section end -->


    <!-- Deals and discounts start -->
    {{-- <a href="" id="abouteus"></a>
    <div class="w-full md:h-[460px] h-auto   mt-10">
        <div class="w-full h-full md:flex  justify-around place-items-center  p-10">

            <div class=" ">
                <h1 class="md:font-bold text-4xl mb-3 w-[90%]">Deals and discounts on DineOut</h1>
                <p class="font-bold ">Discover 700+ brunches, buffets, restaurants and more.</p>
                <button
                    class="mt-3 hover:translate-y-[-3px] hover:ease-in-out bg-[#296FCE] text-white px-3 rounded-xl py-2 ">Subscribe
                    now</button>
            </div>

            <div class=" mt-7 md:w-[46%] w-[100%] h-auto ">
                <img class="md:w-[80%] w-[100%] h-full md:mx-auto rounded-2xl"
                    src="{{ asset('img/Untitled-4.png ') }}" alt="">
            </div>
        </div>
    </div> --}}
    <!-- Deals and discounts end -->


    <!-- cards section start  -->

    <a href="" id="services"></a>
    <div class="w-full h-auto  mt-10  p-5 flex flex-wrap justify-center gap-3 ">
        <div class="w-[340px] h-[330px] bg-[#F4F8FB] text-center p-11 rounded-xl ">
            <i class="fa-solid fa-suitcase-rolling text-7xl bg-blue-400 py-[20px] text-white px-[25px] rounded-full"></i>
            <h1 class="font-bold text-2xl  text-center mt-5">No Laguage Limit</h1>
        </div>
        <div class="w-[340px] h-[330px] bg-[#F4F8FB] text-center p-11 rounded-xl ">
            <i class="fa-solid fa-cart-flatbed-suitcase text-6xl bg-blue-400 py-[20px] text-white px-[25px] rounded-full"></i>
            <h1 class="font-bold text-2xl  text-center mt-5">Your Comfort is Our Priority</h1>
        </div>
        <div class="w-[340px] h-[330px] bg-[#F4F8FB] text-center p-11 rounded-xl ">
            <i class="fa-solid fa-house text-7xl bg-blue-400 py-[20px] text-white px-[25px] rounded-full"></i>
            <h1 class="font-bold text-2xl  text-center mt-5">Reach Your Home Safely With Us</h1>
            <p class="mt-2">On unlimited bookings</p>
        </div>
        <div class="w-[340px] h-[330px] bg-[#F4F8FB] text-center p-11 rounded-xl ">
            <i class="fa-solid fa-headphones text-7xl bg-blue-400 py-[20px] text-white px-[25px] rounded-full"></i>
            <h1 class="font-bold text-2xl  text-center mt-5">Contact Us</h1>
        </div>

    </div>
    </div>

    <!-- cards section  end-->


    <!-- subscribe to dise shuttel start -->

    <div class="w-full h-auto mt-9 mb-10 p-5 md:p-10 bg-gradient-to-br from-[#00493E] to-[#00A676] clip-path-custom bg-cover"
        style="background-image: url('{{ asset('img/hqRAJQ.png') }}');">
        <h1 class="text-center text-white font-extrabold text-2xl md:text-4xl mt-10 md:mt-6">Join the Desi Shuttle
            Family</h1>

        <div class="w-full h-full flex flex-col-reverse md:flex-row ">
            <div class="md:w-[40%] w-[80%] mx-auto mt-5">
                <img id="setNewImg" class="w-full h-auto"
                    src="{{ asset('img/Untitled-1.png ') }}"
                    alt="">
            </div>
            <div class="md:w-[55%] w-full py-2 px-3">
                <div class="flex gap-4 md:gap-7 items-center">
                    <div class=" px-4 py-3 md:px-7 md:py-5 text-center rounded-full font-bold text-sm md:text-lg relative cursor-pointer"
                        id="img-count">1
                        <div
                            class="absolute top-[50px] md:top-[60px] left-[27px] md:left-[30px] w-[2px] md:h-[55px] h-[90px] bg-white">
                        </div>
                    </div>
                    <div>
                        <p class="text-lg md:text-2xl font-bold mt-2 md:mt-3 text-white">Tap on Desi Shuttle Service
                        </p>
                        <p class="mt-1 md:mt-2 w-[90%] md:w-[80%]  text-white text-sm md:text-base font-bold">Explore
                            the exclusive benefits of your Desi Shuttle Service.
                        </p>
                    </div>
                </div>
                <div class="flex gap-4 md:gap-7 items-center mt-3 md:mt-5">
                    <div class=" px-4 py-3 md:px-7 md:py-5 text-center rounded-full font-bold text-sm md:text-lg relative cursor-pointer"
                        id="img-count">2
                        <div
                            class="absolute top-[50px] md:top-[60px] left-[27px] md:left-[30px] w-[2px] md:h-[55px] h-[130px] bg-white">
                        </div>
                    </div>
                    <div>
                        <p class="text-lg md:text-2xl font-bold mt-2 md:mt-3 text-white">Confirm Your Booking</p>
                        <p class="mt-1 md:mt-2 w-[90%] md:w-[80%] text-white text-sm md:text-base font-bold">Tap on
                            whatsapp Icon to finalize your ride and start your journey.</p>
                    </div>
                </div>
                <div class="flex gap-4 md:gap-7 items-center mt-3 md:mt-5">
                    <div class=" px-4 py-3 md:px-7 md:py-5 text-center rounded-full font-bold text-sm md:text-lg cursor-pointer"
                        id="img-count">3</div>
                    <div>
                        <p class="text-lg md:text-2xl font-bold mt-2 md:mt-3 text-white">You’re All Set!
                        </p>
                        <p class="mt-1 md:mt-2 w-[90%] md:w-[80%] text-white text-sm md:text-base font-bold">Enjoy a
                            hassle-free travel experience with Desi Shuttle Service. Track your rides in real-time and
                            get updates through your profile.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- subscribe to dise shuttel end -->


    <!-- Top Questions section start -->

    {{-- <div class="w-full h-auto  mb-10 p-2">
        <div class="md:w-[95%] w-full h-full bg-[#296FCE]  block mx-auto rounded-3xl md:p-10 py-3">
            <h1 class="text-center font-bold text-4xl  text-white">Top Questions</h1>

            <div class=" mt-5">
                <div class="md:w-[90%] w-full h-auto mx-auto  text-white ">
                    <div class=" w-full  h-auto flex justify-between gap-4 px-5 py-3 flex place-items-center">
                        <p class="font-bold md:text-xl">What is Careem Plus?</p>
                        <p class="font-bold text-xl cursor-pointer dropDownBtn"><i class="fa-solid fa-plus"></i></p>
                    </div>
                    <div class="mt-2 px-4 pb-4 hidden top-question">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem quasi laudantium consectetur
                            tempora, sed officia accusamus sequi iusto, laboriosam eos odit ex aut ut distinctio, magni
                            facilis rerum officiis omnis repudiandae. Temporibus, corporis ipsam impedit, itaque officia
                            optio voluptates, eos esse reprehenderit eius tempore architecto error quod inventore quos
                            voluptas!</p>
                    </div>
                </div>
                <!-- <div>

            </div> -->
            </div>
            <div class=" mt-5">
                <div class="md:w-[90%] w-full h-auto mx-auto text-white ">
                    <div class=" w-full h-auto flex justify-between px-5 py-3 gap-4 flex place-items-center">
                        <p class="font-bold md:text-xl">Can I use my Careem Plus benefits with other promos and
                            discounts?</p>
                        <p class="font-bold text-xl cursor-pointer dropDownBtn transition-all duration-[1s]"><i
                                class="fa-solid fa-plus"></i></p>
                    </div>
                    <div class="mt-2 px-4 pb-4 hidden top-question transition-all duration-[1s]">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem quasi laudantium consectetur
                            tempora, sed officia accusamus sequi iusto, laboriosam eos odit ex aut ut distinctio, magni
                            facilis rerum officiis omnis repudiandae. Temporibus, corporis ipsam impedit, itaque officia
                            optio voluptates, eos esse reprehenderit eius tempore architecto error quod inventore quos
                            voluptas!</p>
                    </div>
                </div>
                <!-- <div>

            </div> -->
            </div>
            <div class=" mt-5">
                <div class="md:w-[90%] w-full  h-auto mx-auto  text-white ">
                    <div class=" w-full h-auto flex justify-between px-5 py-3 gap-4 flex place-items-center">
                        <p class="font-bold md:text-xl">What happens when I cancel my Careem Plus subscription?</p>
                        <p class="font-bold text-xl cursor-pointer dropDownBtn"><i class="fa-solid fa-plus"></i></p>
                    </div>
                    <div class="mt-2 px-4 pb-4 hidden top-question">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem quasi laudantium consectetur
                            tempora, sed officia accusamus sequi iusto, laboriosam eos odit ex aut ut distinctio, magni
                            facilis rerum officiis omnis repudiandae. Temporibus, corporis ipsam impedit, itaque officia
                            optio voluptates, eos esse reprehenderit eius tempore architecto error quod inventore quos
                            voluptas!</p>
                    </div>
                </div>
                <!-- <div>

            </div> -->
            </div>
        </div>
    </div> --}}

    <!-- Top Questions section end -->



    <!-- Explore more cards start section -->

    <div class="w-full h-auto  px-5 py-5  flex flex-wrap  gap-3 justify-center ">
        <div class="w-[330px] h-[700px] bg-[#3837E4] px-7 py-4 relative rounded-2xl text-white">
            <p class="font-bold text-7xl">Go</p>
            <p class="font-bold text-4xl ">anywhere</p>
            <div class="flex place-items-center gap-2 mt-4">
                <img class="w-[50px]  h-[50px] rounded-full " src="{{ asset('img/desi-logo4.jpg') }}"
                    alt="">
                <span class="font-bold text-2xl">Rides</span>
            </div>
            <div class="flex place-items-center gap-2 mt-4">
                <img class=" w-[50px]  h-[50px] rounded-full" src="{{ asset('img/desi-logo4.jpg') }}"
                    alt="">
                <span class="font-bold text-2xl">Airport Transfers</span>
            </div>
            <div class="flex place-items-center gap-2 mt-4">
                <img class="w-[50px]  h-[50px] rounded-full" src="{{ asset('img/desi-logo4.jpg') }}" alt="">
                <span class="font-bold text-2xl">Group Rides</span>
            </div>
            {{-- <div class="flex place-items-center gap-2 mt-4">
                <img class="w-[50px]  h-[50px] rounded-full" src="{{ asset('img/desi-logo4.jpg') }}" alt="">
                <span class="font-bold text-2xl">SchoolRides</span>
            </div> --}}

            <button class="absolute bottom-[15px] right-8 font-bold text-3xl"><i
                    class="fa-solid fa-arrow-right"></i></button>

        </div>
        <div class="w-[330px] h-[700px] bg-[#D2FFD5] px-7 py-4 relative rounded-2xl text-[#00493E]">
            <p class="font-bold text-7xl">Travel</p>
            <p class="font-bold text-4xl ">anytime </p>
            <div class="flex place-items-center gap-2 mt-4">
                <img class="w-[50px]  h-[50px] rounded-full " src="{{ asset('img/desi-logo4.jpg ') }}"
                    alt="">
                <span class="font-bold text-2xl">Shuttle Services</span>
            </div>
            <div class="flex place-items-center gap-2 mt-4">
                <img class="w-[50px]  h-[50px] rounded-full" src="{{ asset('img/desi-logo4.jpg ') }}"
                    alt="">
                <span class="font-bold text-2xl">Event Transportation</span>
            </div>


            <button class="absolute bottom-[15px] right-8 font-bold text-3xl"><i
                    class="fa-solid fa-arrow-right"></i></button>

        </div>
        {{-- <div class="w-[330px] h-auto bg-[#3837E4] px-7 py-4 relative rounded-2xl text-white">
            <p class="font-bold text-7xl">Get</p>
            <p class="font-bold text-4xl ">anything</p>
            <div class="flex place-items-center gap-2 mt-4">
                <img class="w-[50px]  h-[50px] rounded-full " src="{{ asset('img/desi-logo4.jpg ') }}"
                    alt="">
                <span class="font-bold text-xl">Quik Groceries</span>
            </div>
            <div class="flex place-items-center gap-2 mt-4">
                <img class="w-[50px]  h-[50px] rounded-full" src="{{ asset('img/desi-logo4.jpg ') }}"
                    alt="">
                <span class="font-bold text-xl">Quik Electronics</span>
            </div>
            <div class="flex place-items-center gap-2 mt-4">
                <img class="w-[50px]  h-[50px] rounded-full" src="{{ asset('img/desi-logo4.jpg ') }}"
                    alt="">
                <span class="font-bold text-xl">Supermarkets </span>
            </div>
            <div class="flex place-items-center gap-2 mt-4">
                <img class="w-[50px]  h-[50px] rounded-full" src="{{ asset('img/desi-logo4.jpg ') }}"
                    alt="">
                <span class="font-bold text-xl">Delivery</span>
            </div>
            <div class="flex place-items-center gap-2 mt-4">
                <img class="w-[50px]  h-[50px] rounded-full" src="{{ asset('img/desi-logo4.jpg ') }}"
                    alt="">
                <span class="font-bold text-xl">HomeCleaning</span>
            </div>
            <div class="flex place-items-center gap-2 mt-4">
                <img class="w-[50px]  h-[50px] rounded-full" src="{{ asset('img/desi-logo4.jpg ') }}"
                    alt="">
                <span class="font-bold text-xl">Salon&Spa</span>
            </div>
            <div class="flex place-items-center gap-2 mt-4">
                <img class="w-[50px]  h-[50px] rounded-full" src="{{ asset('img/desi-logo4.jpg ') }}"
                    alt="">
                <span class="font-bold text-xl">Tickets</span>
            </div>
            <div class="flex place-items-center gap-2 mt-4">
                <img class="w-[50px]  h-[50px] rounded-full" src="{{ asset('img/desi-logo4.jpg ') }}"
                    alt="">
                <span class="font-bold text-xl">Laundry</span>
            </div>
            <div class="flex place-items-center gap-2 mt-4">
                <img class="w-[50px]  h-[50px] rounded-full" src="{{ asset('img/desi-logo4.jpg ') }}"
                    alt="">
                <span class="font-bold text-xl">Flowers</span>
            </div>
            <div class="flex place-items-center gap-2 mt-4">
                <img class="w-[50px]  h-[50px] rounded-full" src="{{ asset('img/desi-logo4.jpg ') }}"
                    alt="">
                <span class="font-bold text-xl">Pharmacy</span>
            </div>

            <button class="absolute bottom-[15px] right-8 font-bold text-3xl"><i
                    class="fa-solid fa-arrow-right"></i></button>

        </div> --}}
        <div class="w-[330px] h-[700px] bg-[#3837E4] px-7 py-4 relative rounded-2xl text-white">
            <p class="font-bold text-7xl">Travel
            </p>
            <p class="font-bold text-4xl ">Anywhere You Need</p>
            <div class="flex place-items-center gap-2 mt-4">
                <img class="w-[50px]  h-[50px] rounded-full " src="{{ asset('img/desi-logo4.jpg ') }}"
                    alt="">
                <span class="font-bold text-2xl">Our Services</span>
            </div>
            <div class="flex place-items-center gap-2 mt-4">
                <img class="w-[50px]  h-[50px] rounded-full" src="{{ asset('img/desi-logo4.jpg ') }}"
                    alt="">
                <span class="font-bold text-2xl">Shuttle Rides</span>
            </div>
            <div class="flex place-items-center gap-2 mt-4">
                <img class="w-[50px]  h-[50px] rounded-full" src="{{ asset('img/desi-logo4.jpg ') }}"
                    alt="">
                <span class="font-bold text-2xl">Event Rides</span>
            </div>
            <div class="flex place-items-center gap-2 mt-4">
                <img class="w-[50px]  h-[50px] rounded-full" src="{{ asset('img/desi-logo4.jpg ') }}"
                    alt="">
                <span class="font-bold text-2xl">Airport Transfers</span>
            </div>

            <button class="absolute bottom-[15px] right-8 font-bold text-3xl"><i
                    class="fa-solid fa-arrow-right"></i></button>

        </div>
    </div>

    <!-- Explore more cards end section -->


    <!-- footer section start -->

    <div class="w-full h-auto mt-6 py-5 bg-black text-white">
        <div class="w-full h-full flex px-7 gap-4 flex-wrap md:justify-around py-10">
            <div class="md:w-[200px] w-full ">
                <img class="w-[75px] h-[75px] rounded-full ms-2" src="{{ asset('img/desi-logo4.jpg') }}" alt="Desi Shuttle Logo">
                <img class="w-[140px] mt-5" src="https://www.careem.com/images/app-store.webp" alt="App Store">
                <img class="w-[140px] mt-5" src="https://www.careem.com/images/google-play.webp" alt="Google Play">
                <img class="w-[140px] mt-5" src="https://www.careem.com/images/apk-download.webp" alt="APK Download">
            </div>
            <div class="md:w-[200px] w-full ">
                <p class="font-bold text-xl text-[#296FCE]">Our Services</p>
                <ul class="flex flex-col gap-3 mt-5">
                    <li class="font-normal hover:text-blue-400 transition-all duration-500 cursor-pointer text-xl">Reliable Rides</li>
                    <li class="font-normal hover:text-blue-400 transition-all duration-500 cursor-pointer text-xl">No Language Barrier</li>
                    <li class="font-normal hover:text-blue-400 transition-all duration-500 cursor-pointer text-xl">Your Comfort is Our Priority</li>
                    <li class="font-normal hover:text-blue-400 transition-all duration-500 cursor-pointer text-xl">Safe Travel Home with Us</li>
                </ul>
            </div>
            <div class="md:w-[350px] w-full ">
                <p class="font-bold text-xl text-[#296FCE]">About Us</p>
                <ul class="flex flex-col gap-3 mt-5">
                    <li class="font-normal hover:text-blue-400 transition-all duration-500 cursor-pointer text-xl">
                        At Desi Shuttle Services, we’re dedicated to making your travel experience comfortable and convenient. Our mission is to provide reliable transportation across the USA, ensuring timely, affordable rides that connect you with ease.
                    </li>
                </ul>
            </div>
        </div>
    </div>
    


    <!-- footer section end -->



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
