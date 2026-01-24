<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Login - TrustVaultGlobal</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

    /* Body and background animation */
    body {
        margin: 0;
        font-family: 'Roboto', sans-serif;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #7a7a7a;
        background-size: 200% 200%;
        animation: gradientBG 10s ease infinite;
    }
    
    @keyframes gradientBG {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    /* Login container animation */
    .login-container {
        width: 450px;
        padding: 40px;
        border-radius: 15px;
        background: #ffffff;
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        opacity: 0;
        transform: translateY(-50px);
        animation: fadeInUp 1s forwards;
    }

    @keyframes fadeInUp {
        to { opacity: 1; transform: translateY(0); }
    }

    .login-container h2 {
        text-align: center;
        color: #601000;
        font-weight: 700;
        margin-bottom: 30px;
        letter-spacing: 1px;
    }

    /* Floating labels effect */
    .form-floating label {
        transition: all 0.3s ease;
        color: #555;
    }

    .form-control:focus + label,
    .form-control:not(:placeholder-shown) + label {
        transform: translateY(-24px);
        font-size: 0.85rem;
        color: #601000;
    }

    .form-control {
        border-radius: 10px;
        padding: 20px 15px 10px 15px;
        border: 1px solid #ccc;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #601000;
        box-shadow: 0 0 8px rgba(46,149,196,0.4);
    }

    /* Button animation */
    .btn-primary {
        background-color: #601000;
        border-color: #601000;
        font-weight: 600;
        transition: all 0.4s ease;
        border-radius: 10px;
    }

    .btn-primary:hover {
        background-color: #601000;
        border-color: #601000;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(46,149,196,0.4);
    }

    /* Error alert style */
    .alert {
        border-radius: 10px;
        font-weight: 500;
    }

    .footer-text {
        text-align: center;
        margin-top: 15px;
        font-size: 0.9rem;
        color: #555;
        opacity: 0.8;
    }
</style>
</head>
<body>

<div class="login-container shadow-sm">
    <img src="./images/Upstream-logo-copy-removebg-preview.png" alt="logo" style="width:100%; height:80px; object-fit: contain;"><br><br>

    <h2>Admin Login</h2><br>
    
    <?php if(isset($error) && $error): ?>
        <div class="alert alert-danger text-center"><?php echo $error; ?></div>
    <?php endif; ?>
    
    <form method="POST" action="proc_admin" >
        <div class="form-floating mb-3">
            <input type="text" name="username" class="form-control" id="username" placeholder="Username" required autofocus>
            <label for="username">Username</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
        <button type="submit" class="btn btn-primary w-100 py-2">Login</button>
    </form>

    <div class="footer-text">© 2026 Upstream</div>
</div>

</body>
</html>
