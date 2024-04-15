<?php
if(isset($_GET['month']) ){
	$month=$_GET['month'];

	// 如果有拿到月份變數, 則就顯示變數的那個月;
}else{
	$month=date('m');}

switch ($month) {
    case "01":
        $Bg = "bg1.gif";
        break;
    case "02":
        $Bg = "bg2.gif";
        break;
    case "03":
        $Bg = "bg3.gif";
        break;
    case "04":
        $Bg = "bg4.gif";
        break;
    case "05":
        $Bg = "bg5.gif";
        break;
    case "06":
        $Bg = "bg6.gif";
        break;
    case "07":
        $Bg = "bg7-3.jpg";
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="#">
  <title>萬年曆作業</title>
  <style>
   /*請在這裹撰寫你的CSS*/ 
   * {
		/* font-family: 'Fredericka the Great', cursive; */
	}
    body{
		font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        /* background-image: url(./img/<?php echo $Bg; ?>); */
		/* background-repeat: no-repeat; */
		/* background-size: cover; */
        display: flex;
		justify-content: center;
		align-items: center;
		text-align: center;

    }
	.container{
		background-image: url(./img/<?php echo $Bg; ?>);
		background-repeat: no-repeat;
		background-size: cover;
		display: flex;
		flex-direction: column;
		flex-wrap: wrap;
		width: 80%;
		height: 100vh;
		background-color: lightgray;
		/* margin-top: 50px; */
		padding-top: 40px;

	}
	.main{
		display: flex;
		justify-content: space-around;
		align-items: center;

	}
	.title{
		text-align: center;
	}
	.title>p{
		font-size: 42px;
		font-weight: 700;
		color: white;
		text-shadow: black 0 0 0.1em, black 0 0 0.1em, black 0 0 0.1em, black 0 0 0.1em;
	}
	.main-table{
		width: 75%;
		/* background-color: yellow; */
	}

	table,tr,th,td{
		/* border: 1px solid #999; */
		border-radius: 10px;
		border-collapse: collapse;
		/* width: 100%; */
		
	}
	table{
		height: 70vh;
		display: block;
		margin: auto;
		background-color: rgba(255,255,255,0.45);

	}
	tr, th, td{
		/* width: 15%; */
		/* border: 1px solid #999; */
		text-align: right;
		padding: 5px 10px;
	}
	tr{
		height: 10vh;
	}
	th{
		/* color: blue; */
		font-size: 36px;
		text-align: center;
		width: 200px;
	}
	td{
		/* color:blue; */
		font-size: 32px;
		text-align: center;

	}

	h3{
		text-align: center;
	}
    .today{
        background-color: yellow;
        font-weight: bold;
    }



    
  </style>
</head>
<body>
<!-- <h1>萬年曆</h1>   -->
<div class="pic-left">
	pic-left
</div>
<div class="container">

<?php
/*請在這裹撰寫你的萬年曆程式碼*/

if(isset($_GET['month']) && isset($_GET['year'])){
	$month=$_GET['month'];
	$year=$_GET['year'];
	// 如果有那拿到月份變數, 則就顯示變數的那個月;
}else{
	$month=date('m');
	$year=date('Y');
	// 如果沒拿到變數, 則顯示當前月;
}
// 雖然這邊寫法一樣僅變數不同, 也不需合併簡寫 還是獨立分開寫 因為大致上點選月曆時不會同時看上個月, 下個月
// 透過網頁傳值,可以讓程式自己去跑月份出來

// 原程式碼 暫時註解
	// echo"<div class='title'>";
	// echo"title";
	// echo "<h3 style='text-align:center'>";
	// echo date(" {$year} / {$month} ");
	// echo "</h3>";
	// echo "</div>";

// 測試chatgpt 提供可補零月份程式
	echo"<div class='title'>";
	// echo"title";
	echo "<p style='text-align:center'>";
	echo date(" Y / m",strtotime("{$year}-{$month}"));
	echo "</p>";
	echo "</div>";



$thisFirstday = date("{$year}-{$month}-1");
// 
$thisFirstDate = date('w', strtotime($thisFirstday));
// 
$thisMonthDays = date("t");
// 
$thisLastDay = date("{$year}-{$month}-$thisMonthDays");
// 
$weeks = ceil(($thisMonthDays + $thisFirstDate) / 7);
// 
$firstCell = date("Y-m-d", strtotime("-$thisFirstDate days", strtotime($thisFirstday)));
?>
	<!-- < ? = 等於 < ? php echo的縮寫 加入$next; 然後在正常結尾 ? > -->
	<!-- 因在html下 要把變數嵌在裡面使用這樣寫法 適合只echo一個變數時寫法 -->
<!-- <div style='width:317px;display:flex;margin:auto;justify-content:space-between'> -->
<?php
$nextYear=$year;
$prevYear=$year;
// 因變數$nextYear & $prevYear在先前未被使用過 如果未先宣告變數 在下面判斷是無法使用 需要在程式開始前先宣告
if(($month+1)>12){
	$next=1;
	$nextYear=$year+1;
}else{
	$next=$month+1;
	$nextYear=$year;
}

if(($month-1)<1){
	$prev=12;
	$prevYear=$year-1;
}else{
	$prev=$month-1;
}
?>
	<div class="main">
		<div class="prev-button">
			prev-button
			<a href="?year=<?=$prevYear;?>&month=<?=$prev;?>">上一個月</a>
			<a href="?year=<?=date('Y');?>&month=<?=date('m');?>">當月</a>

		</div>

<!-- </div> -->
		<div class="main-table">
			<table>
				<tr>
					<th>sun</th>
					<th>mon</th>
					<th>tue</th>
					<th>wed</th>
					<th>thu</th>
					<th>fri</th>
					<th>sat</th>
				</tr>
				<?php
$weeks = 6;  // 设置显示的周数
$firstCell = date('Y-m-01');  // 获取当前月份的第一天
$thisFirstday = $firstCell;  // 保存本月的第一天

echo "<table>";
for ($i = 0; $i < $weeks; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 7; $j++) {
        $addDays = 7 * $i + $j;
        $thisCellDate = strtotime("+$addDays days", strtotime($firstCell));
        
        if (date("Y-m-d", $thisCellDate) == date("Y-m-d")) {
            echo "<td class='today'>";
        }
        elseif (date("m-d", $thisCellDate) == "10-31") {
            echo "<td><p class='holiday'><br>瑪麗亞凱莉<br>預備備</p>";
        }
        elseif (date("Y-m-d", $thisCellDate) == date("Y-12-25")) {
            echo "<td><p class='holiday'><br>瑪麗亞凱莉<br>受難日</p>";
        }
        elseif (date('w', $thisCellDate) == 0 || date('w', $thisCellDate) == 6) {
            echo "<td style='color: lightcoral'>";
        } else {
            echo "<td>";
        }

        if (date("m", $thisCellDate) == date("m", strtotime($thisFirstday))) {
            echo date("j", $thisCellDate);
        }
        
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

			</div>
			<div class="next-button">
				next-button
				<a href="?year=<?=$nextYear;?>&month=<?=$next;?>">下一個月</a>
			</div>
		</div>
</div>
<div class="pic-right">
	pic-right
</div>
  
</body>
</html>