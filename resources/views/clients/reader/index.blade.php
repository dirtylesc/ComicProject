@extends('layouts.reader.master')
@section('content')
    <div class="weekly_book px-0 w_layout d-flex">
        <div class="left col-md-6">
            <h3 class="fs24 fw700">Weekly Book</h3>
            <div class="slider">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <div class="slides">
                    <div class="slide first"><a href="" title="Divine Path System"><img class="bg_slide"
                                src="/Images/weekly-book-1.jpg" alt=""></a>
                    </div>
                    <div class="slide"><a href="" title="Under the Oak Tree"><img src="/Images/weekly-book-2.jpg"
                                alt=""></a></div>
                </div>
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                </div>
                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                </div>
            </div>
        </div>
        <div class="right col-md-6 ps-4">
            <h3 class="fw700">Recent Activities</h3>
            <div class="list">
                <div class="activity">
                    <a href="" title="Let's read together!">
                        <div class="ac-left">
                            <h4>Let's read together!</h4>
                            <p class=" fs14">Read and chat here!</p>
                        </div>
                        <div class="ac-right">
                            <img src="/Images/activity-1.png" alt="">
                        </div>
                    </a>
                </div>
                <div class="activity">
                    <a href="" title="WSA 2021 Winners">
                        <div class="ac-left">
                            <h4>WSA 2021 Winners</h4>
                            <p class=" fs14">See the winners of Webnovel Spirity Awards 2021</p>
                        </div>
                        <div class="ac-right">
                            <img src="/Images/activity-2.png" alt="">
                        </div>
                    </a>
                </div>
                <div class="activity">
                    <a href="" title="Writing Prompts Contest #271 #272">
                        <div class="ac-left">
                            <h4>Writing Prompts Contest #271 #272</h4>
                            <p class=" fs14">WPC #271: Female Lead - Love at First Sight; WPC #272: Male
                                Lead -
                                Beast Taming</p>
                        </div>
                        <div class="ac-right">
                            <img src="/Images/activity-3.png" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="weekly_featured w_layout">
        <div class="text">
            <h3 class="fs24 fw700">Weekly Featured</h3>
        </div>
        <div class="featured">
            <div class="left g_col ">
                <div class="change_img">
                    <p data-index="0"><img src="/Images/weekly-featured-1.jpg" alt=""></p>
                    <p data-index="1"><img src="/Images/weekly-featured-2.jpg" alt=""></p>
                    <p data-index="2"><img src="/Images/weekly-featured-3.jpg" alt=""></p>
                </div>
                <div class="review_img">
                    <div class="review _on">
                        <div class="title">
                            <a href="">
                                <h4 class="fs20">One Last System</h4>
                            </a>
                            <div class="abc">
                                <p class="fs14 mb-0">Fantasy </p>
                                ·<h6 class="mb-0 ms-1"> MotivatedSloth</h6>
                            </div>
                        </div>
                        <p class="fs14 x">Scorned by the world he was born in, Arthur had no other choice
                            but to
                            learn how to deal with it. Yet, just as his hard work and dedication were about
                            to pay
                            off, the hate towards his origins brought him to his death.
                            But that wasn't his fate. His future wasn't supposed to end with his head
                            cracking
                            against the edge of the stairs.
                        </p>
                    </div>
                    <div class="review">
                        <div class="title">
                            <a href="">
                                <h4 class="fs20">After I Maxed All My Weapon Is FUCK</h4>
                            </a>
                            <div class="abc">
                                <p class="fs14 mb-0">Eastern Fantasy </p>
                                ·<h6 class="mb-0 ms-1"> Weapon Master</h6>
                            </div>
                        </div>
                        <p class="fs14 x">It was the year 2050. The world had released an online game,
                            "Second
                            World", that shocked the public beta. Gold from the game could be exchanged for
                            real-life currency, attracting countless players. Every country in the world
                            fought for
                            game resources. The main character immediately entered the game after this wave.
                        </p>
                    </div>
                    <div class="review">
                        <div class="title">
                            <a href="">
                                <h4 class="fs20">Fey Evolution Merchant</h4>
                            </a>
                            <div class="abc">
                                <p class="fs14 mb-0">Eastern Fantasy </p>
                                ·<h6 class="mb-0 ms-1"> Amber Button</h6>
                            </div>
                        </div>
                        <p class="fs14 x">A century after the Spirit Qi Awakening, the world enters a new
                            era.
                            Humans are able to absorb the world's awakened spirit qi, allowing them to tread
                            on a
                            new path—spirit qi occupations!
                            Simultaneously, the plants and animals on the planet are also evolving toward
                            their
                            ancestry line or developing spiritual mutations.
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="list_featured"></div>
            </div>
        </div>
    </div>
    <div class="weekly_special w_layout">
        <div class="special">
            <div class="left">
                <a href=""><img src="/Images/what_next.jpg" alt=""></a>
            </div>
            <div class="right">
                <h3 class="fs24 fw700">Special For You</h3>
                <div class="bottom">
                    <div class="special_img">
                        <a href=""><img src="/Images/special-1.jpg" alt=""></a>
                    </div>
                    <div class="title">
                        <h4 class="fs20">The Legend of Futian</h4>
                        <h5 class="fs12 mb-0">Eastern Fantasy</h5>
                        <i class="fas fa-star fs12"> 4.4</i>
                        <p class="fs12 mb-2">In a time when the Divine Prefectures of the East Sea were in
                            great
                            disarray, Emperor Ye Qing and Donghuang the Great appeared to save the day.
                            Under their
                            rule, the prefectures united and all nations as well as their kings have been...
                        </p>
                        <div class="read_now d-flex">
                            <a href=""><b class="fs14">READ NOW</b></a>
                            <i class="fas fa-plus ms-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="checkbox" style="display: none;" id="ex_more">
    <div class="weekly_ranking w_layout">
        <div class="text">
            <h3 class="fs24 fw700">Ranking</h3>
            <a href="">
                <p class="fs14 fw600">More</p>
            </a>
        </div>
        <div class="list_ranking_ col-md-12">
            <div class="power_ranking col-md-4">
                <div class="title">
                    <h4 class="fs20">Power Ranking</h4>
                </div>
                <div class="list_ranking _1">

                </div>
            </div>
            <div class="new_ranking col-md-4 ms-3">
                <div class="title">
                    <h4 class="fs20">New</h4>
                </div>
                <div class="list_ranking _2">

                </div>
            </div>
            <div class="collection_ranking col-md-4 ms-3">
                <div class="title">
                    <h4 class="fs20">Collection Ranking</h4>
                </div>
                <div class="list_ranking _3">

                </div>
            </div>
        </div>
    </div>
    <div class="extends_more">
        <label for="ex_more">
            <h3 class="fs14 fw600">Extend More</h3>
        </label>
    </div>
    <div class="potential_starlet">
        <div class="starlets">
            <h3 class="fs24 fw700" style="border-bottom: 1px solid #d7d8e0; padding: 30px 0;">Potential
                Starlet
            </h3>
            <div class="list_starlet">
            </div>
        </div>
    </div>
    <div class="under pe-0">
        <div class="rising_fictions w_layout">
            <div class="left">
                <h3 class="fs24 fw700">Rising Fictions</h3>
                <div class="lists">
                    <div class="list_fictions">

                    </div>
                    <div class="fictions_reviews">

                    </div>
                </div>
            </div>
            <div class="right">
                <h3 class="fs24 fw700">Cheering Reads</h3>
                <div class="cheering_reads">
                </div>
            </div>
        </div>
        <div class="O_B_B w_layout">
            <div class="o_b_b">
                <div class="text">
                    <h3 class="fs20 fw700">Original Stories</h3>
                    <p class="fs16 fw400">A Webnovel site for everyone.</p>
                </div>
                <a href="">
                    <img src="/Images/OriginalStories.jpg" alt="" title="Original Stories">
                </a>
            </div>
            <div class="o_b_b">
                <div class="text">
                    <h3 class="fs20 fw700">Becoming an Author</h3>
                    <p class="fs16 fw400">Write novels. Get paid.</p>
                </div>
                <a href="">
                    <img src="/Images/BecomingAnAuthor.jpg" alt="" title="Becoming an Author">
                </a>
            </div>
            <div class="o_b_b">
                <div class="text">
                    <h3 class="fs20 fw700">Book of Authors</h3>
                    <p class="fs16 fw400">A guide on how to become a popular author.</p>
                </div>
                <a href="">
                    <img src="/Images/OriginalStories.jpg" alt="" title="Book of Authors">
                </a>
            </div>
        </div>
        <div class="popular_tags w_layout">
            <div class="title">
                <h3 class="fs24 fw700">Popular Tags</h3>
                <h4 class="fs16 fw600">MORE</h4>
            </div>
            <div class="list_tags"></div>
        </div>
        <div class="signup_email d-flex justify-content-center">
            <div class="naruto_img"><img src="/Images/naruto.png" alt=""></div>
            <div class="text">
                <h3 class="fw700 cl9">Get the latest manga & anime news!</h3>
                <p class="fs20 fw500 cl6">You’ll never miss a beat when you subscribe to our newsletter.
                </p>
            </div>
            <div class="email">
                <input type="text" placeholder="Enter your email address" class="cl6">
                <a href="###">
                    <h4 class="fs20 fw600 mb-0 mt-1">Sign Up</h4>
                </a>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{ asset('js/helper.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#form_login').on('submit', function(e) {
                e.preventDefault();
                const formData = new FormData(this);

                $.ajax({
                    url: "{{ route('api.check_user') }}",
                    type: 'POST',
                    dataType: 'json',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if (data.success) {
                            $('.login_errors').empty();

                            let string =
                                `<div class="alert alert-info" role="alert">${data.message}</div>`

                            $('.success').html(string);

                            setTimeout(function() {
                                e.currentTarget.submit();
                            }, 1000);
                        }
                    },
                    error: function(data) {
                        if (data.responseJSON.errors) {
                            const errors = Object.values(data.responseJSON.errors);
                            showError($('.login_errors'), errors);
                        } else if (!data.success) {
                            $('.login_errors').empty();
                            let string =
                                `<div class="alert alert-danger" role="alert">${data.responseJSON.message}</div>`

                            $('.login_errors').html(string);
                        }
                    }
                });
            });
            $('#form_register').on('submit', function(e) {
                e.preventDefault();
                const formData = new FormData(this);

                $.ajax({
                    url: "{{ route('api.registering') }}",
                    type: 'POST',
                    dataType: 'json',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if (data.success) {
                            $('#ha').click();
                            $('.register_errors').empty();

                            let string =
                                '<span class="alert alert-info" role="alert">Register Account Success..</span>'

                            $('.success').html(string);
                        }
                    },
                    error: function(data) {
                        if (data.responseJSON.errors) {
                            const errors = Object.values(data.responseJSON.errors);
                            showError($('.register_errors'), errors);
                        }
                    }
                });
            });
        });
    </script>
@endpush
