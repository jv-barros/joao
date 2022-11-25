<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>JP Stats</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      display: flex;
      justify-content: center;
      font-family: Roboto, Arial, sans-serif;
      font-size: 15px;
      }
      form {
      border: 5px solid #f1f1f1;
      }
      input[type=text], input[type=password] {
      width: 100%;
      padding: 16px 8px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      }
      button {
      background-color: #8ebf42;
      color: white;
      padding: 14px 0;
      margin: 10px 0;
      border: none;
      cursor: grabbing;
      width: 100%;
      }
      h1 {
      text-align:center;
      fone-size:18;
      }
      button:hover {
      opacity: 0.8;
      }
      .formcontainer {
      text-align: left;
      margin: 24px 50px 12px;
      }
      .container {
      padding: 16px 0;
      text-align:left;
      }
      span.psw {
      float: right;
      padding-top: 0;
      padding-right: 15px;
      }
      /* Change styles for span on extra small screens */
      @media screen and (max-width: 300px) {
      span.psw {
      display: block;
      float: none;
      }
    </style>
  </head>
  <body>
    <form action="login.php" method="post">
      <h1>Acesse sua conta</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container">
        <label for="uname"><strong>Usuário</strong></label>
        <input type="text" placeholder="Insira seu nome de usuário" name="email" id="email" required>
        <label for="psw"><strong>Senha</strong></label>
        <input type="password" placeholder="Insira sua senha" name="pass" id="pass" required>
        <!-- inserir php de mensagem de alerta para erros -->
      </div>
      <button type="submit">Entrar</button>
      <div class="container" style="background-color: #eee">
        <label style="padding-left: 15px">
        <input type="checkbox"  checked="checked" name="remember"> Lembrar de mim
        </label>
        <span class="psw"><a href="#"> Esqueceu sua senha?</a></span>
      </div>
    </form>
      <footer class="fixed-bottom">
          <section class="footer-copyright border-top pt-3 mt-3 text-center">
              <div class="row">
                  <div class="col-12">
                      <p class="text-muted font-08"> © 2022 JP Stats. </p>
                  </div>
              </div>
          </section>

      </div>
  </footer>    
  </body>
</html>
