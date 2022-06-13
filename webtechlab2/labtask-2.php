<form action="webtlabtask2.php" method="get">
Username:<input type="text" id="uname" name="uname"><br><BR>
Password:<input type="text" id="pass" name="pass"><br><br>
Gender: <input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female"> Female
<input type="radio" name="gender" value="Others"> Others <br><br>
Skills:<input type="checkbox" name ="skills[]" value="c">C
<input type="checkbox" name="skills[]" value="c++"> C++
<input type="checkbox" name="skills[]" value="c#">"c#" <br><br>
Department:<select name="dept">
<option value="cse">CSE</option>
<option value="eee">EEE</option>
<option value="bba">BBA</option>
</SELECT> <br><br>
Address: <textarea rowspan="3" colspan="50" name="adress"></textarea>
<br><br><br>
<input type="submit" name="btnClick" value="Click">
</form>