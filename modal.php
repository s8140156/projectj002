<h3>新增行事曆</h3>
<hr>
<form action="./api/add.php" method="post">
    <div style="display:flex;flex-wrap:wrap;margin:auto;margin-top:10px;text-align:center">
        <div>日期:</div>
        <div><input type="date" name="date" id=""></div>
        <div>標題:</div>
        <div><input type="text" name="title" id=""></div>
        <div>活動事項:</div>
        <div><textarea name="texxt" id="" cols="30" rows="10"></textarea></div>
    </div>
    <div>
		<input type="submit" value="新增">
		<input type="reset" value="重置">
	</div>
</form>

