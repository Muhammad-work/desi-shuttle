<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dsei Shuttel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
     <link rel="shortcut icon" href="../asset/img/desi-logo4.jpg" type="image/x-icon">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>


    <!--  whatsapp icons code start  -->
<div class="fixed bottom-8 right-8  z-30 ">
    <section id="contact">
        <a href="https://wa.me/+16514703675" target="_blank">
            <i class="fa-brands fa-whatsapp bg-green-700 text-white text-3xl md:text-4xl px-[15px] py-[12px]  rounded-full shadow-lg"></i>
        </a>
    </section>
</div>


<!--  whatsapp icons code end  -->

<nav
class="sticky top-0 left-0 w-full bg-[#296FCE] flex justify-between items-center md:px-5 px-3 py-2 shadow-md z-20 ">
<div class="flex items-center gap-4 w-[55%]">
    <a href="{{ route('home') }}"><img class="w-[75px] h-[75px] rounded-full cursor-pointer"
            src="{{ asset('img/desi-logo4.jpg') }}" alt="Desi Logo"></a>
    <ul class="hidden sm:flex gap-4 text-white cursor-pointer">
        <li><a class="text-md font-normal hover:text-blue-200 transition-all duration-500 text-white "
                href="{{ route('home') }}">Home</a></li>
    </ul>
</div>
<div class="flex items-center gap-4">
  
</div>
</nav>



<!-- nav bar section start -->





<!-- user form start  -->
<div class="w-full lg:w-1/3 bg-[#296FCE] h-auto  md:p-3 p-1 flex flex-col mx-auto mt-4">
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
<!-- user form end  -->


<!-- footer start -->
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

<!-- footer end -->
<script src="{{ asset('js/userform.js') }}"></script>
</body>
</html>