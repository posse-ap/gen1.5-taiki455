var btn = document.getElementById('btn');
var modal = document.getElementById('modal');

var btn2 = document.getElementById('btn2');
var modal2 = document.getElementById('modal2');

var btn3 = document.getElementById('btn3');
var modal3 = document.getElementById('modal3');


var phonebtn = document.getElementById('phonebtn');
var closeBtn = document.getElementById('closeBtn');

btn.addEventListener('click', function() { modal.style.display = 'block';
});
btn2.addEventListener('click', function() { modal2.style.display = 'block';
});
phonebtn.addEventListener('click', function() { modal.style.display = 'block';
});
btn3.addEventListener('click', function() { modal3.style.display = 'block';
});





// -------------------ボタンで閉じる------------------------------
closeBtn.addEventListener('click', function() {
  modal.style.display = 'none';
})

// -------------------画面外で閉じる ~モーダル1~------------------------------
window.addEventListener('click', function(e) {
  if (e.target == modal) {
    modal.style.display = 'none';
  }
});

// -------------------画面外で閉じる ~モーダル2~------------------------------
window.addEventListener('click', function(f) {
  if (f.target == modal2) {
    modal2.style.display = 'none';
    modal.style.display = 'none';
  }
});

// -------------------画面外で閉じる ~モーダル3~------------------------------
window.addEventListener('click', function(g) {
  if (g.target == modal3) {
    modal3.style.display = 'none';
   
  }
});





// -----------------------------カレンダー作り------------------------------------------

const weeks = ['日', '月', '火', '水', '木', '金', '土']
const date = new Date()
const year = date.getFullYear()
const month = date.getMonth() + 1
const startDate = new Date(year, month - 1, 1) // 月の最初の日を取得
const endDate = new Date(year, month,  0) // 月の最後の日を取得
const endDayCount = endDate.getDate() // 月の末日
const startDay = startDate.getDay() // 月の最初の日の曜日を取得
let dayCount = 1 // 日にちのカウント
let calendarHtml = '' // HTMLを組み立てる変数

calendarHtml += '<h1>' + year  + '/' + month + '</h1>'
calendarHtml += '<table>'

// 曜日の行を作成
for (let i = 0; i < weeks.length; i++) {
    calendarHtml += '<td>' + weeks[i] + '</td>'
}

for (let w = 0; w < 6; w++) {
    calendarHtml += '<tr>'

    for (let d = 0; d < 7; d++) {
        if (w == 0 && d < startDay) {
            // 1行目で1日の曜日の前
            calendarHtml += '<td></td>'
        } else if (dayCount > endDayCount) {
            // 末尾の日数を超えた
            calendarHtml += '<td></td>'
        } else {
            calendarHtml += '<td>' + dayCount + '</td>'
            dayCount++
        }
    }
    calendarHtml += '</tr>'
}
calendarHtml += '</table>'

document.querySelector('#calendar').innerHTML = calendarHtml




// -----------------------------ドーナツグラフ作り------------------------------------------


  // var ctx = document.getElementById("myDoughnutChart");
  // var myDoughnutChart= new Chart(ctx, {
  //   type: 'doughnut',
  //   data: {
  //     labels: ["JavaScript", "CSS", "PHP", "HTML","Laravel","SQL","SHELL","情報システム基礎知識（その他）",] , //データ項目のラベル
  //     datasets: [{
  //         backgroundColor: [
  //          "#0033FF",
  //          "#006699",
  //          "#33CCCC",
  //          "#00CCFF",
  //          "#9966FF",
  //          "#9933FF",
  //          "#6633CC",
  //          "#6600CC",
  //         ],
  //         data: [42,18,10,10,6,5,4,4] //グラフのデータ
  //     }]
     
  //   },
  //   options: {
  //     legend:{
  //     position:"bottom",
  //     },

  //     title: {
  //       display: true,
  //       text: '学習言語',
  //       fontSize:15,
        
        
  //     }
      
  //   }
  // });

// -----------------------------ドーナツグラフ作り2------------------------------------------

// var ctx2 = document.getElementById("myDoughnutChart2");
//   var myDoughnutChart= new Chart(ctx2, {
//     type: 'doughnut',
//     data: {
//       labels: ["ドットインストール", "N予備校", "POSSE課題", ], //データ項目のラベル
//       datasets: [{
//           backgroundColor: [
//               "#0033FF",
//               "#006699",
//               "#33CCCC",
//           ],
          
//           data: [42, 33, 22,], //グラフのデータ
         
//       }]
//     },
//     options: {

//       legend:{
//         position:"bottom",
       
//         },

//       title: {
//         display: true,
//         //グラフタイトル
//         text: '学習コンテンツ',
//         fontSize:15,

        
//       },
     
//     }
    
//   });






  // -----------------------------棒グラフ作り------------------------------------------

  // var ctx = document.getElementById("myBarChart");
  // var myBarChart = new Chart(ctx, {
  //   type: 'bar',
  //   data: {
  //    //凡例のラベル2
  //     labels: ['2', '4', '6', '8', '10','12','14','16',"18","20","22","24","26","28","30",],
     
    
      
  //    datasets: [


  //       {
  //         data: [1,2,3,4,5], //グラフのデータ
  //         backgroundColor: "#0033FF"
  //       },
  //       {
  //         data: [1,2,3,4,5], //グラフのデータ
  //         backgroundColor: "#0033FF",
  //       },
       
  //     ]
  //   },


  //   options: {
  //     title: {
  //       display: false,
  //       //グラフタイトル
        
  //     },
  //     legend:{
  //     display:false,

  //     },
  //     scales: {
  //       yAxes: [{
          
  //         gridLines: {
  //         display:false,
  //         drawBorder:false,
  //            },
        
  //         ticks: {
  //           suggestedMax: 6, //最大値
  //           suggestedMin: 0, //最小値
  //           stepSize: 2, //縦ラベルの数値単位
  //           callback: function(value) {
  //             return value +'h';}
  //           },
            
  //       }],
        
         
  //       xAxes: [{
        

  //         categoryPercentage: 0.5, 
  //         barPercentage: 0.5,      
              
  //         gridLines: {
  //           display:false,
  //           drawBorder:false,
  //       },
        
  //          }] 

  //     },
  //     },
     




  // });
 