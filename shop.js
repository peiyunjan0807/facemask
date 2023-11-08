
$('#submit-btn').on("click", function () {

    var data = new Object;

    data.black_num = $('#blackmask').val();
    data.blue_num = $( '#bluemask' ).val();
    data.pink_num = $( '#pinkmask' ).val();

    var num_data = data.black_num + data.blue_num + data.pink_num;

    if (num_data == 0) {
      swal(
          '購物車內還沒有東西喔(*´･д･)ﾉ',
          '趕快去購買吧！',
          'question'
        )
  }
  else {
    swal({
      title: "購物車",
            html:'<table class="table">'
            +'<thead>'
            +'<tr>'
                +'<th scope="col">#</th>'
                +'<th scope="col">品名</th>'
                +'<th scope="col">單價</th>'
                +'<th scope="col">數量</th>'
                +'<th scope="col">金額</th>'
            +'</tr>'
            +'</thead>'
            +'<tbody>'
            +'<tr>'
                +'<th scope="row">1</th>'
                +'<td>黑色口罩</td>'
                +'<td>15</td>'
                +'<td>' + data.black_num + '</td>'
                +'<td>'+ data.black_num * 15 +'</td>'
            +'</tr>'
            +'<tr>'
                +'<th scope="row">2</th>'
                +'<td>藍色口罩</td>'
                +'<td>20</td>'
                +'<td>'+ data.blue_num +'</td>'
                +'<td>'+ data.blue_num * 20 +'</td>'
            +'</tr>'
            +'<tr>'
                +'<th scope="row">3</th>'
                +'<td>粉色口罩</td>'
                +'<td>25</td>'
                +'<td>'+ data.pink_num +'</td>'
                +'<td>'+ data.pink_num * 25 +'</td>'
            +'</tr>'
            +' </tbody>'
            +'</table>',
            showCancelButton: true,
            confirmButtonText: "確定送出",
            cancelButtonText: "取消",
            animation: false

  }).then((result) => {
      if (result) {
        $.post('order_insert.php', {1:data.blue_num, 2:data.pink_num, 3:data.black_num},
        function(data){
            if(data==1){
              swal({
                //儲存
                title: "訂單已送出！",
                type: "success",
                showConfirmButton: false,
                timer: 1000,
              }).then((result) => { }, (dismiss) => { });
                setTimeout(function (){
                  location.reload(true);
                }, 1000);
            };
        });
        
      }
  }, (dismiss) => { });
}
})
