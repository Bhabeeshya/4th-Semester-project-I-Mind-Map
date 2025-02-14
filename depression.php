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
            <div class="question1 question">
                <label>1. Question</label><br><br>
                <div>0<input type="radio" name="q1" value="0" required> I do not feel sad.</div><br>
                <div>1<input type="radio" name="q1" value="1"> I feel sad</div><br>
                <div>2<input type="radio" name="q1" value="2"> I am sad all the time and I can't snap out of it.</div><br>
                <div>3<input type="radio" name="q1" value="3"> I am so sad and unhappy that I can't stand it.</div><br>
            </div>

            <div class="question2 question">
                <label>2. Question</label><br><br>
                <div>0<input type="radio" name="q2" value="0" required> I am not particularly discouraged about the future.</div><br>
                <div>1<input type="radio" name="q2" value="1"> I feel discouraged about the future.</div><br>
                <div>2<input type="radio" name="q2" value="2"> I feel I have nothing to look forward to.</div><br>
                <div>3<input type="radio" name="q2" value="3"> I feel the future is hopeless and that things cannot improve.</div><br>
            </div>

            <div class="question3 question">
                <label>3. Question</label><br><br>
                <div>0<input type="radio" name="q3" value="0" required> I do not feel like a failure.</div><br>
                <div>1<input type="radio" name="q3" value="1"> I feel I have failed more than the average person.</div><br>
                <div>2<input type="radio" name="q3" value="2"> As I look back on my life, all I can see is a lot of failures.</div><br>
                <div>3<input type="radio" name="q3" value="3"> I feel I am a complete failure as a person.</div><br>
            </div>

            <div class="question4 question">
                <label>4. Question</label><br><br>
                <div>0<input type="radio" name="q4" value="0" required> I get as much satisfaction out of things as I used to.</div><br>
                <div>1<input type="radio" name="q4" value="1"> I don't enjoy things the way I used to.</div><br>
                <div>2<input type="radio" name="q4" value="2"> I don't get real satisfaction out of anything anymore.</div><br>
                <div>3<input type="radio" name="q4" value="3"> I am dissatisfied or bored with everything.</div><br>
            </div>
            <div class="question5 question">
         <label>5. Question</label><br><br>
        <div>0<input type="radio" name="q5" value="0" required> I don't feel particularly guilty.</div><br>
        <div>1<input type="radio" name="q5" value="1"> I feel guilty a good part of the time.</div><br>
        <div>2<input type="radio" name="q5" value="2"> I feel quite guilty most of the time.</div><br>
        <div>3<input type="radio" name="q5" value="3"> I feel guilty all of the time.</div><br>
        </div>

        <div class="question6 question">
        <label>6. Question</label><br><br>
        <div>0<input type="radio" name="q6" value="0" required> I don't feel disappointed in myself.</div><br>
        <div>1<input type="radio" name="q6" value="1"> I am disappointed in myself.</div><br>
        <div>2<input type="radio" name="q6" value="2"> I am disgusted with myself.</div><br>
        <div>3<input type="radio" name="q6" value="3"> I hate myself.</div><br>
        </div>

        <div class="question7 question">
        <label>7. Question</label><br><br>
        <div>0<input type="radio" name="q7" value="0" required> I don't feel I am any worse than anybody else.</div><br>
        <div>1<input type="radio" name="q7" value="1"> I am critical of myself for my weaknesses or mistakes.</div><br>
         <div>2<input type="radio" name="q7" value="2"> I blame myself all the time for my faults.</div><br>
         <div>3<input type="radio" name="q7" value="3"> I blame myself for everything bad that happens.</div><br>
        </div>

        <div class="question8 question">
        <label>8. Question</label><br><br>
        <div>0<input type="radio" name="q8" value="0" required> I don't have any thoughts of killing myself.</div><br>
        <div>1<input type="radio" name="q8" value="1"> I have thoughts of killing myself, but I would not carry them out.</div><br>
         <div>2<input type="radio" name="q8" value="2"> I would like to kill myself.</div><br>
        <div>3<input type="radio" name="q8" value="3"> I would kill myself if I had the chance.</div><br>
        </div>

        <div class="question9 question">
         <label>9. Question</label><br><br>
         <div>0<input type="radio" name="q9" value="0" required> I don't cry any more than usual.</div><br>
        <div>1<input type="radio" name="q9" value="1"> I cry more now than I used to.</div><br>
        <div>2<input type="radio" name="q9" value="2"> I cry all the time now.</div><br>
        <div>3<input type="radio" name="q9" value="3"> I used to be able to cry, but now I can't cry even though I want to.</div><br>
        </div>

        <div class="question10 question">
        <label>10. Question</label><br><br>
        <div>0<input type="radio" name="q10" value="0" required> I am no more irritated by things than I ever was.</div><br>
        <div>1<input type="radio" name="q10" value="1"> I am slightly more irritated now than usual.</div><br>
         <div>2<input type="radio" name="q10" value="2"> I am quite annoyed or irritated a good deal of the time.</div><br>
        <div>3<input type="radio" name="q10" value="3"> I feel irritated all the time.</div><br>
        </div>

        <div class="question11 question">
        <label>11. Question</label><br><br>
        <div>0<input type="radio" name="q11" value="0" required> I have not lost interest in other people.</div><br>
        <div>1<input type="radio" name="q11" value="1"> I am less interested in other people than I used to be.</div><br>
        <div>2<input type="radio" name="q11" value="2"> I have lost most of my interest in other people.</div><br>
        <div>3<input type="radio" name="q11" value="3"> I have lost all of my interest in other people.</div><br>
        </div>
        <div id="result" class="result"></div>

            <button type="submit">Submit</button>
        </form>
    </div>

    <script>
        // Calculate Depression Score
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

            document.getElementById('result').textContent = `Your depression score: ${score} - ${resultText}`;
        }

        // Trigger calculation on form submit
        document.getElementById('depressionForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form from submitting
            calculateScore();       // Call the function to calculate the score
        });

        // Fetch and display the latest anxiety score in an alert
        window.onload = function() {
            fetch('fetch_anxiety_score.php')
                .then(response => response.json())
                .then(data => {
                    const score = parseInt(data.score);

                    if (!isNaN(score)) {
                        let anxietyText;
                        if (score <= 21) {
                            anxietyText = `Your anxiety score is ${score}. This indicates low anxiety.`;
                        } else if (score <= 35) {
                            anxietyText = `Your anxiety score is ${score}. This indicates moderate anxiety.`;
                        } else {
                            anxietyText = `Your anxiety score is ${score}. This indicates potentially concerning levels of anxiety.`;
                        }
                        alert(anxietyText); // Display result in an alert
                    } else {
                        alert("No anxiety score available.");
                    }
                })
                .catch(error => console.error('Error fetching anxiety score:', error));
        };
    </script>
</body>
</html>
