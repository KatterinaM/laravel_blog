<article class="col-1">
    <div class="indent-left">
        <h3>Contact Form</h3>
        <div class="p3">
            <form id="contact-form" method="POST" action="/checkIn"">
                <fieldset>
                    @csrf
                    <label><span class="text-form">Name</span><input type="text" name="name" value="{{$name or ''}}"></label>
                    <label><span class="text-form">SurName</span><input type="text" name="surname" value="{{$surname or ''}}"></label>
                    <label><span class="text-form">Nickname</span><input type="text" name="nickname" value="{{$nickname or ''}}"></label>
                    <label><span class="text-form">Login</span><input type="text" name="login" value=""></label>
                    <label><span class="text-form">Password</span><input type="password" name="password" value=""></label>
                    <label><span class="text-form">Repeat Password</span><input type="password" name="password" value=""></label>
                    <div class="wrapper">
                        <div class="text-form">About me:</div>
                        <div class="extra-wrap">
                            <textarea></textarea>
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


