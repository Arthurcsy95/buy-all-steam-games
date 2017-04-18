<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>How much does it costs to buy all Steam games</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        html {
            position: relative;
            min-height: 100%;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            margin-bottom: 60px;
        }

        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            /* Set the fixed height of the footer here */
            height: 60px;
        }
        h1,h2 {
            color: #159957;
        }
        #showcase p {
            font-size: 1.8rem;
        }
        .img-responsive {
            margin-top: 86px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div id="showcase" class="col-lg-8">
            <h1 class="page-header">Buy All Steam Games</h1>
            <p>Ever wonder how much does it costs to buy all games from Steam?</p>
            <p>Well, it costs <span class="text-danger">${{ $prices->sale }}</span> at the moment, which originally
                costs <span class="text-danger">${{ $prices->original }}</span> on full price.</p>
            <p>This page was last updated {{ $prices->updated_at }}, based on price of the US region.</p>


            <h2 class="page-header">How does it work?</h2>
            <p>This page was inspired by <a
                        href="http://buyallofsteam.appspot.com/">http://buyallofsteam.appspot.com/</a>, which does
                exactly the same thing, but haven't updated since 2014.</p>
            <p>This page however is based on PHP and Laravel, and automatically fetch data every week.</p>
            <h2 class="page-header">API</h2>
            <p>You can hit <code>{{url('api')}}</code> to get the latest data. It should looks like this.</p>
            <pre>
                {
                    "original":12345.67,
                    "sale":12345.67,
                    "updated_at":"2017-01-11 12:00:00"
                }
            </pre>

            <h2 class="page-header">Github</h2>
            <p>You can find the Github Repo below, if you like this page, make sure give it a star!</p>
            <div>
                <a class="github-button" href="https://github.com/cwang22" data-style="mega"
                   aria-label="Follow @cwang22 on GitHub">Follow @cwang22</a>
                <!-- Place this tag where you want the button to render. -->
                <a class="github-button" href="https://github.com/cwang22/buy-all-steam-games" data-icon="octicon-star"
                   data-style="mega" aria-label="Star cwang22/buy-all-steam-games on GitHub">Star</a>
                <!-- Place this tag where you want the button to render. -->
            </div>
        </div>
        <div class="col-lg-4">
            <img class="img-responsive" src="{{ asset('images/gaben.jpg') }}" alt="gaben">
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>&copy {{ date('Y') }} <a href="https://seewang.me">seewang.me</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>
