<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>書誌情報取得サンプル</title>
    <link rel="stylesheet" href="css/stylecss.css">
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
    <canvas id="board"></canvas>
    <section id="body">
      <button id="bookmark">一覧</button>
    <div class="isbnresearch">
      <div class="isbn1">
        ISBN入力：</div><input id="isbn" type="text" name="isbn" value="" autofocus placeholder="ここにだけ入力してね">
        <button id="getBookInfo" class="btn btn-default">書籍情報取得</button>
    </div>

    
  <form method="post" action="insert.php">
    <div class="form1">
      <fieldset>
        <div class="title_output">
          <div class="title1">
            書籍名：</div><label><input id="title2" type="text" name="title" value="" ></label>
        </div>

        <div>
            <p id="thumbnail"></p>
        </div>

        <div class="publisher_output">
          <div class="publisher1">
            出版社：</div><label><input id="publisher2" type="text" name="publisher" value=""  ></label>
        </div>

        <div class="volume_output">
          <div class="volume1">
            巻：</div><label><input id="volume2" type="text" name="volume" value="" ></label>
        </div>

        <div class="series_output">
          <div class="series1">
            シリーズ：
          </div><label><input id="series2" type="text" name="series" value="" ></label>
          
        </div>

        <div class="author_output">
          <div class="author1">
            著者：</div><label><input id="author2" type="text" name="author" value="" ></label>
        </div>

        <div class="pubdate_output">
          <div class="pubdate1">
            出版日：</div><label><input id="pubdate2" type="text"  name="pubdate" value=""  ></label>
        </div>

        <div class="cover_output">
          <div class="cover1">
            サムネイルURI：</div><label><input id="cover2" type="text" name="cover" value=""  ></label>
        </div>

        <div class="description_output">
          <div class="description1">
            詳細：</div><label><textarea id="description2" type="text" name="description" value="" ></textarea></label>
        </div>
        
          
          <div class="reading">
            
            <input type="submit" value="ブックマーク">
            
          </div>
          
        
      </fieldset>
    </div>
  </form>





    <script>



        
        $(function() {
            $('#getBookInfo').click( function( e ) {
                e.preventDefault();
                const isbn = $("#isbn").val();
                const url = "https://api.openbd.jp/v1/get?isbn=" + isbn;

                $.getJSON( url, function( data ) {
                    if( data[0] == null ) {
                        alert("データが見つかりません");
                    } else {
                        if( data[0].summary.cover == "" ){
                            $("#thumbnail").html('<img src=\"\" />');
                        } else {
                            $("#thumbnail").html('<img src=\"' + data[0].summary.cover + '\" style=\"border:solid 1px #000000\" />');
                        }
                        $("#title2").val(data[0].summary.title);
                        $("#publisher2").val(data[0].summary.publisher);
                        $("#volume2").val(data[0].summary.volume);
                        $("#series2").val(data[0].summary.series);
                        $("#author2").val(data[0].summary.author);
                        $("#pubdate2").val(data[0].summary.pubdate);
                        $("#cover2").val(data[0].summary.cover);
                        $("#description2").val(data[0].onix.CollateralDetail.TextContent[0].Text);
                    }
                });
            });
        });
    </script>

<script>
  $(".reading").click(function() {
  　alert("ブックマークしました！")
  });

  $("#bookmark").click(function() {
  if (confirm('ブックマーク一覧に遷移しますか')) {
    window.location.href = "result.php";
  }
  });
  
</script>
</section>
</body>
</html>