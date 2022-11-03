<footer>
    <div class="top-footer">
        <div class="lists-container">
            @include('partials._list-component')
            @include('partials._list-component')
            @include('partials._list-component')
            @include('partials._list-component')

        </div>
        <img src="{{asset('/images/dc-logo-bg.png')}}" alt="dc footer logo">

    </div>


    <div class="bottom-footer">
        <button>SIGN UP NOW!</button>
        <div>
            <h3>FOLLOW US</h3>
            <img src="{{asset('images/footer-facebook.png')}}" alt="">
            <img src="{{asset('images/footer-periscope.png')}}" alt="">
            <img src="{{asset('images/footer-pinterest.png')}}" alt="">
            <img src="{{asset('images/footer-twitter.png')}}" alt="">
            <img src="{{asset('images/footer-youtube.png')}}" alt="">
        </div>
    </div>
</footer>