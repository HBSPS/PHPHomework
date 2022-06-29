<!DOCTYPE html>
<html lang="en">
<head>
    <title>Content</title>
</head>
<script>
  function deldata() {
    location.href='./delete.php?idx=<? 
        $idx = $_GET['idx'];
        echo $idx ?>';
  }
</script>
<body>
    <h1 align=center>상세보기</h1>
    <br><br><br>
    <table border="1" align=center cellspacing="0" cellpadding="5">
        <th bgcolor="#cccccc">이름(한국어)</th>
        <th bgcolor="#cccccc">이름(영문)</th>
        <th bgcolor="#cccccc">생년월일</th>
        <th bgcolor="#cccccc">이메일</th>
        <th bgcolor="#cccccc">전화번호</th>
        <th bgcolor="#cccccc">주소</th>
        <th bgcolor="#cccccc">과목구분</th>
        <th bgcolor="#cccccc">수강과목</th>
        <th bgcolor="#cccccc">수강과목 설명</th>
        
        <?php
        include './dbconnect.php';

        $idx = $_GET['idx'];
        $query = "SELECT * FROM info WHERE idx = '$idx'";
        
        $result = mysqli_query($connect, $query);
        
        while($row = mysqli_fetch_array($result)) {
            echo "
            <tr>
            <td>$row[kor_name]</td>
            <td>$row[eng_name]</td>
            <td>$row[birth]</td>
            <td>$row[email]</td>
            <td>$row[phone]</td>
            <td>$row[address]</td>
            <td>$row[lecture_type]</td>
            <td>$row[lecture]</td>
            <td>$row[lecture_info]</td>
            </tr>
            ";
        }
        ?>
    </table>
        <br><br><br><br>
    <?
        include './dbconnect.php';
        
        $idx = $_GET['idx'];
        $query = "SELECT * FROM info WHERE idx = '$idx'";

        $result = mysqli_query($connect, $query);
        $row = mysqli_fetch_array($result);
    ?>

    <h1 align="center">수정하기</h1>
    <form action="update.php?idx=<? echo $idx; ?>" id="form" method="POST" align=center>
        이름(한글): <input type="text" maxlength="10" name="kor_name" required  placeholder="이름(한글)"  value="<? echo $row['kor_name']; ?>">
        <br>
        이름(영문): <input type="text" maxlength="50" name="eng_name" required placeholder="이름(영문)" value="<? echo $row['eng_name']; ?>">
        <br>
        생년월일: <input type="date" name="birth" placeholder="생년월일" required value="<? echo $row['birth']; ?>">
        <br>
        이메일: <input type="email" name="email" placeholder="Email" required value="<? echo $row['email']; ?>">
        <br>
        전화번호: <input type="tel" name="phone" placeholder="전화번호" required value="<? echo $row['phone']; ?>">
        <br>
        주소: <input type="text" name="address" placeholder="주소" required value="<? echo $row['address']; ?>">
        <br>
        <br>
        <br>
        과목 구분: <input type="radio" name="lecture_type" value="전공필수" checked id="1"><label for="1">전공필수</label> &nbsp;<input type="radio" name="lecture_type" value="전공" id="2"><label for="2">전공</label>&nbsp;<input type="radio" name="lecture_type" value="교양" id="3"><label for="3">교양</label>&nbsp;<input type="radio" name="lecture_type" value="전공기초" id="4"><label for="4">전공기초</label>
        <br><br>
        <label for="lecture">수강 과목 :</label>
        <br>
        <input type="text" name="lecture" style="width:200px;" required id="lecture" value="<? echo $row['lecture']; ?>">
        <br>
        <label for="lecture_info">수강 과목 설명 :</label>
        <br>
        <textarea style="width:200px; height:100px;" name="lecture_info" required maxlegnth="200" id="lecture_info"><? echo $row['lecture_info']; ?></textarea>
        <br><br><br><br><br>
        로봇이 아닙니다.<input type="checkbox" name="check" required>
        <br><br><br>
        
        <input type="button" value="삭제" onClick="deldata();">
        <input type="submit" value="수정">
    </form>
</body>
</html>
