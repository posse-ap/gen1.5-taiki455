var ctx2 = document.getElementById("myDoughnutChart2");
  var myDoughnutChart= new Chart(ctx2, {
    type: 'doughnut',
    data: {
      labels: ["ドットインストール", "N予備校", "POSSE課題", ], //データ項目のラベル
      datasets: [{
          backgroundColor: [
              "#0033FF",
              "#006699",
              "#33CCCC",
          ],
          
          data: [42, 33, 22,], //グラフのデータ
         
      }]
    },
    options: {

      legend:{
        position:"bottom",
       
        },

      title: {
        display: true,
        //グラフタイトル
        text: '学習コンテンツ',
        fontSize:15,

        
      },
     
    }
    
  });



