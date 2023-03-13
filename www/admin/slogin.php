<!DOCTYPE html>
<html>
  <head>
  <meta charset = "utf-8">
        <!-- common.css -->
        <link rel="stylesheet" href="./css/common.css" type="text/css">
      <!-- base.css -->
      <link rel="stylesheet" href="./css/base.css" type="text/css">
      <!-- reset.css -->
      <link rel="stylesheet" href="./css/reset.css" type="text/css">
      <!-- bootstrap css -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    
    <main class="position-relative">
    <!-- login.css -->
    <link rel="stylesheet" href="./css/login.css" type="text/css">
      <section id="log_s" class="position-absolute top-50 start-50 translate-middle">
        <article class="mx-auto">

          <h2>로그인</h2>
          <form action="slogin_action.php" method="post">
            <fieldset>
              <legend>로그인</legend>
              <input name="id" type="text" placeholder="아이디">
              <input name="pw" type="password" placeholder="비밀번호">
              <div>
              <label for="log_still">로그인 유지</label>
              <input type="checkbox" id="log_still" name="log_still">
              <label for="log_still"></label>
              </div>
              <input type="submit" value="로그인">
          </fieldset>
          </form>
        </article>
      </section>
    
  </main>








</html>