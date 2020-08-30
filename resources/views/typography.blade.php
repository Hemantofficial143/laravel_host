<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('img/logo1.ico')}}"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Theme Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
</head>

<body role="document">
<nav class="navbar navbar-dark bg-inverse">
    <a class="navbar-brand" href="#">Navbar</a>
    <ul class="nav navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">About</a>
        </li>
    </ul>
    <form class="form-inline float-xs-right">
        <input class="form-control" type="text" placeholder="Search">
        <button class="btn btn-success-outline" type="submit">Search</button>
    </form>
</nav>
<!-- Fixed navbar -->
<div class="container theme-showcase" role="main">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <h1>Theme example</h1>
        <p>This is a template showcasing the optional theme stylesheet included in Bootstrap. Use it as a starting point to create something more unique by building on or modifying it.</p>
    </div>
    <div class="page-header">
        <div class="row">
            <div class="col-md-6">
                <h1>H1 tag</h1>
                <h2>h2 tag</h2>
                <h3>h3 tag</h3>
                <h4>h4 tag</h4>
                <h5>h5 tag</h5>
                <h6>h6 tag</h6>
            </div>
            <div class="col-md-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
        </div>
    </div>
    <div class="page-header">
        <h1>Buttons</h1>
    </div>
    <p>
        <button type="button" class="btn btn-lg btn-default">Default</button>
        <button type="button" class="btn btn-lg btn-primary">Primary</button>
        <button type="button" class="btn btn-lg btn-success">Success</button>
        <button type="button" class="btn btn-lg btn-info">Info</button>
        <button type="button" class="btn btn-lg btn-warning">Warning</button>
        <button type="button" class="btn btn-lg btn-mint">Danger</button>
        <button type="button" class="btn btn-lg btn-link">Link</button>
    </p>
    <p>
        <button type="button" class="btn btn-default">Default</button>
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-danger">Danger</button>
        <button type="button" class="btn btn-link">Link</button>
    </p>
    <p>
        <button type="button" class="btn btn-sm btn-default">Default</button>
        <button type="button" class="btn btn-sm btn-primary">Primary</button>
        <button type="button" class="btn btn-sm btn-success">Success</button>
        <button type="button" class="btn btn-sm btn-info">Info</button>
        <button type="button" class="btn btn-sm btn-warning">Warning</button>
        <button type="button" class="btn btn-sm btn-danger">Danger</button>
        <button type="button" class="btn btn-sm btn-link">Link</button>
    </p>
    <p>
        <button type="button" class="btn btn-sm btn-mint-outline">Mint</button>
        <button type="button" class="btn btn-sm btn-primary-outline">Primary</button>
        <button type="button" class="btn btn-sm btn-success-outline">Success</button>
        <button type="button" class="btn btn-sm btn-info-outline">Info</button>
        <button type="button" class="btn btn-sm btn-warning-outline">Warning</button>
        <button type="button" class="btn btn-sm btn-danger-outline">Danger</button>
        <button type="button" class="btn btn-sm btn-gray-outline">Gray</button>
    </p>
    <p>
        <button type="button" class="btn btn-xs btn-default">Default</button>
        <button type="button" class="btn btn-xs btn-primary">Primary</button>
        <button type="button" class="btn btn-xs btn-success">Success</button>
        <button type="button" class="btn btn-xs btn-info">Info</button>
        <button type="button" class="btn btn-xs btn-warning">Warning</button>
        <button type="button" class="btn btn-xs btn-danger">Danger</button>
        <button type="button" class="btn btn-xs btn-link">Link</button>
    </p>
    <div class="page-header">
        <h1>Tables</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td rowspan="2">1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@TwBootstrap</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <table class="table table-condensed">
                <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="page-header">
        <h1>Thumbnails</h1>
    </div>
    <img src="http://placehold.it/200x200" class="img-thumbnail" alt="A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera">
    <div class="page-header">
        <h1>Labels</h1>
    </div>
    <span class="tag tag-default">Default</span>
    <span class="tag tag-primary">Primary</span>
    <span class="tag tag-success">Success</span>
    <span class="tag tag-info">Info</span>
    <span class="tag tag-warning">Warning</span>
    <span class="tag tag-danger">Danger</span>
    <span class="tag tag-mint">Mint</span>
    <span class="tag tag-gray">Gray</span>
    <br />
    <span class="tag tag-pill tag-default">Default</span>
    <span class="tag tag-pill tag-primary">Primary</span>
    <span class="tag tag-pill tag-success">Success</span>
    <span class="tag tag-pill tag-info">Info</span>
    <span class="tag tag-pill tag-warning">Warning</span>
    <span class="tag tag-pill tag-danger">Danger</span>
    <span class="tag tag-pill tag-mint">Mint</span>
    <span class="tag tag-pill tag-gray">Gray</span>


    <div class="page-header">
        <h1>Dropdown menus</h1>
    </div>
    <div class="dropdown theme-dropdown clearfix">
        <a id="dropdownMenu1" href="#" class="sr-only dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li class="active">
                <a href="#">Action</a>
            </li>
            <li>
                <a href="#">Another action</a>
            </li>
            <li>
                <a href="#">Something else here</a>
            </li>
            <li role="separator" class="divider"></li>
            <li>
                <a href="#">Separated link</a>
            </li>
        </ul>
    </div>
    <div class="page-header">
        <h1>Navs</h1>
    </div>
    <ul class="nav nav-tabs">
        <li role="presentation" class="nav-item">
            <a href="#" class="nav-link active">Home</a>
        </li>
        <li role="presentation" class="nav-item">
            <a href="#" class="nav-link">Profile</a>
        </li>
        <li role="presentation" class="nav-item">
            <a href="#" class="nav-link">Messages</a>
        </li>
    </ul>
    <ul class="nav nav-pills">
        <li role="presentation" class="nav-item">
            <a href="#" class="nav-link active">Home</a>
        </li>
        <li role="presentation" class="nav-item">
            <a href="#" class="nav-link">Profile</a>
        </li>
        <li role="presentation" class="nav-item">
            <a href="#" class="nav-link">Messages</a>
        </li>
    </ul>
    <div class="page-header">
        <h1>Navbars</h1>
    </div>
    <nav class="navbar navbar-light bg-faded">
        <ul class="nav navbar-nav">
            <li class=" nav-item active">
                <a href="#" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="#about" class="nav-link">About</a>
            </li>
            <li class="nav-item">
                <a href="#contact" class="nav-link">Contact</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </li>
        </ul>

        <!--/.nav-collapse -->
    </nav>
    <br />
    <nav class="navbar navbar-dark bg-mint">
        <ul class="nav navbar-nav">
            <li class="active nav-item">
                <a href="#" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="#about" class="nav-link">About</a>
            </li>
            <li class="nav-item">
                <a href="#contact" class="nav-link">Contact</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </li>
        </ul>
        <!--/.nav-collapse -->
    </nav>
    <div class="page-header">
        <h1>Alerts</h1>
    </div>
    <div class="alert alert-success" role="alert">
        <strong>Well done!</strong> You successfully read this important alert message.
    </div>
    <div class="alert alert-info" role="alert">
        <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
    </div>
    <div class="alert alert-warning" role="alert">
        <strong>Warning!</strong> Best check yo self, you're not looking too good.
    </div>
    <div class="alert alert-danger" role="alert">
        <strong>Oh snap!</strong> Change a few things up and try submitting again.
    </div>

    <div class="alert alert-mint" role="alert">
        <strong>Oh snap!</strong> Change a few things up and try submitting again.
    </div>

    <div class="alert alert-gray" role="alert">
        <strong>Oh snap!</strong> Change a few things up and try submitting again.
    </div>
    <div class="page-header">
        <h1>Progress bars</h1>
    </div>
    <progress class="progress progress-striped" value="10" max="100">10%</progress>
    <progress class="progress progress-striped progress-success" value="25" max="100">25%</progress>
    <progress class="progress progress-striped progress-info" value="50" max="100">50%</progress>
    <progress class="progress progress-striped progress-warning" value="75" max="100">75%</progress>
    <progress class="progress progress-striped progress-danger" value="100" max="100">100%</progress>
    <progress class="progress progress-striped progress-mint" value="75" max="100">75%</progress>
    <progress class="progress progress-striped progress-gray" value="50" max="100">50%</progress>
    <div class="page-header">
        <h1>List groups</h1>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <ul class="list-group">
                <li class="list-group-item list-group-item-success">Cras justo odio</li>
                <li class="list-group-item list-group-item-info">Dapibus ac facilisis in</li>
                <li class="list-group-item list-group-item-warning">Morbi leo risus</li>
                <li class="list-group-item list-group-item-danger">Porta ac consectetur ac</li>
                <li class="list-group-item list-group-item-mint">Vestibulum at eros</li>
                <li class="list-group-item list-group-item-gray">Cras justo odio</li>
            </ul>
        </div>
        <!-- /.col-sm-4 -->
        <div class="col-sm-4">
            <div class="list-group">
                <a href="#" class="list-group-item active">
                    Cras justo odio
                </a>
                <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                <a href="#" class="list-group-item">Morbi leo risus</a>
                <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                <a href="#" class="list-group-item">Vestibulum at eros</a>
            </div>
        </div>
        <!-- /.col-sm-4 -->
        <div class="col-sm-4">
            <div class="list-group">
                <a href="#" class="list-group-item active">
                    <h4 class="list-group-item-heading">List group item heading</h4>
                    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                </a>
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">List group item heading</h4>
                    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                </a>
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">List group item heading</h4>
                    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                </a>
            </div>
        </div>
        <!-- /.col-sm-4 -->
    </div>
    <div class="page-header">
        <h1>Cards</h1>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="card card-inverse">
                <h3 class="card-header card-primary">Card title</h3>
                <div class="card-block">
                    Card content
                </div>
            </div>
            <div class="card card-inverse">
                <h3 class="card-header card-warning">Panel title</h3>
                <div class="card-block">
                    Card content
                </div>
            </div>
        </div>
        <!-- /.col-sm-4 -->
        <div class="col-sm-4">
            <div class="card card-inverse">
                <h3 class="card-header card-success">Panel title</h3>
                <div class="card-block">
                    Panel content
                </div>
            </div>
            <div class="card card-inverse">
                <h3 class="card-header card-info">Panel title</h3>
                <div class="card-block">
                    Panel content
                </div>
            </div>
        </div>
        <!-- /.col-sm-4 -->
        <div class="col-sm-4">
            <div class="card card-inverse">
                <h3 class="card-header card-mint">Panel title</h3>
                <div class="card-block">
                    Panel content
                </div>
            </div>
            <div class="card card-inverse">
                <h3 class="card-header card-gray">Panel title</h3>
                <div class="card-block">
                    Panel content
                </div>
            </div>
        </div>
        <!-- /.col-sm-4 -->
    </div>
    <div class="page-header">
        <h1>Carousel</h1>
    </div>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="http://placehold.it/1140x500" alt="First slide">
            </div>
            <div class="carousel-item">
                <img src="http://placehold.it/1040x500" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img src="http://placehold.it/940x500" alt="Third slide">
            </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- /container -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/tether.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>

</html>
