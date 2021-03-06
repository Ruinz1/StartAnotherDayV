<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body >
    <!-- Header Start -->
    <header class="bg-transparent absolute top-0 left-0 w-full flex 
    items-center z-10">
    <div class="container">
        <div class="flex items-center justify-between relative">
            <div class="px-4">
                <a href="#home" class="font-bold text-lg text-primary block py-6">SAD</a>
            </div>
            <div class="flex items-center px-4">
                <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                    <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                </button>
            <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[550px] 
            w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                <ul class="block lg:flex">
                    <li class="group">
                        <a href="#home" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Home</a>
                    </li>
                    <li class="group">
                        <a href="#about" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">About</a>
                    </li>
                    <li class="group">
                        <a href="#portofolio" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Portofolio</a>
                    </li>
                    <li class="group">
                        <a href="#clients" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Clients</a>
                    </li>
                    <li class="group">
                        <a href="#contact" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Contact</a>
                    </li>
                </ul>
            </nav>
            </div>
        </div>
    </div>
    </header>
    <!-- Header End -->
   <!-- Hero Section Start -->
    <section id="home" class="pt-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="text-base font-semibold text-primary md:text-xl lg:text-2xl">Coaching Platform With <span class="block font-bold text-dark text-4xl mt-1 md:text-5xl lg:text-6xl md:mb-2 lg:mb-5">Start Another Day</span></h1>
                    <h2 class="font-medium text-primary text-lg mb-2 md:text-xl lg:text-xl">Find Your Perfect Coach For a Live Lesson in <span class="text-dark">Mobile Legends</span></h2>
                    <p class="font-medium text-primary mb-10 leading-relax">Become the better gamer in Mobile Legend. Get coaching to reach <span class="text-fuchsia-600">Mytical Glory</span></p>
                    <a href="#" class="text-base text-white font-semibold bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-70 transition duration-300 ease-in-out ">Find Coach</a>
                </div>
            <div class="w-full self-end px-4 lg:w-1/2">
                <div class="relative mt-10 lg:mt-0 lg:right-0">
                    <img src="src/img/logokecil.png" alt="" class="max-w-full mx-auto">
                    <span class="absolute -bottom-0 -z-10 left-1/2 -translate-x-1/2">
                        <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#0F62FE" d="M53,-63.4C67.6,-50.9,77.6,-33.2,80.9,-14.3C84.3,4.7,81,24.8,71.8,42C62.5,59.2,47.2,73.5,29.1,80.3C10.9,87.1,-10.1,86.4,-28.9,79.5C-47.8,72.7,-64.4,59.7,-74.4,42.8C-84.4,25.8,-87.9,4.8,-84.2,-14.7C-80.6,-34.2,-69.8,-52.3,-54.6,-64.6C-39.3,-77,-19.7,-83.7,-0.2,-83.4C19.2,-83.1,38.4,-75.9,53,-63.4Z" transform="translate(100 100) scale(1.0)" />
                          </svg>
                    </span>
                </div>
            </div>
            </div>
        </div>
    </section>
   <!-- Hero Section End -->
   <!-- About Section Start -->
    <section id="about" class="pt-36 pb-32">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2">
                    <h4 class="font-bold uppercase text-primary text-lg mb-3">About Us</h4>
                    <h2 class="font-bold text-dark text-2xl mb-5 max-w-md lg:text-4xl">Growing up you're skill with us</h2>
                    <p class="font-medium text-base text-slate-500 mb-10 leading-relaxed max-w-xl lg:text-lg">Marilah kita stuck bersama di epik atau di mitic dibawah 100</p>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-10">Join Us</h3>
                    <p class="font-medium text-base text-slate-500 mb-6 lg:text-lg">Dengan mengikuti sesi coach kami anda bisa melangkah lebih baik dengan menjadi seorang epik abadi ataupun cuman bisa 1 hero</p>
                <div class="flex items-center">
                    <!-- Discord -->
                    <a href="https://discord.gg/nrvbSYgJ" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <title>Discord</title>
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Discord</title><path d="M20.317 4.3698a19.7913 19.7913 0 00-4.8851-1.5152.0741.0741 0 00-.0785.0371c-.211.3753-.4447.8648-.6083 1.2495-1.8447-.2762-3.68-.2762-5.4868 0-.1636-.3933-.4058-.8742-.6177-1.2495a.077.077 0 00-.0785-.037 19.7363 19.7363 0 00-4.8852 1.515.0699.0699 0 00-.0321.0277C.5334 9.0458-.319 13.5799.0992 18.0578a.0824.0824 0 00.0312.0561c2.0528 1.5076 4.0413 2.4228 5.9929 3.0294a.0777.0777 0 00.0842-.0276c.4616-.6304.8731-1.2952 1.226-1.9942a.076.076 0 00-.0416-.1057c-.6528-.2476-1.2743-.5495-1.8722-.8923a.077.077 0 01-.0076-.1277c.1258-.0943.2517-.1923.3718-.2914a.0743.0743 0 01.0776-.0105c3.9278 1.7933 8.18 1.7933 12.0614 0a.0739.0739 0 01.0785.0095c.1202.099.246.1981.3728.2924a.077.077 0 01-.0066.1276 12.2986 12.2986 0 01-1.873.8914.0766.0766 0 00-.0407.1067c.3604.698.7719 1.3628 1.225 1.9932a.076.076 0 00.0842.0286c1.961-.6067 3.9495-1.5219 6.0023-3.0294a.077.077 0 00.0313-.0552c.5004-5.177-.8382-9.6739-3.5485-13.6604a.061.061 0 00-.0312-.0286zM8.02 15.3312c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9555-2.4189 2.157-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.9555 2.4189-2.1569 2.4189zm7.9748 0c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9554-2.4189 2.1569-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.946 2.4189-2.1568 2.4189Z"/></svg>
                    </a>
                    <!-- Instagram -->
                    <a href="https://www.instagram.com/start_another_day.v/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <title>Instagram</title>
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                    </a>
                </div>
                </div>
            </div>
        </div>

    </section>
   <!-- About Section End -->
   <!-- Portofolio Section Start  -->
    <section id="portofolio" class="pt-36 pb-16 bg-slate-100">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Portofolio</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Coach</h2>
                    <p class="font-medium text-slate-500 text-md md:text-lg">Kami memiliki Coach yang sudah terverifikasi epik abadi & mitik situ-situ aja</p>
                </div>
            </div>
        <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
            <div class="mb-12 p-4 md:w-1/2">
                <div class="rounded-md shadow-md overflow-hidden">
                    <img src="src/img/coach-profile-asry.png" alt="Coach Asry" width="w-full">
                </div>
                <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Coach : BigBoss</h3>
                <p class="font-medium text-base text-slate-500">Sipaling MM</p>
            </div>
            <div class="mb-12 p-4 md:w-1/2">
                <div class="rounded-md shadow-md overflow-hidden">
                    <img src="src/img/coach-profile-ipang.png" alt="Coach Ipang" width="w-full" >
                </div>
                <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Coach : Choperman</h3>
                <p class="font-medium text-base text-slate-500">Jago ling tapi kalah teros</p>
            </div>
        </div>
        </div>
    </section>
    <!-- Portofolio Section End -->
    <!-- Clients Section Start -->
    <section id="clients" class="pt-36 pb-32 bg-slate-700">
        <div class="container">
            <div class="w-full px-4">
                <div class=" mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Clients</h4>
                    <h2 class="font-bold text-white text-3xl mb-4 sm:text-4xl lg:text-5xl">Our Partners</h2>
                    <p class="font-medium text-slate-500 text-md md:text-lg">Sebenarnya bukan partner kami</p>
                </div>
            </div>
            <div class="w-full px-4">
                <div class="flex flex-wrap items-center justify-center">
                    <a href="#"><img src="src/img/ml.png" alt="Mobile Legend" class="max-w-[80px] mx-4 py-4 grayscale opacity-50 transition duration-500 hover:grayscale-0 hover:opacity-100 
                    lg:mx-6 xl:mx-8"></a>
                    <a href="#"><img src="src/img/rrq.png" alt="RRQ" class="max-w-[50px] mx-4 py-4 grayscale opacity-50 transition duration-500 hover:grayscale-0 hover:opacity-100 
                        lg:mx-6 xl:mx-8"></a>
                    <a href="#"><img src="src/img/evos.png" alt="Evos" class="max-w-[50px] mx-4 py-4 grayscale opacity-50 transition duration-500 hover:grayscale-0 hover:opacity-100 
                        lg:mx-6 xl:mx-8"></a>
                    <a href="#"><img src="src/img/ae.png" alt="AE" class="max-w-[50px] mx-4 py-4 grayscale opacity-50 transition duration-500 hover:grayscale-0 hover:opacity-100 
                        lg:mx-6 xl:mx-8"></a>
                    <a href="#"><img src="src/img/aura.png" alt="Aura" class="max-w-[50px] mx-4 py-4 grayscale opacity-50 transition duration-500 hover:grayscale-0 hover:opacity-100 
                        lg:mx-6 xl:mx-8"></a>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- Clients Section End -->
    <!-- Blog Section Start -->
    
    <!-- Blog Section End -->
    <!-- Contact Section Start -->
    <section id="contact" class="pt-36 pb-32">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Contact</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Contact Us</h2>
                    <p class="font-medium text-slate-500 text-md md:text-lg">Silahkan toxic disini, jangan lupa pake nama sama email</p>
                </div>
            </div>
            <form action="">
            <div class="w-full lg:w-2/3 lg:mx-auto">
            <div class="w-full px-4 mb-8">
                <label for="name" class="text-base font-bold text-primary">Name</label>
                <input type="text" id="name" class="w-full bg-slate-200 p-3 text-dark rounded-md focus:outline-none focus:ring-1 focus-within:border-primary" />
            </div>
            <div class="w-full px-4 mb-8">
                <label for="email" class="text-base font-bold text-primary">Email</label>
                <input type="email" id="email" class="w-full bg-slate-200 p-3 text-dark rounded-md focus:outline-none focus:ring-1 focus-within:border-primary" />
            </div>
            <div class="w-full px-4 mb-8">
                <label for="message" class="text-base font-bold text-primary">Message</label>
                <textarea type="text" id="message" class="w-full bg-slate-200 p-3 text-dark rounded-md focus:outline-none focus:ring-1 focus-within:border-primary h-32"></textarea>
            </div>
            <div class="w-full px-4">
                <button class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full transition duration-500 hover:opacity-80 hover:shadow-lg">Send</button>
            </div>
            </div>
        </form>
        </div>
    </section>
    <!-- Contact Section End -->
    <!-- Footer Start -->
    <footer class="bg-dark pt-24 pb-12">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-12 text-slate-300 md:w-1/3">
                    <h2 class="text-white text-4xl font-bold mb-5">Start Another Day</h2>
                    <h3 class="font-bold text-2xl mb-2">Contact Us</h3>
                    <p>StartAnotherDayV@gmail.com</p>
                    <p>We do not have office so please help us ty</p>
                    <p>Palu</p>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold mb-5 text-white text-xl">Cateogry</h3>
                    <ul class="text-slate-300">
                        <li>
                            <a href="#" class="inline-block text-base hover:text-primary mb-3">Tutorial</a>
                        </li>
                        <li>
                            <a href="#" class="inline-block text-base hover:text-primary mb-3">Coaching</a>
                        </li>
                        <li>
                            <a href="#" class="inline-block text-base hover:text-primary mb-3">Jockey</a>
                        </li>
                    </ul>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold mb-5 text-white text-xl">Links</h3>
                    <ul class="text-slate-300">
                        <li>
                            <a href="#home" class="inline-block text-base hover:text-primary mb-3">Home</a>
                        </li>
                        <li>
                            <a href="#about" class="inline-block text-base hover:text-primary mb-3">About</a>
                        </li>
                        <li>
                            <a href="#portofolio" class="inline-block text-base hover:text-primary mb-3">Portofolio</a>
                        </li>
                        <li>
                            <a href="#clients" class="inline-block text-base hover:text-primary mb-3">Clients</a>
                        </li>
                        <li>
                            <a href="#contact" class="inline-block text-base hover:text-primary mb-3">Contacts</a>
                        </li>
                    </ul>
                </div>

            </div>
        <div class="w-full pt-10 border-t border-slate-700">
            <div class="flex items-center justify-center mb-5">
                <!-- Discord -->
                <a href="https://discord.gg/nrvbSYgJ" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-sky-200 text-slate-200 hover:border-primary hover:bg-primary hover:text-white">
                    <title>Discord</title>
                    <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Discord</title><path d="M20.317 4.3698a19.7913 19.7913 0 00-4.8851-1.5152.0741.0741 0 00-.0785.0371c-.211.3753-.4447.8648-.6083 1.2495-1.8447-.2762-3.68-.2762-5.4868 0-.1636-.3933-.4058-.8742-.6177-1.2495a.077.077 0 00-.0785-.037 19.7363 19.7363 0 00-4.8852 1.515.0699.0699 0 00-.0321.0277C.5334 9.0458-.319 13.5799.0992 18.0578a.0824.0824 0 00.0312.0561c2.0528 1.5076 4.0413 2.4228 5.9929 3.0294a.0777.0777 0 00.0842-.0276c.4616-.6304.8731-1.2952 1.226-1.9942a.076.076 0 00-.0416-.1057c-.6528-.2476-1.2743-.5495-1.8722-.8923a.077.077 0 01-.0076-.1277c.1258-.0943.2517-.1923.3718-.2914a.0743.0743 0 01.0776-.0105c3.9278 1.7933 8.18 1.7933 12.0614 0a.0739.0739 0 01.0785.0095c.1202.099.246.1981.3728.2924a.077.077 0 01-.0066.1276 12.2986 12.2986 0 01-1.873.8914.0766.0766 0 00-.0407.1067c.3604.698.7719 1.3628 1.225 1.9932a.076.076 0 00.0842.0286c1.961-.6067 3.9495-1.5219 6.0023-3.0294a.077.077 0 00.0313-.0552c.5004-5.177-.8382-9.6739-3.5485-13.6604a.061.061 0 00-.0312-.0286zM8.02 15.3312c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9555-2.4189 2.157-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.9555 2.4189-2.1569 2.4189zm7.9748 0c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9554-2.4189 2.1569-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.946 2.4189-2.1568 2.4189Z"/></svg>
                </a>
                <!-- Instagram -->
                <a href="https://www.instagram.com/start_another_day.v/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-sky-200 text-slate-200 hover:border-primary hover:bg-primary hover:text-white">
                    <title>Instagram</title>
                    <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                </a>
            </div>
            <p class="font-medium text-xs text-slate-500 text-center">Made by <a href="https://www.instagram.com/muamar_farhan07/" target="_blank" class="text-primary font-bold">Ruinz</a>, Using <a href="https://tailwindcss.com/" target="_blank" class="font-bold text-sky-500">Tailwind CSS</a></p>
        </div>
        </div>
    </footer>
    <!-- Footer End -->
   <script src="src/js/script.js"></script>
</body>
</html>
