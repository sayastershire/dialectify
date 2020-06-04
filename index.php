<!-- 
    Hey whoever gets to see this, I just wanna remind you to WRITE AllowOverride None in the directory, okay?
    --sleep-deprived vin:)
-->

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
            <div id="tab-selector">
                <button class="tab" onclick="showTab(event, 'input')">Input</button>
                <button class="tab" onclick="showTab(event, 'output')">Output</button>
            </div>
            <div id="content-input" class="tabcontent active">
                <form method="post" action="processor.php" autocomplete="off" id="input-form">
                    <label>Mode: </label>
                    <input type="radio" id="translate" name="mode-of-operation" value="translate" checked="checked" onchange=showLanguagePane()>
                    <label for="translate">Translate</label>
                    <input type="radio" id="analyse" name="mode-of-operation" value="analyse" onchange=hideLanguagePane()>
                    <label for="analyse">Analyse</label><br>
                    <span id="language-dialog">
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
                    </span>
                    <label for="input_text">Input pure text here:</label><br>
                    <textarea name="input_text" id="input_text" rows="10" required autofocus></textarea>
                    <br>
                    <input type="submit" value="Give dialects please, pretty sir!"><br>
                    <label>Sidenote: only Indonesian + Dutch dialect works now. This will be a proof of concept for an assignment. Those who aspire to contribute may do so <a href="https://github.com/sayastershire/dialectify">here</a>.</label>
                </form>
            </div>
            <div id="content-output" class="tabcontent">
                HIIIII!!!!!!1111
            </div>
        </div>
        <div id="sidebar">
            <h2 class="title">Sample Text</h2>
            <button type="button" onclick="filler(0)">Sample Text 1</button><br>
            <button type="button" onclick="filler(1)">Sample Text 2</button><br>
        </div>
    </div>
</body>
</html>