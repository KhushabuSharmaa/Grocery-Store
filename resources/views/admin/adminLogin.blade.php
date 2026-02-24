<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Animated Login Form</title>

<!-- Stylesheet -->
 <link rel="stylesheet" href="{{asset('backend/assets/assets/css/adminLoginStyle.css')}}">
</head>

<body>



<div class="login-container">
    @if(session('success'))
            <p style="color:green; font-size:20px;">{{ session('success') }}</p>
    @endif

    <h1>Login</h1>

    @if(session('error'))
    <p style="color:green">{{session('error')}}</p>
    @endif
    
   <form action="{{route('adminLogin')}}" method="post">
    @csrf
        <div class="input-group">
            <input type="text" required name="email">
            <label>Email</label>
        </div>

        <div class="input-group">
            <input type="password" required name="password">
            <label>Password</label>
        </div>

        <button class="login-btn">Login</button>
        <div class="extra">
            2026 Admin Login
        </div>
   </form>
</div>


</body>
</html>
