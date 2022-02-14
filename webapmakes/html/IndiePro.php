<?php

require('db_connect.php');

$languages = "SELECT * FROM study_languages";
$languageResult = $dbh->query($languages);




$todaytimes = "SELECT study_hour from studies where study_day = :study_day";
$stmt_today = $dbh->prepare($todaytimes);
$stmt_today->bindValue(':study_day', date("Y-m-d"));
$stmt_today->execute();





?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>webアプリ</title>
    <link rel="stylesheet" href="IndiePro.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
</head>

<body>

    <div class="header">
        <div class="img">
            <img src="/Users/d_chan/Downloads/posselogowhite.jpg" alt="POSSE" class="posse-img">
        </div>
        <div class="weeks">
            <p class="week">4th week</p>
        </div>
    </div>


    <div class="left-side">

        <div class="three-card">

            <div class=card-one>

                <p><span class="status">today</span>

                    <br><span class="figure-today">
                    <?php  $todaytimes = $dbh->prepare('c');
                           $todaytimes->execute();
                           $today_study_time = $todaytimes->fetchColumn();
                        echo $today_study_time ?>
                    </span>

                    <br><span class="hours">hour</span>
                </p>

            </div>

            <div class=card-two>

                <p><span class="status">month</span>

                    <br><span class="figure-month">
                    <?php  $monthtimes = $dbh->prepare('SELECT sum(study_hour) from studies where DATE_FORMAT(study_day, "%y%m") = DATE_FORMAT(NOW(), "%y%m")');
                           $monthtimes->execute();
                           $month_study_time = $monthtimes->fetchColumn();
                        echo $month_study_time ?>
                    </span>

                    <br><span class="hours">hour</span>
                </p>

            </div>

            <div class=card-three>

                <p><span class="status">total</span>

                    <br><span class="figure-total">
                    <?php  $sumtimes = $dbh->prepare('SELECT sum(study_hour) FROM studies');
                           $sumtimes->execute();
                           $study_time = $sumtimes->fetchColumn();
                        echo $study_time ?></span>

                    <br><span class="hours">hour</span>
                </p>

            </div>



        </div>

    </div>

    <div class="graph">
        <canvas id="myBarChart" class='barchart'></canvas>
    </div>

    <div class="under-year-box">

        <input type="button" id="btn3" class="under-year" value="2020年10月">

    </div>

    <div class="arrow-one"></div>
    <div class="arrow-two"></div>



    <div class="right-side">

        <div class="graph-two">

            <canvas id='myDoughnutChart' class="doughnut" width="90" height="90"></canvas>

        </div>

        <div class="graph-three">

            <canvas id='myDoughnutChart2' class="doughnut" width="90" height="90"></canvas>

        </div>

    </div>

    <div id="modal" class="modal">
        <div class="modal-content">
            <div class="modal-body">

                <div class="mordal-left">
                    <div class="day-I-studied">
                        <h4>学習日</h4>
                    </div>

                    <div class="input-day-box">
                        <textarea name="comment" cols="33" rows="1" class="input-day"></textarea>
                    </div>

                    <div class="contents-studied">
                        <h4>学習コンテンツ</h4>
                    </div>


                    <div class="language-studied">
                        <h4>学習言語（複数選択可）</h4>
                    </div>

                    <div class="study-languages-box">
                        <?php foreach($languageResult as $item){ ?>
                        <input type="checkbox"  class="checkbox-design"><?php echo $item['language'] ?>
                        <?php echo '<br>' ?>
                        <?php } ?>
                    </div>
                  

                    <div class="autotweet-box">
                        
                        <input type="checkbox" onclick="window.open('https://twitter.com/?lang=ja'); return true;" class='autotweet-design'>Twitterに自動投稿する
                    </div>

                </div>
            </div>






            <!-- --------------------------------モーダル右------------------------------------------------- -->


            <div class="mordal-right">

                <div class="time-studied">
                    <h4>学習時間</h4>
                </div>
                <form action="db_connect.php" method="post">
                <div class="input-time-box">
                    <textarea name="time" cols="33" rows="1" class="input-time"><?php ?></textarea>
                    <input type="submit" name="" id="">
                </div>
                </form>

                <div class="commentfortwitter">
                    <h4>twitter用コメント</h4>
                </div>
                <div class="input-comment-box">
                    <textarea name="comment" cols="57.8" rows="15" class="input-comment"></textarea>
                </div>







            </div>

            <div class="close-button-map">
                <input type="button" id="closeBtn" value="×" class="close-button-design">
            </div>


            <div class="r-p-button-two-divided">
                <input type="button" id="btn2" value="投稿" class="r-p-button-two">





            </div>
        </div>
    </div>




    <div id=modal2 class="modal-two">
        <div class="modal-content-two">
            <div class="modal-body-two">
                <div class="record-completed">
                    <p>記録完了</p>
                </div>

            </div>
        </div>

    </div>







    <!-- --------------------------------スマホ版メインページ------------------------------------------------- -->

    <div class="r-p-button-phone-box">
        <input type="button" id="phonebtn" value='記録・投稿' class="r-p-button-phone">
    </div>




    <!-- --------------------------------メインページのぼたん------------------------------------------------- -->
    <div class="r-p-button-divided">
        <input type="button" id="btn" value='記録・投稿' class="r-p-button">
    </div>


    <!-- -----   -----   -----   -----  -----   モーダルコンテンツ   -----   -----   -----   -----   -----          -->



    <div id="modal" class="modal">
        <div class="modal-content">


            <div class="day-I-studied">
                <h4>学習日</h4>

            </div>
            <input type="text" name="学習日入力欄" class="input-day">

            <div class="contents-studied">
                <h4>学習コンテンツ</h4>
            </div>




            <div class="language-studied">
                <h4>学習言語（複数選択可）</h4>
            </div>


            <div class="close-button-map">
                <input type="button" id="closeBtn" value="×" class="close-button-design">
            </div>


            <div class="r-p-button-two-divided">
                <input type="button" id="btn2" value="投稿" class="r-p-button-two">
            </div>
        </div>
    </div>


    <div id=modal2 class="modal-two">
        <div class="modal-content-two">
            <div class="modal-body-two">
                <div class="record-completed">
                    <p>記録完了</p>
                </div>

            </div>
        </div>
    </div>

    <div id=modal3 class="modal-three">
        <div class="modal-content-three">
            <div class="modal-body-three">
                <div class="calender-three">
                    <div id="calendar" class="calender" width="300" height="300"></div>
                </div>

            </div>
        </div>



        <script src="IndiePro.js"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script> -->
</body>

</html>