<html>
    <head>
        <title>Account verification</title>
        
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="USAAstudent/usaastudent.js"></script>
    </head>
    <body>
    <div class="w3-section w3-border w3-border-green" style="margin: 0 auto; width: 50%">
        <div class="container" style="margin: 40px;">
            <span style="color: #b2d6c1">Please check your email and enter the account verificaion code</span><br /><br />
            <form method='post'>
                <input type="number" id="code" class="w3-input w3-round" maxlength = "4" required><br />
                <button class="w3-button w3-round w3-small w3-hover-none" style="background-color: #56a677" name="verify"><span style="color: #b2d6c1">Verify</span></button>
                <br />
                <div id="result2"></div>
            </form>
        </div>
	</div>
    </body>
</html>