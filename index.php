/***************************************/
1.
--
-- База данных: `Books`
--

-- --------------------------------------------------------

--
-- Структура таблицы `author`
--

CREATE TABLE IF NOT EXISTS `author` (
  `id` int(11) NOT NULL,
  `author_title` int(11) NOT NULL,
  `book_title_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `book_title_id` (`book_title_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--


SELECT * FROM author INNER JOIN book ON book.id=author.book_title_id


/***************************************/
2. <?phpfunction distributeStake($m, $n){
	if($m < $n){
		echo "Стейков мало ". "<br>";
	} else if($m > $n) {
		echo ($m % $n). " Остаток <br>";
	}
	$countPise = $m / $n;
	echo "Каждому по " . floor($countPise);
}

	distributeStake(5, 5);
?>


/***************************************/
3. <input type="text"> oninput: <span id="result"></span>
<script>
  var input = document.body.children[0];

  input.oninput = function() {
    var str = document.getElementById('result').innerHTML = input.value.replace(/\({1,}/g, "(:");
    console.log(str);
  };
</script>


/***************************************/
4. <?php

    for( $i = 1; $i < 100; ++ $i )
    {
        echo ' [', $i, '] ';
        switch( $i )
        {
            case $i<=20: echo '*'; break;
            case $i<=40: echo '**' ; break;
            case $i<=60: echo '***' ; break;
			case $i<=80: echo '****' ; break;
			case $i<=100: echo '*****' ; break;
        }
        echo ' <' , $i, '> ';
    }

?>


/***************************************/
5. <?
$url = $_SERVER['PHP_SELF'];

if( isset($HTTP_COOKIE_VARS["res"]) )
    $res = $HTTP_COOKIE_VARS["res"];

else {
    ?>
    <script language="javascript">
    <!--
    go();

    function go() 
    {
        var today = new Date();
        var the_date = new Date("August 31, 2020");
        var the_cookie_date = the_date.toGMTString();
        var the_cookie = "res="+ screen.width +"x"+ screen.height;
        var the_cookie = the_cookie + ";expires=" + the_cookie_date;
        document.cookie=the_cookie
            location = '<?echo "$url";?>';
    }
    //-->
    </script>
    <?php
}


list($width, $height) = split('[x]', $res);


$tb_width = $width-300;
$tb_height = $height-300;

//Make the table


$file = 'test.txt';
$current = file_get_contents($file);
$current .= ("<table align=center border=1 width=" .$tb_width . " height=" . $tb_height . " >
    <tr><td align=center>Your screen resolution is " . $width . " by " . $height . ".<br>
    The width/height of this table is " . $tb_width . " by " . $tb_height . ".</td></tr>
    </table>");
// Пишем содержимое обратно в файл
file_put_contents($file, $current);
