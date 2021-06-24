<!-- Toolbar Start -->
<div class="rs-toolbar">
    <div class="container-fluid">

        <Header-tool-bar/>

<!--        <div class="row">
            <div class="col-md-2">
                <div class="rs-toolbar-left">
                    <div class="welcome-message">
                        <i class="fa fa-bank"></i><span>Welcome to DIU</span>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <div class="rs-toolbar-right">
                    <div class="toolbar-share-icon">
                        <ul>

                            <li><a href="https://international.diu.ac" target="_blank">International</a></li>
                            <li><a href="https://blog.diu.ac" target="_blank">Blog</a></li>
                            <li @if(Request::is('club')) class="toolbar-share-icon-active" @endif><a href="{{ route('club') }}">Club</a></li>
                            <li><a href="https://jobs.diu.ac" target="_blank">Career</a></li>
                            <li @if(Request::is('publications')) class="toolbar-share-icon-active" @endif><a href="{{ route('publications') }}">Publications</a></li>
                            <li @if(Request::is('convocation')) class="toolbar-share-icon-active" @endif><a href="{{ route('convocation') }}">Convocation</a></li>
                            <li><a href="https://students.diu.ac" target="_blank">Students Portal</a></li>
                            <li @if(Request::is('certificate-verification')) class="toolbar-share-icon-active" @endif><a href="{{ route('certificate-verification') }}">Certificate Verification</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>-->

    </div>
</div>
<!-- Toolbar End -->


<!--<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #01AA4D">
    <a class="navbar-brand" href="{{ route('homePage') }}"><i class="fa fa-bank text-white"></i><span> Welcome to DIU</span></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <a class="nav-link" href="https://international.diu.ac" target="_blank">International</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="https://blog.diu.ac" target="_blank">Blog</a>
            </li>

            <li class="nav-item @if(Request::is('club')) active @endif">
                <a class="nav-link" href="{{ route('club') }}">Club</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="https://jobs.diu.ac" target="_blank">Career</a>
            </li>

            <li class="nav-item @if(Request::is('publications')) active @endif">
                <a class="nav-link" href="{{ route('publications') }}">Publications</a>
            </li>

            <li class="nav-item @if(Request::is('convocation')) active @endif">
                <a class="nav-link" href="{{ route('convocation') }}">Convocation</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="https://students.diu.ac" target="_blank">Students Portal</a>
            </li>

            <li class="nav-item @if(Request::is('certificate-verification')) active @endif">
                <a class="nav-link" href="{{ route('certificate-verification') }}">Certificate Verification</a>
            </li>

        </ul>
    </div>
</nav>-->
