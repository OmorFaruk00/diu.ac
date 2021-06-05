<!-- Toolbar Start -->
<div class="rs-toolbar">
    <div class="container">
        <div class="row">
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
        </div>
    </div>
</div>
<!-- Toolbar End -->
