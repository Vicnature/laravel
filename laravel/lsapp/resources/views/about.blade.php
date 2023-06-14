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
                    <a href="index.html"><img src="{{asset('assets/images/logo.jpg')}}"></a>
                    <div class="nav-links">
                      
                        <ul>
                        <li><a href="{{URL::to('/')}}">HOME</a></li>
                            <li><a href="{{URL::to('/about')}}">ABOUT</a></li>
                            <li><a href="{{URL::to('/ammenities')}}">AMMENITIES</a></li>
                            <li><a href="{{URL::to('/contact')}}">CONTACT</a></li>

                    </div>
                    
                </nav>
            <h1>About Us</h1>
            
            </section>

            <!------------ about us content ---------->
            <section class="about-us">
                <div class="row">
                    <div class="about-col"> 
                        <h1>We are the World's best hotel</h1>
                        <p>Ocean Star hotels endevaours to make your stay extravagant and unforgetable through our amazing facilities. We employ trained staff who have specialized in their various areas of work so as to ensure you a smooth star. We have recently updated our meal plan to include diabetic, chlorestrol and hypertention friendly meals. We pride ourselves with inclusivity and only offer the best.  </p>
                    <a href="" class="hero-btn red-btn">EXPLORE NOW</a>
                </div>
                
                <div class="about-col">
                    <img src="{{ asset('assets/images/food-cuisine.jpg')}}">

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