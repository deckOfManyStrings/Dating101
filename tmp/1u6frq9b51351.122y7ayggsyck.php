<!doctype html>
<html lang="en">
<head>
    <!--
    Bobby Kingsada
    1/19/18
    home.html
    The view for the index page of my dating site
    -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Dating</title>
</head>
<body>
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Dating</li>
</ol>


<div class="container">
    <div class="card mx-auto" id="main">
        <div class="row">
            <div class="col-md-6 justify-content-start" >
                <div class="card-block text-center mx-auto">
                    <h3 class="card-title">Dating</h3>
                    <p class="card-text" id="summary">Welcome to the web's most successful dating website. We have the highest success rate of couples on the web. User's are matched by interest and location. Find out why so many others have found love on our site!</p>
                    <h5 class="card-text">Here's what our users are saying about us.</h5>
                    <hr>
                    <div id="reviews">
                        <p class="card-text">"I met the love of my life after only a month!" - Andrea</p>
                        <p class="card-text">"It was so easy to set up my profile and start meeting people. I didn't realize how many others were looking for love in my area." - John Smith</p>
                        <p class="card-text">"Just try it! You'll never be the same!" - Sarah</p>
                    </div>
                    <hr>
                    <a href="../dating101/myinfo" class="btn btn-primary">Create a Profile!</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="rounded">
                    <img class="rounded mx-auto d-block"
                         src="http://media.beliefnet.com/~/media/photos-with-attribution/love-and-family/relationships/bringing-fire-back-to-the-relationship/youngcoupleshutterstock_113167744_2.jpg?h=318"
                         alt="couple" width="400" height="400">
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>