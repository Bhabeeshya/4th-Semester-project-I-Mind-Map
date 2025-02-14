<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anxiety Assessment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            max-width: 800px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .result, .ranges {
            margin-top: 20px;
            text-align: center;
            font-size: 18px;
            color: #333;
        }
        .ranges {
            font-weight: normal;
            font-size: 16px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Anxiety Assessment</h1>
        <form id="anxietyForm" onsubmit="handleSubmit(event)">
            <table>
                <thead>
                    <tr>
                        <th>Symptom</th>
                        <th>Not at All (0)</th>
                        <th>Mildly (1)</th>
                        <th>Moderately (2)</th>
                        <th>Severely (3)</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Dynamically generated rows -->
                </tbody>
            </table>
            <button type="submit" class="btn">Submit</button>
        </form>
        <div id="ranges" class="ranges">
            Score Ranges:<br>
            0-21: Low Anxiety<br>
            22-35: Moderate Anxiety<br>
            36 and above: Potentially Concerning Levels of Anxiety
        </div>
        <div id="result" class="result"></div>
    </div>

    <script>
        const symptoms = [
            "Feeling hot",
            "Unable to relax",
            "Fear of worst happening",
            "Dizzy or lightheaded",
            "Heart pounding / racing",
            "Unsteady",
            "Terrified or afraid",
            "Nervous",
            "Feeling of choking",
            "Hands trembling",
            "Shaky / unsteady",
            "Fear of losing control",
            "Difficulty in breathing",
            "Fear of dying",
            "Scared",
            "Indigestion",
            "Faint / lightheaded",
        ];

        const tbody = document.querySelector("tbody");

        symptoms.forEach((symptom, index) => {
            const row = document.createElement("tr");

            const symptomCell = document.createElement("td");
            symptomCell.textContent = symptom;
            row.appendChild(symptomCell);

            for (let i = 0; i < 4; i++) {
                const cell = document.createElement("td");
                const radio = document.createElement("input");
                radio.type = "radio";
                radio.name = `q${index}`;
                radio.value = i;
                cell.appendChild(radio);
                row.appendChild(cell);
            }

            tbody.appendChild(row);
        });

        function handleSubmit(event) {
            event.preventDefault(); // Prevent default form submission

            const form = document.getElementById("anxietyForm");
            const formData = new FormData(form);
            let score = 0;
            let unanswered = false;

            symptoms.forEach((_, index) => {
                const radios = document.getElementsByName(`q${index}`);
                let selected = false;
                
                for (let i = 0; i < radios.length; i++) {
                    if (radios[i].checked) {
                        score += parseInt(radios[i].value);
                        selected = true;
                        break;
                    }
                }

                if (!selected) {
                    unanswered = true;
                }
            });

            const resultDiv = document.getElementById("result");

            if (unanswered) {
                resultDiv.textContent = "Please answer all questions before submitting.";
                resultDiv.style.color = "red";
                return;
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

            resultDiv.textContent = `Your score: ${score} - ${resultText}`;

           
            setTimeout(() => {
                window.location.href = "depression.php";
            }, 2000);
        }
    </script>
</body>
</html>
