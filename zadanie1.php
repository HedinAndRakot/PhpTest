
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
</head>
<body>
    <form>
        <input type="text" name="year" id="year">
        <button type="button" id="button_yaer" class="button_yaer">Проверить</button>
    </form>
    <script>
        $("#button_yaer").on("click", function(){
            var year = document.getElementById("year").value;

            $.ajax({
                url: 'zadanie1_2.php',
                type: 'POST',
                data: {'year': year},
                success: function(data){
                    document.getElementById('conclusion').innerHTML= data;
                }
            });
        }
        )
    </script>
    <br>
    <div id='conclusion'></div>
</body>
