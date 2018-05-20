<article class="col-1">
    <div class="indent-left">
        <h3>Contact Form</h3>
        <div class="p3">
            <form id="contact-form" method="POST" action="/login"">
                <fieldset>
                    @csrf
                    <label><span class="text-form">Login</span><input type="text" name="login" value="{{$login or ''}}"></label>
                    <label><span class="text-form">Password</span><input type="password" name="password" value="{{$password or ''}}"></label
                            <div class="clear"></div>
                    <span class="text-form">{{ $errorMessage or '' }}</span>
                            <div class="buttons">
                                <a class="button-2" href="#" onClick="document.getElementById('contact-form').submit()">Go</a>
                            </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</article>


