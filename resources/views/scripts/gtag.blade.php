@if(config('microsoft-clarity.gtag_tracking_id'))
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7B8FQGH9R1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{config('microsoft-clarity.gtag_tracking_id')}}');
    </script>
@endif
