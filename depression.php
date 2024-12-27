<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Depression Level Assessment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
        }
        .question {
            margin: 15px 0;
        }
        .question label {
            font-weight: bold;
        }
        button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
        .result {
            text-align: center;
            margin-top: 20px;
            font-size: 1.2em;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Depression Level Assessment</h1>
        <form id="depressionForm">
            <!-- Question Template -->
            <div class="question1">
                <label>1. I do not feel sad.</label><br>
                <input type="radio" name="q1" value="0" required> 0<br>
                <input type="radio" name="q1" value="1"> 1<br>
                <input type="radio" name="q1" value="2"> 2<br>
                <input type="radio" name="q1" value="3"> 3
            </div>

            <!-- Add similar blocks for 10 questions -->
            <div class="question2">
                <label>2. I feel discouraged about the future.</label><br>
                <input type="radio" name="q2" value="0" required> 0<br>
                <input type="radio" name="q2" value="1"> 1<br>
                <input type="radio" name="q2" value="2"> 2<br>
                <input type="radio" name="q2" value="3"> 3
            </div>

            <div class="question3">
                <label>3. I feel I am a complete failure as a person.</label><br>
                <input type="radio" name="q2" value="0" required> 0<br>
                <input type="radio" name="q2" value="1"> 1<br>
                <input type="radio" name="q2" value="2"> 2<br>
                <input type="radio" name="q2" value="3"> 3
            </div>

            <div class="question4">
                <label>4. I am dissatisfied or bored with everything.</label><br>
                <input type="radio" name="q2" value="0" required> 0<br>
                <input type="radio" name="q2" value="1"> 1<br>
                <input type="radio" name="q2" value="2"> 2<br>
                <input type="radio" name="q2" value="3"> 3
            </div>

            <div class="question5">
                <label>5. I don't feel particularly guilty. </label><br>
                <input type="radio" name="q2" value="0" required> 0<br>
                <input type="radio" name="q2" value="1"> 1<br>
                <input type="radio" name="q2" value="2"> 2<br>
                <input type="radio" name="q2" value="3"> 3
            </div>

            <div class="question6">
                <label>6. I blame myself for everything bad that happens.  </label><br>
                <input type="radio" name="q2" value="0" required> 0<br>
                <input type="radio" name="q2" value="1"> 1<br>
                <input type="radio" name="q2" value="2"> 2<br>
                <input type="radio" name="q2" value="3"> 3
            </div>
           
            
            <div class="question7">
                <label>7. I have lost most of my interest in other people.  </label><br>
                <input type="radio" name="q2" value="0" required> 0<br>
                <input type="radio" name="q2" value="1"> 1<br>
                <input type="radio" name="q2" value="2"> 2<br>
                <input type="radio" name="q2" value="3"> 3
            </div>

               
            <div class="question8">
                <label>8. I don't sleep as well as I used to.  </label><br>
                <input type="radio" name="q2" value="0" required> 0<br>
                <input type="radio" name="q2" value="1"> 1<br>
                <input type="radio" name="q2" value="2"> 2<br>
                <input type="radio" name="q2" value="3"> 3
            </div>

            <div class="question9">
                <label>9. I am no more worried about my health than usual.   </label><br>
                <input type="radio" name="q2" value="0" required> 0<br>
                <input type="radio" name="q2" value="1"> 1<br>
                <input type="radio" name="q2" value="2"> 2<br>
                <input type="radio" name="q2" value="3"> 3
            </div>

            <button type="button" onclick="calculateScore()">Submit</button>
        </form>
        <div id="result" class="result"></div>
    </div>

    <script>
        function calculateScore() {
            const form = document.getElementById('depressionForm');
            const formData = new FormData(form);
            let score = 0;

            for (const value of formData.values()) {
                score += parseInt(value);
            }

            let resultText;
            if (score <= 10) {
                resultText = "Normal ups and downs.";
            } else if (score <= 16) {
                resultText = "Mild mood disturbance.";
            } else if (score <= 20) {
                resultText = "Borderline clinical depression.";
            } else if (score <= 30) {
                resultText = "Moderate depression.";
            } else if (score <= 40) {
                resultText = "Severe depression.";
            } else {
                resultText = "Extreme depression.";
            }

            document.getElementById('result').textContent = `Your score: ${score} - ${resultText}`;
        }
    </script>
</body>
</html>
