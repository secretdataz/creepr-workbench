<form method="POST" action="{{ URL::to('/user/forgot') }}" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">

    <div class="form-group">
        <label for="email"></label>
        <input class="form-control input-lg" placeholder="E-Mail Address" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
    </div>

    <input class="btn btn-info btn-lg btn-block" type="submit" value="{{{ Lang::get('confide::confide.forgot.submit') }}}">

    @if (Session::get('error'))
        <div class="alert alert-error alert-danger">{{{ Session::get('error') }}}</div>
    @endif

    @if (Session::get('notice'))
        <div class="alert">{{{ Session::get('notice') }}}</div>
    @endif
</form>
