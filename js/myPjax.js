
$(document).on('click', "#Sidebar #Nav .Pjax", function(e) {
    e.preventDefault(); //デフォルトの動作を中止
    var nextUrl = $(this).attr('href'); //リンクのURLを変数に格納
    $("#MainColumn").animate({opacity:0},"normal",function(){
      $.pjax({ //Pjaxイベント開始
          url: nextUrl, //リクエストするURL
          container: '#MainColumn', //入れ替える部分
          fragment: '#MainColumn', //入れ替え先
          timeout:  20000
          //Pjaxがタイムアウトするまでの時間 短すぎるとPjaxが途中で中断してしまう
        });
    });
});



$(document).on('pjax:end',function(){　//pjaxが終了した時の処理
  $("#MainColumn").animate({opacity:1},"normal");

});

