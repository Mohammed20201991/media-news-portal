<div class="social-links">

@if(setting('site.email'))
<a href="mailto:{{ setting('site.email') }}"
   title="Email Us">
    <i class="bi bi-envelope-fill"></i>
</a>
@endif

@if(setting('site.facebook'))
<a href="{{ setting('site.facebook') }}" target="_blank">
    <i class="bi bi-facebook"></i>
</a>
@endif

@if(setting('site.twitter'))
<a href="{{ setting('site.twitter') }}" target="_blank">
    <i class="bi bi-twitter-x"></i>
</a>
@endif

@if(setting('site.linkedin'))
<a href="{{ setting('site.linkedin') }}" target="_blank">
    <i class="bi bi-linkedin"></i>
</a>
@endif

@if(setting('site.github'))
<a href="{{ setting('site.github') }}" target="_blank">
    <i class="bi bi-github"></i>
</a>
@endif

@if(setting('site.youtube'))
<a href="{{ setting('site.youtube') }}" target="_blank">
    <i class="bi bi-youtube"></i>
</a>
@endif

@if(setting('site.instagram'))
<a href="{{ setting('site.instagram') }}" target="_blank">
    <i class="bi bi-instagram"></i>
</a>
@endif


@if(setting('site.telegram'))
<a href="{{ setting('site.telegram') }}" target="_blank">
    <i class="bi bi-telegram"></i>
</a>
@endif

@if(setting('site.whatsapp'))
<a href="{{ setting('site.whatsapp') }}" target="_blank">
    <i class="bi bi-whatsapp"></i>
</a>
@endif

@if(setting('site.tiktok'))
<a href="{{ setting('site.tiktok') }}" target="_blank">
    <i class="bi bi-tiktok"></i>
</a>
@endif

</div>