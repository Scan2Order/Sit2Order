@extends('layouts.app4')

@section('content')

<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('https://img2.goodfon.com/wallpaper/nbig/c/4e/pasta-eggs-chef-wheat-flour.jpg')">
          <div class="carousel-caption" style="text-shadow: 2px 2px 4px #000000;">
                <h3 class="display-4" style="justify-content: center;">Sit2Order</h3>
                <p class="lead">A trouble-free way to order your food.</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('https://images7.alphacoders.com/417/thumb-1920-417025.jpg')">
          <div class="carousel-caption" style="text-shadow: 2px 2px 4px #000000;">
            <h3 class="display-4">The most simplest way</h3>
            <p class="lead">You can now order with ease and calm.</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('https://a12.d35.myftpupload.com/wp-content/uploads/2020/03/o-CELL-PHONE-facebook.jpg?time=1591835016')">
          <div class="carousel-caption" style="text-shadow: 2px 2px 4px #000000;">
            <h3 class="display-4">All on your fingertips</h3>
            <p class="lead">Where system is designed for people's everyday problems. Where it changes people's
                daily lives.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>
</header>
<div class="container">
</br>
<!--Three Column Section -->
<div class="container-fluid padding">
    <div class = "row text-center padding">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fa fa-code" style="font-size:48px; font-weight: bold; margin-bottom: 10px;"></i>
                <h3>Innovation</h3>
                <p>Leads to help user do something great.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
            <i class="fa fa-check-square-o" style="font-size:48px; font-weight: bold; margin-bottom: 10px;"></i>
            <h3>Reliable</h3>
            <p>System is reliable when used. Customer can use it with ease. </p>
            </div>
            <div class="col-sm-12 col-md-4">
                <i class="fa fa-cutlery" style="font-size:48px; font-weight: bold; margin-bottom: 10px;"></i>
                <h3>Service</h3>
                <p>Provide the user intuitive experience when ordering a meal without
                    queueing on the line.
                </p>
            </div>
    </div>
    <hr class="my-4">
</div>

<!--Service-->
<div class = "container-fluid padding">
    <div class = "row welsome text-center">
        <div class = "col-12">
            <h1 class="display-4">Our Service</h1>
        </br>
        </div>
    </br>
    </div>
    </div>
<div class="container-fluid padding">
    <div class = "row welcome text-center">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <img src = "https://static.thenounproject.com/png/1564595-200.png" width = "30" height = "30" />
            <h3>Order</h3>
            <p>Ordering food can be simple. Just use your smartphones.</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <img src = "https://static.thenounproject.com/png/86700-200.png" width = "30" height = "30" />
            <h3>Choose</h3>
            <p>Choose your food in the system of Sit2Order. Select any food you desire.</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <img src = "https://static.thenounproject.com/png/834251-200.png" width = "30" height = "30" />
            <h3>Received !</h3>
            <p>Your order will send to menu. It prepared and sent it on the table. </p>
        </div>
    </div>
    <hr class="my-4">
</div>

<!--Meet the team -->
<div class = "container-fluid padding">
    <div class = "row welcome text-center">
        <div class = "col-12">
            <h1 class="display-4">Meet The Team</h1>
        </div>
        <hr>
    </div>
</div>

</br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4" style="margin-bottom: 20px">

            <div class="card"
                style="
                display: flex;
                position: relative;
                align-items: center;
                flex-direction: column;
                justify-content: center;
                height: 17rem;">
                <div class="card-header">
                <img src="https://cdn.discordapp.com/attachments/740809976741757008/764767720293662740/me1.jpg" style="width: 100px;
                height: 100px;
                display: flex;
                margin-left: auto;
                margin-right: auto;
                border-radius: 100%;
                box-shadow: $shadow;
                overflow: hidden;
                object-fit: cover;
                box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.274);">
                </div>
                    <div class="card-body">
                        <h3 class="name" style="
                        font-size: 24px;
                        font-weight: 600;
                        text-align: center;
                        color: black;">Muhammad Farris Hirzan Bin Noor Zamrie</h3>
                        <p class="title" style="
                        color: #7C8097;
                        font-size: .75em;
                        font-weight: 300;
                        text-align: center;
                        padding-top: .5em;
                        padding-bottom: .7em;
                        letter-spacing: 1.5px;
                        text-transform: uppercase;">CEO and Founder</p>

                    </div>
            </div>
        </div>
        <div class="col-md-4" style="margin-bottom: 20px">

            <div class="card"
                style="
                display: flex;
                position: relative;
                align-items: center;
                flex-direction: column;
                justify-content: center;
                height: 17rem;">
                <div class="card-header">
                    <img src="https://cdn.discordapp.com/attachments/740809976741757008/764784481584283658/IMG_1102.jpg" style="width: 100px;
                    height: 100px;
                    display: flex;
                    margin-left: auto;
                    margin-right: auto;
                    border-radius: 100%;
                    box-shadow: $shadow;
                    overflow: hidden;
                    object-fit: cover;
                    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.274);">
                    </div>
                    <div class="card-body">
                        <h3 class="name" style="
                        font-size: 24px;
                        font-weight: 600;
                        text-align: center;
                        color: black;">Fahmi Mikail Bin Fahrid</h3>
                        <p class="title" style="
                        color: #7C8097;
                        font-size: .75em;
                        font-weight: 300;
                        text-align: center;
                        padding-top: .5em;
                        padding-bottom: .7em;
                        letter-spacing: 1.5px;
                        text-transform: uppercase;">UI Designer</p>
                    </div>
            </div>
        </div>
        <div class="col-md-4" style="margin-bottom: 20px">

            <div class="card"
                style="
                display: flex;
                position: relative;
                align-items: center;
                flex-direction: column;
                justify-content: center;
                height: 17rem;">
                <div class="card-header">
                    <img src="https://cdn.discordapp.com/attachments/731146080699547688/764784798199709736/d84990d7-b62e-4ce9-b2f8-3adaad19e22d.png" style="width: 100px;
                    height: 100px;
                    display: flex;
                    margin-left: auto;
                    margin-right: auto;
                    border-radius: 100%;
                    box-shadow: $shadow;
                    overflow: hidden;
                    object-fit: cover;
                    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.274);">
                    </div>
                    <div class="card-body">
                        <h3 class="name" style="
                        font-size: 24px;
                        font-weight: 600;
                        text-align: center;
                        color: black;">Jeremiah De Howard Chai</h3>
                        <p class="title" style="
                        color: #7C8097;
                        font-size: .75em;
                        font-weight: 300;
                        text-align: center;
                        padding-top: .5em;
                        padding-bottom: .7em;
                        letter-spacing: 1.5px;
                        text-transform: uppercase;">Web Developer</p>

                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
