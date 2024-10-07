<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ツアー予定人数登録</title>
    <link rel = "Stylesheet" href="css/tour.css">
</head>
<body>
    <h2>ツアー予定人数登録システム</h2>
    <div class="container">
        <div class="background-image">
        <div class="conta" style="float: left">
            <P>
                <?PHP 
                $tcoop = $_POST['tcoop'];
                $tname = $_POST['tname'];
                $tdate = $_POST['tdate'];
                $ttime = $_POST['ttime'];
                $tplace = $_POST['tplace'];
                $tnum = $_POST['tnum'];

                function db_connect(){
                    try{
                        $db = new PDO('mysql:dbname=tour; host=127.0.0.1; charset=utf8','root','');
                        return $db;
                    }catch(PDOException $e){
                        echo 'DB接続エラー:'. $e->getMessage();
                        exit;

                    }

                }

                function insert($tcoop,$tname,$tdate,$ttime,$tplace,$tnum){
                    $db=db_connect();
                    $sql="INSERT INTO yoyaku(TCoop,TName,TDate,TTime,TPlace,TNum) VALUES(". $tcoop .","."'$tname'".","."'$tdate'".",". $ttime .",".$tplace .",".$tnum .")";
                
                    print("正常に登録が完了しました");
                    $count = $db->query($sql);
                    $db = NULL;
                    return 0;
                }

                insert($tcoop,$tname,$tdate,$ttime,$tplace,$tnum);
                ?>
            </P>
            <div><a href="input.html"></a></div>
            </div>
        </div>
    </div>
</body>
</html>