<?= include_once "head.php"?>

<body>
  <h1>회원가입</h1>
  <a href = "login.php">로그인</a>
  <form action="join_proc.php" method="post">
    <div><input type="text" name="uid" placeholder="아이디"></div>
    <div><input type="password" name="upw" placeholder="비밀번호"></div>
    <div><input type="password" name="confirm_upw" placeholder="비밀번호 확인"></div>
    <div><input type="text" name="nm" palceholder="이름"></div>
    <div>성별 : <label>여자<input type="radio" name="gender" value="0" checked></label>
               <label>남자<input type="radio" name="gender" value="1" checked></label>
  </div>
  <!-- db_user > ins_user에 보낼 데이터 입력 파일-->
  <div>
    <input type="submit" value="회원가입">
    <input type="submit" value="초기화">
  </div>
  </form>
</body>
</html>