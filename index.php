<?php
if(isset($_GET['month']) ){
	$month=$_GET['month'];

	// 如果有拿到月份變數, 則就顯示變數的那個月;
}else{
	$month=date('m');}

// $bg="bg{$month}.png";

// $array2=['#267790','#0000000','#111111','#111111','#111111','#111111','#111111','#111111','#111111','#111111','#111111','#111111'];
// $int = intval($month)-1;
// 這裡是在取陣列的索引值 因為month個數-1 索引從0開始
// $bgc=$array2[$int];
// 所以我的背景顏色從陣列取索引出來


switch ($month) {
    case "01":
        $Bg = "bg1-1.png";
		$bgc="#267790";
        break;
    case "02":
        $Bg = "bg2-1.png";
		$bgc="#d7cdc4";
        break;
    case "03":
        $Bg = "bg3-1.png";
		$bgc="#c0acb8";
        break;
    case "04":
        $Bg = "bg4-1.png";
		$bgc= "#ffb0a7";
        break;
    case "05":
        $Bg = "bg5-1.png";
		$bgc="f5f6f0";
        break;
    case "06":
        $Bg = "bg6-1.png";
		$bgc= "#ffbfc4";
        break;
    case "07":
        $Bg = "bg7-1.png";
		$bgc="#e7e0a1";
        break;
	case "08":
		$Bg = "bg8-1.png";
		$bgc="#faf0ee";
		break;
	case "09":
		$Bg = "bg9-1.png";
		$bgc="#cb8e62";
		break;
	case "10":
		$Bg = "bg10-1.png";
		$bgc="#cad3e2";
		break;
	case "11":
		$Bg = "bg11-1.png";
		$bgc="#edc882";
		break;
	case "12":
		$Bg = "bg12-1.png";
		$bgc="#cdd5be";
		break;
}
//判斷網址如果do有傳值 則畫面顯示do值
// if(isset($_GET['do'])){
//     $do=$_GET['do'];
//     echo "<script>alert('$do')</script>";
// }
// ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#">
    <title>萬年曆作業</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="./js/jquery-1.9.1.min.js"></script>
	<script src="./js/js.js"></script>
    <style>
    /*請在這裹撰寫你的CSS*/
    * {
        /* font-family: 'Fredericka the Great', cursive; */
    }

    body {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        /* background-image: url(../img/<?php echo $Bg; ?>); */
        /* background-repeat: no-repeat; */
        /* background-size: cover; */
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        background-color: <?php echo $bgc;
        ?>;

    }

    .container {
        background-image: url(./calendar/img/<?php echo $Bg; ?>);
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        flex-direction: column;
        align-items: center;
        flex-wrap: wrap;
        width: 90%;
        height: 100vh;
        background-color: lightgray;
        /* margin-top: 50px; */
        padding-top: 40px;

    }

    .main {
        display: flex;
        justify-content: space-around;
        align-items: center;

    }

    .title {
        text-align: center;
        /* padding-bottom: 20px; */
    }

    .title>p {
        font-size: 42px;
        font-weight: 700;
        color: white;
        text-shadow: black 0 0 0.1em, black 0 0 0.1em, black 0 0 0.1em, black 0 0 0.1em;
    }

    .main-table {
        width: 75%;
        /* background-color: yellow; */
    }

    table,
    tr,
    th,
    td {
        /* border: 1px solid #999; */
        border-radius: 10px;
        border-collapse: collapse;
        /* width: 100%; */

    }

    table {
        height: 70vh;
        display: block;
        margin: auto;
        background-color: rgba(255, 255, 255, 0.65);

    }

    tr,
    th,
    td {
        /* width: 15%; */
        /* border: 1px solid #999; */
        text-align: right;
        padding: 5px 10px;
        /* vertical-align:top; */
    }

    tr {
        height: 10vh;
    }

    th {
        color: rgb(0, 0, 0, 0.6);
        font-size: 32px;
        text-align: center;
        width: 200px;
    }

    td {
        /* color:blue; */
        font-size: 30px;
        text-align: center;
        position: relative;

    }

    h3 {
        text-align: center;
    }

    .pic-right {
        width: 20%;
        /* border: 1px solid black; */
        position: relative;
        /* bottom: 300px; */

    }

    .flower-block1 {
        position: absolute;
        right: 50px;
        bottom: 85px;
        animation: ani1 5s infinite;
		animation-timing-function: linear;
    }

    .flower-block2 {
        position: absolute;
        right: -60px;
        bottom: -20px;
        animation: ani3 5s infinite;
		animation-timing-function: linear;
    }

    .flower-block1>img {
        width: 300px;
        height: 30vh;
    }

    .flower-block2>img {
        width: 300px;
        height: 30vh;
    }

    @keyframes ani1 {
        0% {

            transform: scale(1);
        }

        30% {
            transform: scale(0.5);
        }

        50% {

            transform: scale(0.1);
        }

        70% {
            transform: scale(0.5);
        }

        100% {

            transform: scale(1);
        }
    }

    @keyframes ani3 {
        0% {

            transform: scale(0.1);
        }

        30% {
            transform: scale(0.5);
        }

        50% {

            transform: scale(1);
        }

        70% {
            transform: scale(0.5);
        }

        100% {

            transform: scale(0.1);
        }
    }

    .today {
        color: darkgreen;
        font-weight: 700;
        /* font-size: 35px; */
        border-radius: 50%;
        background-color: rgb(25, 179, 161, 0.7);

    }

    .next-button {
        width: 10%;
        /* border: 1px solid black; */
        /* background-color: pink; */
    }

    .prev-button {
        width: 10%;
        /* border: 1px solid black; */
        /* background-color: pink; */
    }

    .above-button {
        width: 10%;
        /* border: 1px solid black; */
        /* background-color: pink; */
        margin-bottom: 15px;
    }

    i {
        color: green;
        font-size: 60px;
        cursor: pointer;
        transition: all 0.8s;
    }

    i:hover {
        color: darkgreen;
        /* font-size: 70px; */
        text-shadow: 0px 0px 20px rgba(172, 243, 157, 0.7);
        transform: scale(1.2);


    }

    .pic-left {
        width: 20%;
        /* border: 1px solid black; */
        position: relative;
        top: 0px;

    }

    .animal-block {
        position: absolute;
        right: -30px;
        animation: ani2 10s infinite;
        animation-timing-function: linear;
    }

    .animal-block>img {
        width: 300px;
        height: 30vh;
    }

    @keyframes ani2 {
        0% {
            bottom: 100px;
        }

		25% {
            bottom: 0px;
        }

        50% {
            bottom: -100x;
        }

		75% {
            bottom: -250px;
        }

        100% {
            bottom: 0px;
        }
    }

    .holiday {
        color: red;
        font-size: 16px;
        font-weight: 700;
        text-align: left;
        position: absolute;
        width: 100%;
        text-align: center;
        left: 0;
        top: 5em;
    }

    video {
        opacity: 0;
        width: 0;
        height: 0;
    }
    td>a{
        cursor: pointer;
        text-decoration: none;
    }
    #cover {
	width: 100%;
	height: 100%;
	position: fixed;
	z-index: 5;
	background: rgba(51, 51, 51, 0.4);
	top: 0px;
	left: 0px;
	overflow: auto;
    }

    #coverr {
        width: 70%;
        min-width: 100px;
        max-width: 400px;
        height: 70%;
        min-height: 300px;
        position: absolute;
        z-index: 5;
        background: #ffffff;
        top: 0px;
        left: 80px;
        right: 0px;
        bottom: 0px;
        margin: auto;
        overflow: auto;
        border-radius: 10px;
    }
    </style>
</head>

<body>
<div id="cover" style="display:none; ">
		<div id="coverr">
			<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl(&#39;#cover&#39;)">X</a>
			<div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
		</div>
	</div>
    <!-- <h1>萬年曆</h1>   -->
    <div class="pic-left">
        <div class="animal-block">
            <img src="./calendar/img/hedgehog-1 .png" alt="">
        </div>
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
        <div class="above-button">
            <a href="?year=<?=date('Y');?>&month=<?=date('m');?>">
                <i class="fa-solid fa-calendar-week"></i>
            </a>
        </div>
        <div class="main">
            <div class="prev-button">
                <a href="?year=<?=$prevYear;?>&month=<?=$prev;?>">
                    <i class="fa-solid fa-tree"></i>
                </a>

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
				for ($i = 0; $i < $weeks; $i++) {
					echo "<tr>";
					for ($j = 0; $j < 7; $j++) {
						$addDays = 7 * $i + $j;
						// 計算日期格是第一週開始後的哪一天
						$thisCellDate = strtotime("+$addDays days", strtotime($firstCell));
						// 計算每個日期格的實際日期，基於第一週的第一格的時間
						if (date("Y-m-d", $thisCellDate) == date("Y-m-d")) {
						    if (date("m", $thisCellDate) == date("m", strtotime($thisFirstday))) {

							// 檢查是否為今天的日期
						   echo "<td class='today'>";
                  
					         }else{
                                echo "<td>";
                             }

                         }elseif (date('w', $thisCellDate) == 0 || date('w', $thisCellDate) == 6) {
							echo "<td style='color: lightcoral'>";
						 } else {
                            echo "<td>";

						}
                        echo "<a onclick='op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal.php&#39;)'>";
						if (date("m", $thisCellDate) == date("m", strtotime($thisFirstday))) {
							// 檢查日期格是否在本月範圍內 月份有符合本月則可以顯示
							echo date("j", $thisCellDate);
						}
                        // if ($year == date("Y", $thisCellDate) && $month == date("m", $thisCellDate) && date("d") == date("d", $thisCellDate)) {
                        //     echo "<td class='today'>";
                        // } 

						// 检查是否是节日
						$array1 = [["10-31", "瑪麗亞凱莉預備備"], ["12-25", "瑪麗亞凱莉受難日"]];
						foreach ($array1 as $key => $holiday) {
							// 使用explode函数将字符串分割成数组
							$parts = explode("-", $holiday[0]);
							$holidayM = $parts[0]; // 获取中间的值（月份）

							if ($month == $holidayM && date("m-d", $thisCellDate) == $holiday[0]) {
								echo "<small class='holiday'>{$holiday[1]}<small/>";
								
							}
						}
                        echo "</a>";
						echo "</td>";
						
					}
					echo "</tr>";
				}
				echo "</table>";


			?>
            </div>
            <div class="next-button">
                <a href="?year=<?=$nextYear;?>&month=<?=$next;?>">
                    <i class="fa-solid fa-leaf"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="pic-right">
        <div class="flower-block1">
            <img src="./calendar/img/wflower.png" alt="">
        </div>
        <div class="flower-block2">
            <img src="./calendar/img/wflower.png" alt="">
        </div>
    </div>
    <?php
	if($month=='10'){
		echo '<video controls loop autoplay>
				<source src="./calendar/audio/It’s time.m4a" type="video/mp4">
				</video>';
	}

	if($month=='12'){
		echo '<video controls loop autoplay>
				<source src="./calendar/audio/That’s mariah.m4a" type="video/mp4">
				</video>';
	}



?>
</body>

</html>