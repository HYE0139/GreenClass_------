<?php include_once "head.php"?>

<body>
  <div class="container">
  <?php include_once "header.php";?>
    <h1>글쓰기</h1>
    <form action="write_proc.php" method="post" class="form">
      <div id="tt"><input class="form-control w-100" type="text" name="title" placeholder="제목"></div>
      <div id="ct"><textarea class="form-control w-100" name="ctnt" placeholder="내용"></textarea></div>
      <div class="d-flex justify-content-center">
        <input type="submit" value="글등록" class="btn btn-outline-dark mx-2" >
        <input type="reset" value="초기화" class="btn btn-outline-dark mx-2" >
      </div>
    </form>
  </div>
  <?php include_once "footer.php" ?>
</body>
</html>