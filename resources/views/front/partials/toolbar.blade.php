<!-- Toolbar Start -->
<div class="rs-toolbar">
    <div class="container-fluid">

        {{--
        <Header-tool-bar /> --}}
        <div class="row">

            <div class="col-4 col-sm-4 col-md-2">
                <div class="rs-toolbar-left">
                    <div class="welcome-message">
                        <div class="large-device">
                            <a :href="route('homePage')">
                                <i class="fa fa-bank"></i>
                                <span>Welcome to Dhaka International University</span>
                            </a>
                        </div>
                        <div class="extra-small-device">
                            <a :href="route('homePage')">
                                <i class="fa fa-bank"></i>
                                <span>Welcome to DIU</span>
                            </a>
                        </div>
                        <div class="medium-device">
                            <a :href="route('homePage')">
                                <i class="fa fa-bank"></i>
                                <span>Welcome to DIU</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-8 col-sm-8 col-md-10">
                <div class="rs-toolbar-right">
                    <div class="toolbar-share-icon">
                        <ul>
                            <span class="large-device">                            
                                

                                <li><a href="https://iqac.diu.ac" target="_blank">IQAC</a></li>
                                <li><a href="http://koha.diu.ac.bd" target="_blank">Library</a></li>
                                <li><a href="https://international.diu.ac" target="_blank">International</a></li>
                                <li><a href="https://blog.diu.ac" target="_blank">Blog</a></li>
                                <li><a :class="route().current() == 'club' ? 'toolbar-share-icon-active' : ''"
                                        :href="route('club')">Club</a></li>
                                <li><a href="https://jobs.diu.ac" target="_blank">Career</a></li>
                                <li><a :class="route().current() == 'publications' ? 'toolbar-share-icon-active' : ''"
                                        :href="route('publications')">Publications</a></li>
                                <li @if(Request::is('journals')) class="toolbar-share-icon-active" @endif><a 
                                        href={{ url('/journals') }}>Journals</a></li>
                                <li><a :class="route().current() == 'convocation' ? 'toolbar-share-icon-active' : ''"
                                        :href="route('convocation')">Convocation</a></li>
                                <li><a href="https://students.diu.ac" target="_blank">Students Portal</a></li>
                                <li><a :class="route().current() == 'certificate-verification' ? 'toolbar-share-icon-active' : ''"
                                        :href="route('certificate-verification')">Certificate Verification</a></li>

                            </span>

                            <span class="medium-device">
                                <li><a href="https://iqac.diu.ac" target="_blank">IQAC</a></li>
                                <li><a href="http://koha.diu.ac.bd" target="_blank">Library</a></li>
                                <li><a href="https://international.diu.ac" target="_blank">International</a></li>
                                <li><a href="https://blog.diu.ac" target="_blank">Blog</a></li>
                                <li><a :class="route().current() == 'club' ? 'toolbar-share-icon-active' : ''"
                                        :href="route('club')">Club</a></li>
                                <li><a href="https://jobs.diu.ac" target="_blank">Career</a></li>
                                <li><a :class="route().current() == 'publications' ? 'toolbar-share-icon-active' : ''"
                                        :href="route('publications')">Publications</a></li>
                                        

                                <li ><a href="javaScript:void(0)" id="seeMoreLinkMedium">See
                                        More...</a></li>
                                <div id="seeMoreTemplateMedium" style="display: none">
                                    <li @if(Request::is('journals')) class="toolbar-share-icon-active" @endif><a 
                                        href={{ url('/journals') }}>Journals</a></li>

                                    <li><a :class="route().current() == 'convocation' ? 'toolbar-share-icon-active' : ''"
                                            :href="route('convocation')">Convocation</a></li>
                                    <li><a href="https://students.diu.ac" target="_blank">Students Portal</a></li>
                                    <li><a :class="route().current() == 'certificate-verification' ? 'toolbar-share-icon-active' : ''"
                                            :href="route('certificate-verification')">Certificate Verification</a></li>
                                    <li><a href="javascript:void(0)" id="hideMoreLinkMedium">
                                            <i class="fa fa-close"></i>
                                        </a></li>
                                    </div>
                            </span>

                            <span class="small-device">
                                <li><a href="https://iqac.diu.ac" target="_blank">IQAC</a></li>
                                <li><a href="http://koha.diu.ac.bd" target="_blank">Library</a></li>
                                <li><a href="https://international.diu.ac" target="_blank">International</a></li>
                                <li><a href="https://blog.diu.ac" target="_blank">Blog</a></li>
                                <li><a :class="route().current() == 'club' ? 'toolbar-share-icon-active' : ''"
                                        :href="route('club')">Club</a></li>

                                        <li ><a href="javaScript:void(0)" id="seeMoreLinkSmall">See
                                            More...</a></li>
                                            <div id="seeMoreTemplateSmall" style="display: none">


                                    <li><a href="https://jobs.diu.ac" target="_blank">Career</a></li>
                                    <li><a :class="route().current() == 'publications' ? 'toolbar-share-icon-active' : ''"
                                            :href="route('publications')">Publications</a></li>
                                            <li @if(Request::is('journals')) class="toolbar-share-icon-active" @endif><a 
                                                href={{ url('/journals') }}>Journals</a></li>
                                    <li><a :class="route().current() == 'convocation' ? 'toolbar-share-icon-active' : ''"
                                            :href="route('convocation')">Convocation</a></li>
                                    <li><a href="https://students.diu.ac" target="_blank">Students Portal</a></li>
                                    <li><a :class="route().current() == 'certificate-verification' ? 'toolbar-share-icon-active' : ''"
                                            :href="route('certificate-verification')">Certificate Verification</a></li>
                                    </div>
                            </span>

                            <span class="extra-small-device">
                                <div class="">
                                    <ul>
                                        <li><a href="https://iqac.diu.ac" target="_blank">IQAC</a></li>
                                        <li><a href="http://koha.diu.ac.bd" target="_blank">Library</a></li>

                                        <li><a href="javascript:void(0)" id="seeMoreLink">See More...</a></li>
                                        <div id="seeMoreTemplate" style="display: none">
                                            <li><a href="https://international.diu.ac" target="_blank">International</a>
                                            </li>
                                            <li><a href="https://blog.diu.ac" target="_blank">Blog</a></li>
                                            <li><a :class="route().current() == 'club' ? 'toolbar-share-icon-active' : ''"
                                                    :href="route('club')">Club</a></li>
                                            <li><a href="https://jobs.diu.ac" target="_blank">Career</a></li>
                                            <li><a :class="route().current() == 'publications' ? 'toolbar-share-icon-active' : ''"
                                                    :href="route('publications')">Publications</a></li>
                                                    <li @if(Request::is('journals')) class="toolbar-share-icon-active" @endif><a 
                                                        href={{ url('/journals') }}>Journals</a></li>
                                            <li><a :class="route().current() == 'convocation' ? 'toolbar-share-icon-active' : ''"
                                                    :href="route('convocation')">Convocation</a></li>
                                            <li><a href="https://students.diu.ac" target="_blank">Students Portal</a>
                                            </li>
                                            <li><a :class="route().current() == 'certificate-verification' ?
                                                'toolbar-share-icon-active' : ''"
                                                    :href="route('certificate-verification')">Certificate
                                                    Verification</a></li>

                                            <li><a href="javascript:void(0)" id="hideMoreLink">
                                                    <i class="fa fa-close"></i>
                                                </a></li>
                                        </div>
                                    </ul>
                                </div>
                            </span>



                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- Toolbar End -->


@push('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
            $("#seeMoreLink").click(function() {
                $("#seeMoreTemplate").toggle();
            });           

            $("#hideMoreLink").click(function() {
                $("#seeMoreTemplate").toggle();
            });
            $("#seeMoreLinkSmall").click(function() {
                $("#seeMoreTemplateSmall").toggle();
            });           

            $("#hideMoreLinkSmall").click(function() {
                $("#seeMoreTemplateSmall").toggle();
            });

            $("#seeMoreLinkMedium").click(function() {
                $("#seeMoreTemplateMedium").toggle();
            });
            $("#hideMoreLinkMedium").click(function() {
                $("#seeMoreTemplateMedium").toggle();
            });
        });
</script>
@endpush