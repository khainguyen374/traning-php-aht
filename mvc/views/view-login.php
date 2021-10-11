
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<div class="from-login">
    <h2>Login Form</h2>
    <form name="login" action="" method="post" action="">
        <div class="control-from">
            <label for="">Email:</label><br/>
            <input type="text" name="email" value="" id="email">
        </div>
        <div class="control-from">
            <label for="">Password:</label><br/>
            <input type="password" name="password" value="" id="password">
        </div>
        <div class="btn-submit">
            <input type="submit" value="Login" name="submit" id="submit">
        </div>
    </form>
    <a href="http://localhost:8080/php-mvc/logout">logout</a>
</div>
<style>
    .from-login {
        width: fit-content;
        margin: 0 auto;
        border:1px solid #b2aeae;
        box-shadow: 0px 0px 1px 1px #b2aeae;
        padding:20px;
        transform: translateY(50%);
    }
    h2 {
        text-align:center;
    }
    .control-from{
        margin-bottom:10px;
    }
    .btn-submit {
        text-align:center;
    }
    .btn-submit input {
        padding: 4px 16px;
        border: 1px solid #646464;
        font-weight: bold;
    }
    .btn-submit input:hover {
        cursor: pointer;
        background: cadetblue;
        border: 1px solid #646464;
    }
</style>