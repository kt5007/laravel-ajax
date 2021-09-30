<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>sample</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(function() {
            $("a").on('click',
                function() {
                    let id = $(this).attr("id");
                    // alert(id);
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'GET',
                        url: '/user/get_users', // url: は読み込むURLを表す
                        dataType: 'json', // 読み込むデータの種類を記入
                        data: {
                            id: id //request で渡す時の名前
                        },
                    }).done(function(results) {
                        // 通信成功時の処理
                        console.log(results);
                        // idを取得してアラート表示
                        let values = [];
                        $.each(results,function(key,value){
                            values.push(value.id);
                        });
                        alert(values);
                    }).fail(function(err) {
                        // 通信失敗時の処理
                        alert('ファイルの取得に失敗しました。');
                    });
                }
            );
        });
    </script>
</head>

<body>
    <p>
        <a id="or_less_5" href="#">idが5以下</a>
    </p>
    <p>
        <a id="or_more_6" href="#">idが6以上</a>
    </p>
</body>

</html>
