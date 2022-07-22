<?= include_once "head.php"?>

<body>
    <h1>로그인</h1>
    <a href="join.php">회원가입</a>
    <form action="login_proc.php" method="post">
        <div><input type="text" name="uid" placeholder="아이디"></div>
        <div><input type="password" name="upw" placeholder="비밀번호"></div>
        <div><input type="submit" value="로그인"></div>
    </form>
    <!--인풋타입에 각 부여한 name은 데이타베이스에 있는 각 컬럼명과 동일해야한다.-->
</body>
</html>