<?php
  include_once "db/db_board.php";

  $i_board = $_GET["i_board"];

  $param = [
    "i_board" => $i_board
  ];
  $item = sel_board($param);

  include_once "head.php";
?>

<body> 
  <div class="container">
    <?php include_once "header.php";?>
    
    <h1>수정하기</h1>
    <form action="mod_proc.php" method="post" class="form">
      <input type ="hidden" name="i_board" value="<?=$i_board?>" readonly>
      <div id="tt"><input class="form-control w-100" type="text" name="title" placeholder="제목" value="<?=$item["title"]?>"></div>
      <div id="ct"><textarea class="form-control w-100" name="ctnt" placeholder="내용"><?=$item["ctnt"]?></textarea></div>
      <div class="d-flex justify-content-center" >
        <input type="submit" value="수정완료" class="btn btn-outline-dark mx-2">
        <input type="reset" value="초기화" class="btn btn-outline-dark mx-2 ">
      </div>
    </form>
  </div>
  <?php include_once "footer.php" ?>

</body>
</html>