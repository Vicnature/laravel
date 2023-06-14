<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>Ocean Star Hotels</title>
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        </head>
    <body>

            <section class="header">
                <nav>
                    <a href="index.html"><img src="{{asset('assets/images/logo.jpg')}}"></a>
                    <div class="nav-links">
                      
                        <ul>
                            <li><a href="{{URL::to('/')}}">HOME</a></li>
                            <li><a href="{{URL::to('/about')}}">ABOUT</a></li>
                            <li><a href="{{URL::to('/ammenities')}}">AMMENITIES</a></li>
                            <li><a href="{{URL::to('/contact')}}">CONTACT</a></li>

                    </div>
                    
                </nav>

            <div class="text-box">
                <h1>The World's Best Hotel</h1>
                <p>We always deliver uncompromising luxury and comfort, making it feel like home away from home.<br> No compromises, guaranteed satisfaction.</p>
                <a href="" class="hero-btn">Visit Us To Learn More</a>

            </section>


            <!------- Services --------->
            <section class="Services">
            <h1>Services we offer</h1>
            <p>World-class services at your disposal</p>
            
            <div class="row">
                <div class="Services-col">
                    <h3>Hotel Rooms</h3>
                    <p>Ocean Star rooms are designed to provide the highest level of Comfort, Convenience and Efficiency. The hotels have 200 air-conditioned rooms, of these 150 are superior rooms, 10 rooms for guests with special needs, 15 junior suites and 25 executive suites. Guests staying at the hotel have exclusive access to the gym and swimming pool.</p>
                </div>
                <div class="Services-col">
                    <h3>Dining experience</h3>
                    <p>Ocean Star hotels stirr up the cullinary scene with two restaurants, two bars and a 24-hr coffee shop that caters to the needs of our diverse clientele. Each dining experience provides our guests with a taste of a broad selection of international and local cuisine.</p>
                </div>
                <div class="Services-col">
                    <h3>Meetings & events</h3>
                    <p>Located on the ground and first floors, are air-conditioned multi-funtional 5 meeting rooms and 3 board-rooms that cater for upto 500 people and can be adapted to suit specific needs of guests. Each meeting room features natural light,state-of-the-art audiovisual equipment and a business center for the conference users.</p>
                </div>

            </div>
            </section>

            <!------ branches ---->

            <section class="branches">
                <h1>Our Branches</h1>
                <p>We have three chains in different major cities icluding Nairobi, Kigali and Rabat.</p>

                <div class="row">
                    <div class="branches-col">
                    <img src="{{asset('assets/images/location1.jpg')}}">
                    <div class="layer">
                            <h3>MALINDI</h3>

                         </div>
                        </div>

                        <div class="branches-col">
                        <img src="{{asset('assets/images/location2.jpg')}}">
                        <div class="layer">
                                <h3>DIANI</h3>
                                </div>
                                </div>

                                <div class="branches-col">
                                <img src="{{asset('assets/images/location3.jpg')}}">
                                <div class="layer">
                                        <h3>WATAMU</h3>
                                        </div>
                                        </div>        
                </div>

            </section>

            <!----- Ammenities---->
            <section class="ammenities">
                <h1>Our Ammenities</h1>
                <p>We bring you the best of resources.</p>
            <div class="row">
                <div class="ammenities-col">
                <img src="{{asset('assets/images/gym-ammenities.jpg')}}">
                <h3>World Class Gym</h3>
                    <p>We offer a fully equipped gym for all customers at no additional cost.</p>
                </div>
                <div class="ammenities-col">
                <img src="{{asset('assets/images/pool-amenities.jpg')}}">
                <h3>Pool and Spa</h3>
                    <p>We also offer a private swimming pool, spa and sauna that have trained staff ready to cater to your every need.</p>
                </div>
                <div class="ammenities-col">
                <img src="{{asset('assets/images/arcade.jpg')}}">
                <h3>Recreational Games</h3>
                    <p>We offer gaming services in form of an arcade fitted with lots of games to suit all age groups from kids to the adults.</p>
                </div>       


            </div>
            </section>
            <!--------reviews----->
            <section class="reviews">
                <h1>Guest Reviews</h1>
                <p>Below are sample reviews from former guests</p>
                <div class="reviews-col">
                <img src="{{asset('assets/images/woman hands.jpg')}}">
                <div>
                        <p>They really do put the e in exquisite with their refined taste in every aspect of the hotel, from the food to the boardrooms and gym.</p>
                        <h3>Winfred Nzuki</h3>
                    </div>
                </div>
            
                <div class="reviews-col">
                <img src="{{asset('assets/images/wheelchair.jpg')}}">

                <div>
                        <p>They have well equipped rooms for people with special needs that most hotels don't as well as an amazing spa. I definetely recommend trying it out</p>
                        <h3>Martin Munene</h3>
                        
                    </div>
                </div>

            </section>

            <!------- Call To Action ------>
           <section class="cta">
            <h1>Book A Hotel Room From Anywhere<br> Around The Globe</h1>
            <a href="" class="hero-btn">CONTACT US</a>
            
        
        </section>
                
           <!------- Footer ------>
           <section class="footer">
            <h4>ABOUT US</h4>
            <p>Ocean Star is a three branch, world-class, four star hotel located in Nairobi, Kigali and Rabat. It features 200 well appointed rooms, eight meeting and <br>conference rooms, restaurant & bar, swimming pool and spa among other top facilities to give you an experience of a lifetime.</p>
            

            </div>
           </section>

        </body>
</html>