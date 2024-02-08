<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');

:root{
    --primary-color: #F8F7FC;
    --secondary-color: #231E1E;
    --accent-color: #FC8C1B;
}

*{
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif ;
    box-sizing: border-box;
}

body{
    position: relative;
    display: flex;
    justify-content: center;    
    height: 100vh;
    background: var(--primary-color);
}
.registration-container{
    background: #FFFFFF;
    margin: auto;
    padding: 15px 25px;
    width: 640px;
    border-radius: 12px;
    box-shadow: 10px 14px 90px #f5ac6252;
}
.registration-container .registration-header{
    padding: 10px;
}
.registration-header h2{
    font-size: 20px;
    font-weight: 800;
}
.registration-header .divider{
    display: block;
    width: 15%;
    height: 5px;
    background: var(--accent-color);
    margin-top: 4px;
}
.registration-body .registration-box{
    position: relative;
    flex-direction: row;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    padding: 10px 0px;

}
.registration-box .input-box{
    position: relative;
    width: 50%;
    justify-content: space-around;
    padding: 05px 10px;
    display: block;
}
.registration-box .input-box label{
    font-size: 14px;
    color: var(--secondary-color);
}
.registration-box .input-field{
    width: 100%;
    height: 36px;
    border-radius: 4px;
    border: 1px solid #1b1b1b46;
    padding-left: 8px;
    display: block;
}
.registration-box .input-field:focus{
    border-radius: 4px;
    outline: none;
    border: solid var(--accent-color) ;
    border-width:1px 1px 3px 1px;
    padding-left: 8px;
    height: 48px;
    padding-top: 8px;
}
.registration-box  .input-box:focus-within label {
    font-size: 10px;
    display: inline-block;
    content: '';
    position: absolute;
    padding: 4px 10px;
    margin-bottom: 8px;
    
}
.registration-box  .input-box:focus-within {
    padding: 16px 10px;
    margin-bottom: -10px;
}
.registration-box  .input-box:focus-within .input-field::placeholder{
 visibility: hidden;
}

.registration-body .btn-register{
    border: 0;
    background: var(--accent-color);
    color: var(--primary-color);
    font-weight: 700;
    font-size: 16px;
    padding: 10px 25px;
    border-radius: 4px;
    box-shadow: 0px 4px 12px #f5ac6280;
    margin: 0px 10px;
    cursor: pointer;
}
.registration-body .btn-register:hover{
    background: var(--secondary-color);
    box-shadow: 0px 4px 12px #231E1E90;;
}

.registration-container .registration-footer{
    text-align: center;
    padding: 20px;
    position: relative;
}
.registration-footer h3{
    font-size: 16px;
    font-weight: 500;
    color: var(--secondary-color);
}
.registration-footer a{
    color: var(--accent-color);
    text-decoration: none;
    font-weight: 700;
}

.registration-footer a:hover{
    border-bottom: 2px solid #FC8C1B;
}

/** Mobile Device **/
@media  screen and (max-width:480px) {
    .registration-container{
        display: block;
        padding: 10px;
        border-radius: 12px;
        box-shadow: 10px 14px 90px #f5ac6252;
        max-width: 400px;
    }
    .registration-container .registration-header{
        padding: 10px 0px;
    }
    .registration-body .registration-box{
        display: block;
    }
    .registration-box .input-box{
        width: 100%;
        justify-content: space-around;
        padding: 05px 0px;
        display: block;
    }
    .registration-box .input-box:focus-within{
        padding: 12px 0px;
        display: block;
    }
    .registration-body .btn-register{
        width: 100%;
        margin: auto;
    }
}

    </style>
    <!-- <link rel="stylesheet" href="registration.css"> -->
</head>
<body>
    <form action="regiprocess.php" method="post">
      <div class="registration-container">
        <div class="registration-header">
            <h2>Registration</h2>
            <span class="divider"></span>
        </div>
        <div class="registration-body">
            <form>
                <div class="registration-box">
                    <div class="input-box">
                        <label>First Name</label>
                        <input type="text" name="name" placeholder="Enter Your First Name" class="input-field">
                    </div>
                    <div class="input-box">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Enter Your Last Name" class="input-field">
                    </div>
                    <div class="input-box">
                        <label>Contact Number</label>
                        <input type="tel" name="mobile" placeholder="Enter Your Contact Number" class="input-field">
                    </div>
                    <div class="input-box">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Enter Your Email" class="input-field">
                    </div>
                    <div class="input-box">
                        <label>Username</label>
                        <input type="text" name="username" placeholder="Enter Username" class="input-field">
                    </div>
                    <div class="input-box">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter Password" class="input-field">
                    </div>
                </div>
                <button class="btn-register" name="register">Register Now</button>
            </form>
        </div>
        <div class="registration-footer">
            <h3>Already have an account? <a href="login.php"> Login</a></h3>
        </div>
      </div>
    </form>
</body>
</html>