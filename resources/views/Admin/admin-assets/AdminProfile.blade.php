@extends('layouts.app2')

@section('content')


<div class="page-content page-container" id="page-content">
  <div class="padding">
      <div class="row container d-flex justify-content-center">
          <div class="col-xl-6 col-md-12">
              <div class="card user-card-full">
                  <div class="row m-l-0 m-r-0">
                      <div class="col-sm-4 bg-c-lite-green user-profile">
                          <div class="card-block text-center text-white">
                              <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                          <h6 class="f-w-600">{{$user->name}}</h6>
                          <p>{{$user->id}}</p> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                          </div>
                      </div>
                      <div class="col-sm-8">
                          <div class="card-block">
                              <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                              <div class="row">
                                  <div class="col-sm-6">
                                      <p class="m-b-10 f-w-600">Email</p>
                                  <h6 class="text-muted f-w-400">{{$user->email}}</h6>
                                  </div>
                                  <div class="col-sm-6">
                                      <p class="m-b-10 f-w-600">Phone</p>
                                  <h6 class="text-muted f-w-400">{{$user->phone}}</h6>
                                  </div>
                                </div>
                              <div class="row">
                                  <div class="col-sm-6">
                                      <p class="m-b-10 f-w-600">Gender</p>
                                  <h6 class="text-muted f-w-400">{{$user->gender}}</h6>
                                  </div>
                                  <div class="col-sm-6">
                                      <p class="m-b-10 f-w-600">Most Viewed</p>
                                      <h6 class="text-muted f-w-400">Dinoter husainm</h6>
                                  </div>
                              </div>
                              <ul class="social-link list-unstyled m-t-40 m-b-10">
                                  <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                  <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                  <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                              </ul>
                              <a href="/admin/dashboard/profile/{{$user->id}}">
                                <button class="btn btn-primary btn-sm">Update Profile</button>
                                </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>


<style>
body {
    background-color: #f9f9fa
}

#page-content{
margin-left: 350px;
margin-top: 100px;
}

.padding {
    padding: 3rem !important
}

.user-card-full {
    overflow: hidden
}

.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
    box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
    border: none;
    margin-bottom: 30px
}

.m-r-0 {
    margin-right: 0px
}

.m-l-0 {
    margin-left: 0px
}

.user-card-full .user-profile {
    border-radius: 5px 0 0 5px
}

.bg-c-lite-green {
    background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
    background: linear-gradient(to right, #5a7cee, #8e63f2)
}

.user-profile {
    padding: 20px 0
}

.card-block {
    padding: 1.25rem
}

.m-b-25 {
    margin-bottom: 25px
}

.img-radius {
    border-radius: 5px
}

h6 {
    font-size: 14px
}

.card .card-block p {
    line-height: 25px
}

@media only screen and (min-width: 00px) {
    p {
        font-size: 14px
    }
}

.card-block {
    padding: 1.25rem
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0
}

.m-b-20 {
    margin-bottom: 20px
}

.p-b-5 {
    padding-bottom: 5px !important
}

.card .card-block p {
    line-height: 25px
}

.m-b-10 {
    margin-bottom: 10px
}

.text-muted {
    color: #919aa3 !important
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0
}

.f-w-600 {
    font-weight: 600
}

.m-b-20 {
    margin-bottom: 20px
}

.m-t-40 {
    margin-top: 20px
}

.p-b-5 {
    padding-bottom: 5px !important
}

.m-b-10 {
    margin-bottom: 10px
}

.m-t-40 {
    margin-top: 20px
}

.user-card-full .social-link li {
    display: inline-block
}

.user-card-full .social-link li a {
    font-size: 20px;
    margin: 0 10px 0 0;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out
}


</style>











{{--
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
        {{-- <div class="card">
            <div class="card-header">{{$user->name}}</div>

            <div class="card-body">
            <h1>{{$user->name}}</h1>
            <h1>{{$user->email}}</h1>
            <h1>{{$user->gender}}</h1>
            <h1>{{$user->phone}}</h1>
            </div>
            <a href="/admin/dashboard/profile/{{$user->id}}">
            <button class="btn btn-primary btn-sm">Update Profile</button>
            </a>
        </div> 
        <div class="card"
            style="
            display: flex;
            position: relative;
            align-items: center;
            flex-direction: column;
            justify-content: center;">
                <div class="card-body">
                    <h3 class="name" style="
                    font-size: 24px;
                    font-weight: 600;
                    text-align: center;">{{$user->name}}</h3>
                    <p class="title" style="
                    color: #7C8097;
                    font-size: .75em;
                    font-weight: 300;
                    text-align: center;
                    padding-top: .5em;
                    padding-bottom: .7em;
                    letter-spacing: 1.5px;
                    text-transform: uppercase;">{{$user->phone}}</p>
                    <p class="description" style="
                    color: #080911;
                    font-size: 14px;
                    font-weight: 300;
                    text-align: center;
                    margin-bottom: 1.3em;">{{$user->gender}} | {{$user->email}}</p>
                    <a class="btn" href="/admin/dashboard/profile/{{$user->id}}" role="button"
                    style="
                    color: #fff;
                    width: 200px;
                    outline: none;
                    border: none;
                    cursor: pointer;
                    font-weight: 300;
                    margin-left: auto;
                    margin-right: auto;
                    border-radius: 70px;
                    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.274);
                    background: rgba(47, 24, 70, 0.897);
                    text-decoration: none;
                    text-transform: uppercase;
                    letter-spacing: 2.5px;
                    font-weight: 500;">Update Profile</a>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
