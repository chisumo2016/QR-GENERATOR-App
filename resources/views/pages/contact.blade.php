@extends('layout.master')

@section('main-content')

<section class="under-head-cont">
        <div class="container">
            <div class="centered form" style="max-width: 600px;">
                <form role="form" class="live_form" method="post" action="http://www.bigto.in/contact" style="width: 600px;">
                    <h3>Contact us</h3>
                    <p>If you have any questions, feel free to contact us on this page.</p>
                    <hr>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="">
                        <i class="zmdi zmdi-face"></i>
                    </div>
                    <div class="form-group">
                        <label>Email (Required)</label>
                        <input type="email" class="form-control" name="email" value="" required>
                        <i class="zmdi zmdi-email"></i>
                    </div>
                    <div class="form-group">
                        <label>Message (Required)</label>
                        <textarea name="message" class="form-control" rows="10" required></textarea>
                    </div>
                    <div id="captcha" class="display">

                    </div>
                    <input type='hidden' name='token' value='5bb6a50b60449b6699a5a8006ece28a81c1cb644' />        <button type="submit" class="mdbtn btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </section>
@endsection