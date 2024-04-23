<x-layout>
    <x-slot name='title'>
        Home
    </x-slot>
        <section id="about">
            <div class="row">
                <div class="col-lg-12">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="{{ route('cricket') }}">
                                    <img src="{{asset('https://images.pexels.com/photos/46798/the-ball-stadion-football-the-pitch-46798.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')}}" class="d-block w-100" style="max-height:auto;" alt="Image 1">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="{{ route('dance') }}">
                                    <img src="pic2.png" class="d-block w-100"  style="max-height: 450px;" alt="Image 2">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="{{ route('music') }}">
                                    <img src="pic3.jpg" class="d-block w-100" style="max-height: 450px;"  alt="Image 3">
                                </a>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="divider text-dark">
                        <p class="text-black fw-bold fs-4 text-start">
                            Beyond the confines of classrooms, our clubs serve as bridges connecting students from all walks of life. Forge meaningful friendships, collaborate on exciting projects, and surround yourself with like-minded individuals who inspire and uplift you.
                        </p>
                            Come, be a part of something extraordinary. Welcome to the College Club Hub, where every moment is a celebration of unity, creativity, and the pursuit of excellence.
                            <br>
                            <br>
                            <div class="text-center">
                            <button type="button" class="btn btn-primary btn-lg">Join Us</button>
                            </div>
                    </div>
              </div>
        </div>
    </section>
    <br>
    <br>
    <hr>
    <div class="text-center fw-bolder">
        <h1>What's On The Calendar ?</h1>
    </div>
    <br>
    <br>
    <div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="notice-board-container">
                <div class="notice-board">
                    <div class="notices">
                        <div class="notice">Important notice 1: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                        <div class="notice">Important notice 2: Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                        <div class="notice">Important notice 3: Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                        <div class="notice">Important notice 4: Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                        <div class="notice">Important notice 5: Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="image-container">
                <img src="calandar.jpg" class="animated-image" alt="Calendar Image">
            </div>
        </div>
    </div>
    <hr>
    <div class="text-center fw-bolder">
        <h1>Where You Can Find us?</h1>
    </div>
    <br>
    <div class="row">
        <div class="card">
            <div class="card-header ">
                <img src="/images/photo.jpg">
            </div>
            <div class="card-body" style="overflow: hidden;">
                <p class="card-text text-start " >
                If stunning images make your heart beat faster, then Silicon’s Photography Club is where you want to be. Amateurs and professionals alike are a part of this vibrant club.
                </p>
                <div class="text-center"> <!-- Adjust position as needed -->
                    <a href="#" class="btn">Read more</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
            <img src="/images/music.jpg">
            </div>
            <div class="card-body"  style="overflow: hidden;">
                <p class="card-text text-start">
                Soar high as a guitarist, drummer, beatboxer, pianist, a singer or dancer at the Silicon Music Club. Get professionally trained in singing, dancing and guitar, 
                </p>
                <div class="text-center"> <!-- Adjust position as needed -->
                    <a href="#" class="btn">Read more</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
            <img src="/images/sports.jpg">
            </div>
            <div class="card-body" style="overflow: hidden;">
                <p class="card-text text-start ">
                Indulge your craze for cricket by playing intra and inter college tournaments or weekend games at Silicon’s cricket ground. Network over the love of the game 
                </p>
                <div class="text-center"> <!-- Adjust position as needed -->
                    <a href="#" class="btn">Read more</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
            <img src="/images/creative.jpg">
            </div>
            <div class="card-body" style=" overflow: hidden;">
                <p class="card-text text-start">
                The Creative Club is the space to nurture the artists in you. Build large 3D structures from waste, learn modern art, face painting or photoshop, or create tattoo 
                </p>
                <div class="text-center"> <!-- Adjust position as needed -->
                    <a href="#" class="btn">Read more</a>
                </div>
            </div>
        </div>
    </div>
</div>
    <hr>
</x-layout>