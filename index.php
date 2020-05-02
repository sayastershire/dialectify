<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Dialectify - Create familiar yet outrageous new dialects!</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/app.css'>
</head>
<body>
    <div class="safezone">
        <div id="main_view">
            <h2 class="title">Dialectify! Create bizzare new dialects!</h2>
            <form method="post" action="processor.php" autocomplete="off" id="input_form">
                <label for="language">Input language: </label>
                <select id="language" name="language">
                    <option value="indonesian">Indonesian</option>
                </select>
                <label for="dialect">Dialect: </label>
                <select id="dialect" name="dialect">
                    <option value="dutch">Dutch</option>
                </select><br>
                <label for="input_text">Input pure text here:</label><br>
                <textarea name="input_text" id="input_text" rows="10" required autofocus>Andi bermain ke pasar minggu bersama dengan mama. Ia menginginkan untuk membeli 50 buah epal merah dan satu boks mainan terkenal pada jaman papa dulu, sedangkan mamanya menginginkan 13 buah baju baru. Pamannya berpesan kepada mamanya Andi untuk mengingatkannya mengenai janjian pada pukul lima nanti.</textarea>
                <br>
                <input type="submit" value="Give dialects please, pretty sir!"><br>
                <label>Sidenote: only Indonesian + Dutch dialect works now. This will be a proof of concept for an assignment. Those who aspire to contribute may do so <a href="https://github.com/sayastershire/dialectify">here</a>.</label>
            </form>

            
        </div>
        <div id="sidebar">
            Cela est une barre du côte.
        </div>
    </div>
</body>
</html>