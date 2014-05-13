
<form action="">
    username:<input type="text" name="username">
    password:<input type="text" name="password">
    captcha: <input type="text" name="captcha">
    <img src="{{ Captcha::img() }}" alt="">
</form>