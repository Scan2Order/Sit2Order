@extends('layouts.app2')

@section('content')
<<<<<<< HEAD
<!--
<div class="container ">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{$user->name}}</div>

        <div class = "centered1">
        <div class="card text-white bg-info ml-3 centered" style="max-width: 18rem;">
            <div class="card-body">
              <h5>{{$user->name}}</h5>
              <h5>{{$user->email}}</h5>
              <h5>{{$user->gender}}</h5>
              <h5>{{$user->phone}}</h5>
            </div>
            </div>
        </div>

        <div class = "centered">
        <a href="/admin/dashboard/profile/{{$user->id}}">
          <button class="btn btn-primary btn-sm">Update Profile</button>
        </a>
      </div>
      </div>
=======
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
        </div> --}}
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
>>>>>>> Fahmiport
    </div>
</div>
<<<<<<< HEAD
-->

<div class="container">
  <div class="main-body">
  
      
  
        <div class="row gutters-sm">
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                  <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                  <div class="mt-3">
                  <h4>{{$user->name}}</h4>
                  <p class="text-secondary mb-1">{{$user->email}}</p>
                    <p class="text-muted font-size-sm">Malaysia</p>
                    <a href="http://localhost:3010/admin/dashboard/restaurant">
                    <button class="btn btn-primary text-center">Update Profile</button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card mt-3">
              <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                  <span class="text-secondary">https://bootdey.com</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                  <span class="text-secondary">bootdey</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                  <span class="text-secondary">@bootdey</span>
                </li>
                
              </ul>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card mb-3">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Full Name</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    {{$user->name}}
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Email</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    {{$user->email}}
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Phone</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    {{$user->phone}}
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Gender</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                     {{$user->gender}}
                  </div>
                </div>
              </div>
            </div>
            <div class="row gutters-sm">
              <div class="col-sm-6 mb-3">
                <div class="card h-100">
                  <div class="card-body">
                    <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                  
                    <small>Mobile Template</small>
                    <div class="progress mb-3" style="height: 5px">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small>Backend API</small>
                    <div class="progress mb-3" style="height: 5px">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <a href="">
                    <button class ="btn btn-primary">Update Restaurant</button>
                    </a>
                </div>
              </div>
              <div class="col-sm-6 mb-3">
                <div class="card h-100">
                  <div class="card-body">
                    <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                    <small>Web Design</small>
                    <div class="progress mb-3" style="height: 5px">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small>Website Markup</small>
                    <div class="progress mb-3" style="height: 5px">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small>One Page</small>
                    <div class="progress mb-3" style="height: 5px">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small>Mobile Template</small>
                    <div class="progress mb-3" style="height: 5px">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small>Backend API</small>
                    <div class="progress mb-3" style="height: 5px">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>

@endsection


<style>
body{
    margin-top:100px;
    margin-bottom:200px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
  </style>
=======
@endsection
>>>>>>> Fahmiport
