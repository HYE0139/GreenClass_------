<?php include_once "head.php"?>

<body>
    <div>프로필 이미지 디스플레이</div>
    <a href="list.php">list</a>
    <form action="profile_proc.php" method="post" enctype="multipart/form-data">
        <div><label>이미지 : <input type="file" name="img" accept="image/*"></label></div>
        <div><input type="submit" value="이미지 업로드"></div>
    </form> 
</body>
</html>