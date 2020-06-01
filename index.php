<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Dialectify - Create familiar yet outrageous new dialects!</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/app.css'>
    <script type="text/javascript" language='javascript' src='js/filler.js'></script>
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
                    <option value="dutch">--- Indo-European ---</option>
                    <option value="dutch" selected="selected">Dutch</option>
                    <option value="english">English</option>
                    <option value="french">French</option>
                    <option value="german">German</option>
                    <option value="greek">Greek</option>
                    <option value="italian">Italian</option>
                    <option value="jutland">Jutland (Norwegian, Swedish, Danish)</option>
                    <option value="latin">Latin</option>
                    <option value="portuguese">Portuguese</option>
                    <option value="russian">Russian</option>
                    <option value="spanish">Spanish</option>
                    <option value="sanskrit">--- Indian ---</option>
                    <option value="hindi">Hindi</option>
                    <option value="pali">Pali</option>
                    <option value="sanskrit">Sanskrit</option>
                    <option value="tamil">Tamil</option>
                    <option value="javanese">--- Austronesian ---</option>
                    <option value="balinese">Balinese</option>
                    <option value="batak">Batak</option>
                    <option value="betawi">Betawi</option>
                    <option value="javanese">Javanese</option>
                    <option value="minang">Minang</option>
                    <option value="nias">Nias</option>
                    <option value="sunda">Sunda</option>
                    <option value="chinese">--- East Asian ---</option>
                    <option value="chinese">Chinese</option>
                    <option value="japanese">Japanese</option>
                    <option value="korean">Korean</option>
                    <option value="arabic">--- Middle East ---</option>
                    <option value="arabic">Arabic</option>
                    <option value="hebrew">Hebrew</option>
                    <option value="persian">Persian</option>
                </select><br>
                <label for="input_text">Input pure text here:</label><br>
                <textarea name="input_text" id="input_text" rows="10" required autofocus></textarea>
                <br>
                <input type="submit" value="Give dialects please, pretty sir!"><br>
                <label>Sidenote: only Indonesian + Dutch dialect works now. This will be a proof of concept for an assignment. Those who aspire to contribute may do so <a href="https://github.com/sayastershire/dialectify">here</a>.</label>
            </form>

            
        </div>
        <div id="sidebar">
            <h2 class="title">Sample Text</h2>
            <a onclick="filler1()" href="#">Sample Text 1</a><br>
            Cela est une barre du côte.
        </div>
    </div>
</body>
</html>