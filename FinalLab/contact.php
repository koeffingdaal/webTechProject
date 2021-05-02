<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

<div class="contact-section">

  <h1>Contact Us</h1>
  <div class="border"></div>
  <form class="contact-form" method="post">
    <input type="text" class="contact-form-text" placeholder="Your name">
    <input type="email" class="contact-form-text" placeholder="Your email">
    <input type="text" class="contact-form-text" placeholder="Your phone">
    <textarea class="contact-form-text" placeholder="Your message"></textarea>
    <input type="submit" class="contact-form-btn" value="Send">
  </form>
</div>

  </body>

  <style>
    body{
        margin: 0;
        padding: 0;
        font-family: "montserrat",sans-serif;
}
.contact-section{
        background-color: #b2beb5
        background-size: cover;
        padding: 40px 0;
}
.contact-section h1{
        text-align: center;
        color: #ddd;
}
.border{
        width: 100px;
        height: 10px;
        background: #34495e;
        margin: 30px auto;
}

.contact-form{
        max-width: 600px;
        margin: auto;
        padding: 0 10px;
        overflow: hidden;
}

.contact-form-text{
        display: block;
        width: 100%;
        box-sizing: border-box;
        margin: 16px 0;
        border: 0;
        background: #111;
        padding: 20px 40px;
        outline: none;
        color: #ddd;
        transition: 0.5s;
}
.contact-form-text:focus{
        box-shadow: 0 0 10px 4px #34495e;
}
textarea.contact-form-text{
        resize: none;
        height: 120px;
}
.contact-form-btn{
        float: right;
        border: 0;
        background: #34495e;
        color: #fff;
        padding: 12px 50px;
        border-radius: 20px;
        cursor: pointer;
        transition: 0.5s;
}
.contact-form-btn:hover{
      background: #2980b9;
}
  </style>
</html>