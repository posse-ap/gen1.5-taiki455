var ctx = document.getElementById("myDoughnutChart");
  var myDoughnutChart= new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ["<?php echo $row['data'] ?> ",] ,
        <?php foreach ($stmt2 as $row)  { ?>
      labels: ["<?php echo $row['data'] ?> ",] , //データ項目のラベル
      datasets: [{
          
          backgroundColor: [
           "<?php echo $row['color'] ?>",
          ]
         
          data: [42,18,10,10,6,5,4,4] //グラフのデータ
      }]
     <?php } ?> 
    },
    options: {
      legend:{
      position:"bottom",
      },

      title: {
        display: true,
        text: '学習言語',
        fontSize:15,
        
        
      }
      
    }
  });