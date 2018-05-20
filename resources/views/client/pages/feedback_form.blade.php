<article class="col-1">
    <div class="indent-left">
        <h3>Contact Form</h3>
        <div class="bg">
            <div class="padding">
                Здесь вы можете задать свои вопросы!
            </div>
        </div>
        <div class="p3">
            <form id="contact-form" method="POST" action="/feedback"">
            <fieldset>
                @csrf
                <label><span class="text-form">Name</span><input type="text" name="name" value=" "></label>
                <label><span class="text-form">E-mail</span><input type="text" name="e-mail" value=""></label>
                    <div class="wrapper">
                        <div class="text-form">Message:</div>
                        <div class="extra-wrap">
                            <textarea></textarea>
                            <div class="clear"></div>
                            <div class="buttons">
                                <a class="button-2" href="#" onClick="document.getElementById('contact-form').reset()">Clear</a>
                                <a class="button-2" href="#" onClick="document.getElementById('contact-form').submit()">Send</a>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</article>