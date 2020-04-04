<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chat</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <iframe name="dummyframe" id="dummyframe" style="display: none;"></iframe>
    <h3>My Chatroom</h3>
    <section class="chat" id="chat"></section>
 

    <script type="text/javascript" src="jquery3.4.1-min.js"></script>
    <script>
        $(document).ready(function() {
            setInterval(function() {
                $('#chat').load('dbLoad.php')
            }, 2000);
        });
    </script>


    <div id="gg"></div>


    <section class="send">
        <form action="insertDB.php" method="POST" target="dummyframe" id="myForm">
            <input type="text" placeholder="Votre nome" name="pseudo" id="pseudo" />
            <input type="text" name="message" id="message" />
            <input type="submit" name="submit" value="send" id="submit" onclick="clean()" />
        </form>
    </section>

    <script>
        function clean() {
            if (this.submit) {
                setTimeout(function() {
                    document.getElementById('message').value='';
                    document.getElementById('message').focus();
                }, 1000);
            };
        }
    </script>

</body>

</html>