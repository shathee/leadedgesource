<body data-spy="scroll" data-target=".menuzord" data-offset="60">
<main>

    <div id="menuzord" class="menuzord clearfix navigationbar-animation">

        <a href="index.php" class="menuzord-brand">
            <h4 id="logo-image1" class="default-logo">LES</h4>
            <h4 id="logo-image2" class="dark-logo">LES</h4>
        </a>
        <ul class="menuzord-menu menuzord-right">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('about') }}">About</a></li>
            <li><a href="{{ url('services') }}">What We Do</a></li>
            <li><a href="{{ url('whycu') }}">Why Choose Us</a></li>
            <li><a href="{{ url('portfolio') }}">Product Portfolio</a></li>
            <li><a href="{{ url('contact') }}">contact</a></li>
        </ul>
    </div>