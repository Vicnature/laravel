<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>Ocean Star Hotels</title>
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        </head>
    <body>

            <section class="sub-header">
                <nav>
                    <a href="index.html">                <img src="{{asset('assets/images/logo.jpg')}}">
</a>
                    <div class="nav-links">
                      
                        <ul>
                        <li><a href="{{URL::to('/')}}">HOME</a></li>
                            <li><a href="{{URL::to('/about')}}">ABOUT</a></li>
                            <li><a href="{{URL::to('/ammenities')}}">AMMENITIES</a></li>
                            <li><a href="{{URL::to('/contact')}}">CONTACT</a></li>

                    </div>
                    
                </nav>
            <h1>Our Ammenities</h1>
            
            </section>

<!---------Ammenities---------->

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


            
           <!------- Footer ------>
           <section class="footer">
            <h4>ABOUT US</h4>
            <p>Ocean Star is a three branch, world-class, four star hotel located in Nairobi, Kigali and Rabat. It features 200 well appointed rooms, eight meeting and <br>conference rooms, restaurant & bar, swimming pool and spa among other top facilities to give you an experience of a lifetime.</p>
            
            </div>
           </section>

        </body>
</html>