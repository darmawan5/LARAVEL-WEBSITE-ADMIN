<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ url('Users/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ url('Users/css/animate.min.css')}}" rel="stylesheet"> 
    <link href="{{ url('Users/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ url('Users/css/lightbox.css')}}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="{{ url('css/app.css') }}" /> -->
    <link href="{{ url('Users/css/responsive.css')}}" rel="stylesheet">
    <link id="css-preset" href="{{ url('Users/css/presets/preset1.css')}}" rel="stylesheet">

</head>

<body>


    <section class="contact">

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">


                <h2>Contact Us</h2>
                <p>Have any question or feedback?</p>

                @if(Session::has('status'))
                <div class="alert alert-success">{{ Session::get('status') }}</div>
                @endif

                <form id="contact-form" action="" method="post">

                    {{ csrf_field() }}

                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" placeholder="you name" />
                    
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" placeholder="you email address" />
                    
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" id="" placeholder="your message" cols="30" rows="10"></textarea>

                    <br><br>

                    <button class="btn btn-success btn-block">Send</button>
                <form>
            </div>
        </div>
    </div>
    </section>

    <script type="text/javascript" src="{{ url('Users/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ url('Users/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="{{ url('Users/js/jquery.inview.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('Users/js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('Users/js/mousescroll.js') }}"></script>
    <script type="text/javascript" src="{{ url('Users/js/smoothscroll.js') }}"></script>
    <script type="text/javascript" src="{{ url('Users/js/jquery.countTo.js') }}"></script>
    <script type="text/javascript" src="{{ url('Users/js/lightbox.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('Users/js/main.js') }}"></script>

    
</body>
</html>