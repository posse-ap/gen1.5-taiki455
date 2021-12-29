var ctx = document.getElementById("myBarChart");
  var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
     //凡例のラベル2
      labels: ['2', '4', '6', '8', '10','12','14','16',"18","20","22","24","26","28","30",],
     
    
      
     datasets: [


        {
          data: [1,2,3,4,5], //グラフのデータ
          backgroundColor: "#0033FF"
        },
        {
          data: [1,2,3,4,5], //グラフのデータ
          backgroundColor: "#0033FF",
        },
       
      ]
    },


    options: {
      title: {
        display: false,
        //グラフタイトル
        
      },
      legend:{
      display:false,

      },
      scales: {
        yAxes: [{
          
          gridLines: {
          display:false,
          drawBorder:false,
             },
        
          ticks: {
            suggestedMax: 6, //最大値
            suggestedMin: 0, //最小値
            stepSize: 2, //縦ラベルの数値単位
            callback: function(value) {
              return value +'h';}
            },
            
        }],
        
         
        xAxes: [{
        

          categoryPercentage: 0.5, 
          barPercentage: 0.5,      
              
          gridLines: {
            display:false,
            drawBorder:false,
        },
        
           }] 

      },
      },
     




  });
  