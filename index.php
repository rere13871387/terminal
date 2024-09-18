<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="icon" href="/assets/img/icon.png">
    <title>terminal</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=VT323&display=swap');

        * {
            font-family: 'VT323', monospace;
        }

        body {
            margin: 0;
            background-color: rgb(26, 25, 25);
        }

        .navbar {
            overflow: hidden;
            background-color: #333;
            position: fixed;
            top: 0;
            width: 100%;
            height: 40px;
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .navbar a:hover {
            background: #ddd;
            color: black;
        }

        .main {
            padding: 16px;
            margin-top: 30px;
            height: 50px;
            /* Used in this example to enable scrolling */
        }

        /* width */
        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        input {
            width: 95%;
            height: 20px;
        }

        input:focus {
            outline: none;
        }

        span,
        p {
            color: white;
        }

        .vartext {
            width: 100%;
            height: 50px;
            margin-left: 5%;
        }

        .green {
            color: rgb(11, 83, 15);
        }
    </style>
</head>

<body>

    <div class="navbar">


        <svg height="100" width="100">
            <circle cx="20" cy="20" r="10" stroke="red" stroke-width="3" fill="red" />
            <circle cx="50" cy="20" r="10" stroke="yellow" stroke-width="3" fill="yellow" />
            <circle cx="80" cy="20" r="10" stroke="green" stroke-width="3" fill="green" />
        </svg>

    </div>
    <div class="main">
        <span>#-/</span>
        <input type="text" spellcheck="false" name="item1" id="input">
    </div>
    <div class="vartext">
        <p>result: <span id="txtHint"></span></p>
    </div>
</body>
<script src="/assets/js/js.js"></script>
<script>
    function showHint(str) {
        if (str.length == 0) {
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else {
            const xmlhttp = new XMLHttpRequest();
            xmlhttp.onload = function() {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
            xmlhttp.open("GET", "server.php?item1=" + str);
            xmlhttp.send();
        }

    }
    input.addEventListener("keypress", function(event) {
        if (event.key === "Enter") {
            event.preventDefault();
            showHint(document.getElementById('input').value)
        }
    });
</script>

</html>