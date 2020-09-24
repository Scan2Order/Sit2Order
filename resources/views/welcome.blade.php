{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
            font-weight: bold;
        }

        .links>a {
            color: lightblue;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 300;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Sit2Order
            </div>
            @if (Route::has('login'))
            <div class="top-right links">
                @auth

                <a href="{{ url('/menu') }}">Home</a>
                @else

                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
                @endif
                @endauth
            </div>
            @endif

        </div>
    </div>
</body>

</html> --}}
<div class="container">
	<span>Sit2Order</span>
	<span class="drop"></span>
</div>

<svg>
	<defs>
		<filter id="gooey">
			<feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur"/>
			<feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 35 -20" result="gooey" />
			<feComposite in="SourceGraphic" in2="gooey" operator="atop" />
		</filter>
	</defs>
</svg>
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:900&display=swap');

:root {
	--blue: #0a2bc5;
	--yellow: #ffcc2f;
}

body {
	margin: 0;
	height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
	font-family: 'Poppins', sans-serif;
	background: var(--black);
	color: var(--purple);
}

.container {
	filter: url('#gooey');
	display: flex;
	justify-content: center;
	align-items: center;
}

.liquid-1 {
	position: relative;
}

span {
	letter-spacing: 10px;
	font-size: 8rem;
}

.drop {
	position: absolute;
	background: var(--purple);
	width: 22px;
	height: 22px;
	border-radius: 60% 70% 50% 60% / 65% 66% 60% 65%;
	animation: 6s move ease infinite;
}

.drop:after {
	width: 17px;
	height: 17px;
	content: '';
	position: absolute;
	background: var(--purple);
	border-radius: 50% 60% 60% 70% / 60% 65% 65% 65%;
	left: 25px;
	top: 3px;
	animation: 6s drop_effect ease infinite;
}

svg {
	position: absolute;
}

@keyframes move {
	0%, 100% {
		transform: translate(370px);
	}
	
	50% {
		transform: translate(-370px);
	}
}

@keyframes drop_effect {
	0% {
		left: 0px;
	}
	5% {
		left: 35px;
	}
	45% {
		left: 0px;
	}
	50% {
		left: 0px;
	}
	55% {
		left: -30px;
	}
	95% {
		left: 0px;
	}
	100% {
		left: 0;
	}
}
</style>