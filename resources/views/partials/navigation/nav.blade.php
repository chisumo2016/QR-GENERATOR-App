
<header>
    <div class="navbar" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" onclick="In_headerFunction()">
                    <i class="zmdi zmdi-menu"></i>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ url('content/auto_site_logo.jpg') }}"  alt="Infinity - Premium URL Shortener Theme">
                    <span style="margin-top: -30px;">QR- Generator</span>

                </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ route('home') }}" >Home</a></li>
                    <li><a href="Contact Us">Why Choose Us? </a></li>
                    <li><a href="{{ route('contact') }}">Contact </a></li>
                    <li><a href="Contact Us">QR Decoder </a></li>
                    <li><a href="{{ route('login') }}">Login </a></li>
                </ul>
            </div>		</div>
    </div>
</header>