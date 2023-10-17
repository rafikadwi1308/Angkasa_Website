<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angkasa | Lupa Pass Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .forgot-container {
            width: 100%;
            max-width: 400px;
            padding: 25px;
            background-color: #EBECF0 0.5;
            backdrop-filter: blur(5px);
            border-radius: 25px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            transition: transform 0.2s;
            justify-content: center;
            align-items: center;
        }

        .forgot-container h1 {
            color: #000;
            font-weight: 800;
            font-size: 24px;
            margin-top: -5px;
            margin-bottom: 30px;
        }

        label {
            display: block;
            margin-bottom: 24px;
            width: 100%;
        }

        .user_input,
        .captch_input {
            margin-right: 20px;
        }

        input {
            border: 0;
            outline: 0;
            font-size: 16px;
            border-radius: 320px;
            padding: 15px;
            background-color: #EBECF0;
            text-shadow: 1px 1px 0 #FFF;
            margin-right: -20px;
            box-shadow: inset 2px 2px 5px #BABECC, inset -5px -5px 10px #FFF;
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 10px;
            transition: all 0.2s ease-in-out;
        }

        .captcha-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .captcha-box {
            flex: 1;
            display: flex;
            align-items: center;
            padding: 10px 10px;
            font-size: 25;
        }

        .refresh-button {
            background-color: #000;
            color: #EBECF0;
            border: none;
            padding: 16px 16px;
            border-radius: 320px;
            cursor: pointer;
            margin-left: 5px;
            margin-right: 10px;
            margin-top: -15px;
        }

        .button {
            text-align: center;
            margin-right: 50px;
        }

        #submit-button {
            background-color: #000;
            width: 380px;
            font-size: 16px;
            color: #fff;
            border: none;
            padding: 15px 20px;
            border-radius: 320px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
            margin-left: 10px;
            margin-right: 20px;
        }

        #submit-button:hover {
            background-color: #333;
        }

        #submit-button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }

        #submit-button:not(:disabled) {
            background-color: #000;
            cursor: pointer;
        }

        #submit-button:hover:not(:disabled) {
            background-color: #333;
        }

        #cancel-button {
            background-color: #000;
            width: 380px;
            font-size: 16px;
            color: #fff;
            border: none;
            padding: 15px 20px;
            border-radius: 320px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
            margin-left: 10px;
            margin-right: 10px;
        }

        #cancel-button:hover {
            background-color: #333;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            width: 100%;
            height: 100%;
            backdrop-filter: blur(5px);
            background-color: rgba(0, 0, 0, 0.7);
        }

        .modal-content {
            background-color: #000;
            position: fixed;
            color: #fff;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-family: "Poppins", sans-serif;
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            width: 400px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .btn-yes,
        .btn-no {
            margin: 5px;
            padding: 10px 20px;
            cursor: pointer;
            background-color: #EBECF0;
            font-size: 16px;
            color: black;
            border: 2px solid black;
            transition: background-color 0.3s ease, color 0.3s ease, border 0.3s ease;
            border-radius: 50px;
        }

        .btn-yes:hover,
        .btn-no:hover {
            background-color: black;
            color: #EBECF0;
            border: 2px solid #EBECF0;
            transition: background-color 0.5s ease, color 0.5s ease, border 0.5s ease;
        }
    </style>
</head>

<body>
<div class="forgot-container">
        <form id="captcha-form" method="post" action="check_username.php">
            <h1>Verifikasi Lupa Password</h1>
            <div class="input-field user_input">
                <input type="text" id="username" name="username" placeholder="Masukkan Username Anda..."
                    autocomplete="off">
            </div>
            <div class="captcha-container">
                <div class="captcha-box">
                    <input type="text" id="captcha" value=" " disabled>
                </div>
                <button class="refresh-button" type="button" id="refresh-button">
                    <i class="fas fa-sync"></i> Refresh
                </button>
            </div>
            <div class="input-field captch_input">
                <input type="text" id="captcha-input" name="captcha" placeholder="Masukkan captcha...">
            </div>
            <div class="input-field button">
                <button type="button" id="submit-button" disabled>Submit</button>
                <button type="button" id="cancel-button">Batal</button>
            </div>
        </form>
    </div>

    <div id="confirmation-modal" class="modal">
        <div class="modal-content">
            <p>Apakah Anda yakin ingin membatalkan pembuatan password baru?</p>
            <button id="confirm-yes" class="btn-yes">Ya</button>
            <button id="confirm-no" class="btn-no">Tidak</button>
        </div>
    </div>

    <script>
        document.getElementById("cancel-button").addEventListener("click", function () {
            document.getElementById("confirmation-modal").style.display = "block";
        });

        document.getElementById("confirm-yes").addEventListener("click", function () {
            window.location.href = "Login.php";
        });

        document.getElementById("confirm-no").addEventListener("click", function () {
            document.getElementById("confirmation-modal").style.display = "none";
        });
    </script>

<script>
        const captchaTextBox = document.querySelector("#captcha");
        const refreshButton = document.querySelector(".refresh-button");
        const captchaInputBox = document.querySelector("#captcha-input");
        const submitButton = document.querySelector("#submit-button");
        const usernameInput = document.querySelector("#username");

        let captchaText = null;

        const generateCaptcha = () => {
            const randomString = Math.random().toString(36).substring(2, 7);
            const randomStringArray = randomString.split("");
            const changeString = randomStringArray.map((char) =>
                Math.random() > 0.5 ? char.toUpperCase() : char
            );
            captchaText = changeString.join("");
            captchaTextBox.value = captchaText;
        };

        const refreshBtnClick = () => {
            generateCaptcha();
            captchaInputBox.value = "";
            captchaKeyUpValidate();
        };

        const captchaKeyUpValidate = () => {
            const isCaptchaCorrect = captchaInputBox.value === captchaText;
            const isUsernameFilled = usernameInput.value.trim() !== "";

            if (isCaptchaCorrect && isUsernameFilled) {
                submitButton.disabled = false;
            } else {
                submitButton.disabled = true;
            }

            if (!isCaptchaCorrect) {
                captchaTextBox.innerText = "";
            }
        };

        const submitBtnClick = () => {
            captchaText = captchaText.replace(/\s+/g, "");
            captchaTextBox.innerText = "";

            if (captchaInputBox.value === captchaText) {
                captchaTextBox.innerText = "Captcha yang dimasukkan sudah benar";
                captchaTextBox.classList.remove("error");
                captchaTextBox.classList.add("success");
                submitButton.disabled = false;
                submitButton.type = "submit";
                window.location.href = "editpass.php";
            } else {
                captchaTextBox.innerText = "Captcha yang dimasukkan tidak benar";
                captchaTextBox.classList.remove("success");
                captchaTextBox.classList.add("error");
            }

            setTimeout(() => {
                captchaTextBox.innerText = "";
            }, 5000);
        };

        refreshButton.addEventListener("click", refreshBtnClick);
        captchaInputBox.addEventListener("keyup", captchaKeyUpValidate);
        submitButton.addEventListener("click", submitBtnClick);

        generateCaptcha();
</script>
</body>

</html>