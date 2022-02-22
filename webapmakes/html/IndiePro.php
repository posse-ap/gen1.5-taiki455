<?php

require('db_connect.php');

$languages = "SELECT * FROM study_languages";
$languageResult = $dbh->query($languages);


$todaytimes = $dbh->prepare('SELECT sum(study_hour) from studies where DATE_FORMAT(study_day, "%D") = DATE_FORMAT(NOW(), "%D")');
    $todaytimes->execute();
    $today_study_time = $todaytimes->fetchColumn();
   
$monthtimes = $dbh->prepare('SELECT sum(study_hour) from studies where DATE_FORMAT(study_day, "%Y%m") = DATE_FORMAT(NOW(), "%Y%m")');
    $monthtimes->execute();
    $month_study_time = $monthtimes->fetchColumn();
    
    $sumtimes = $dbh->prepare('SELECT sum(study_hour) FROM studies');
    $sumtimes->execute();
    $study_time = $sumtimes->fetchColumn();

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

<<<<<<< HEAD
                <br>
                <span class="figure-today"><?php if($today_study_time[0][0] == null){
                                                        echo 0;
                                                        }
                                                        else {echo $today_study_time[0][0];
                                                        }?>
                </span>
                <br>
                <span class="hours">hour</span>
                </p> 
=======
                  19

            </div>

            <div class=card-two>

                <p><span class="status">month</span>

<<<<<<< HEAD
                <br>
                <span class="figure-month"><?php if($month_study_time[0][0] == null){
                                                        echo 0;
                                                        }
                                                        else {echo $month_study_time[0][0];
                                                        }?>
                </span>
=======
                    <br><span class="figure-month">
                    <?php  $monthtimes = $dbh->prepare('SELECT sum(study_hour) from studies where DATE_FORMAT(study_day, "%y%m") = DATE_FORMAT(NOW(), "%y%m")');
                           $monthtimes->execute();
                           $month_study_time = $monthtimes->fetchColumn();
                        echo $month_study_time ?>
                    </span>
>>>>>>> 2b4dd7c3a68ff38b451ecd441202dc839baa2719

                <br>
                <span class="hours">hour</span>
                </p>

            </div>

            <div class=card-three>

                <p><span class="status">total</span>

<<<<<<< HEAD
                <br><span class="figure-total"><?php if($study_time == null){
                                                        echo 0;
                                                        }
                                                        else {echo $study_time;
                                                        }?>
                </span>
=======
                    <br><span class="figure-total">
                    <?php  $sumtimes = $dbh->prepare('SELECT sum(study_hour) FROM studies');
                           $sumtimes->execute();
                           $study_time = $sumtimes->fetchColumn();
                        echo $study_time ?></span>
>>>>>>> 2b4dd7c3a68ff38b451ecd441202dc839baa2719

                <br>
                <span class="hours">hour</span>
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
<<<<<<< HEAD
                       
                        <input type="checkbox"  class="checkbox-design">Javascript
                        <input type="checkbox"  class="checkbox-design">CSS
                        <input type="checkbox"  class="checkbox-design">PHP
                        <input type="checkbox"  class="checkbox-design">HTML
                        <br>
                        <input type="checkbox"  class="checkbox-design">Laravel
                        <input type="checkbox"  class="checkbox-design">SQL
                        <input type="checkbox"  class="checkbox-design">SHELL
                        <input type="checkbox"  class="checkbox-design">情報システム基礎知識
                    </div>
                  
                    <div class="autotweet-box">            
=======
                        <?php foreach($languageResult as $item){ ?>
                        <input type="checkbox"  class="checkbox-design"><?php echo $item['language'] ?>
                        <?php echo '<br>' ?>
                        <?php } ?>
                    </div>
                  

                    <div class="autotweet-box">
                        
>>>>>>> 2b4dd7c3a68ff38b451ecd441202dc839baa2719
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

<<<<<<< HEAD
=======


>>>>>>> 2b4dd7c3a68ff38b451ecd441202dc839baa2719
        <script src="IndiePro.js"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script> -->
</body>

</html>