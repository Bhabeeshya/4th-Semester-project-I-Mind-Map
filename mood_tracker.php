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
        .result {
            margin-top: 20px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Anxiety Assessment</h1>
        <form id="anxietyForm">
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
            <button type="button" class="btn" onclick="calculateScore()">Submit</button>
        </form>
        <div id="result" class="result"></div>
    </div>

    <script>
        const symptoms = [
            "Numbness or tingling",
            "Feeling hot",
            "Wobbliness in legs",
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
            "Face flushed",
            "Hot / cold sweats",
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

        function calculateScore() {
            let score = 0;
            let unanswered = false;

            symptoms.forEach((_, index) => {
                const radios = document.getElementsByName(`q${index}`);
                let selected = false;
                radios.forEach((radio) => {
                    if (radio.checked) {
                        score += parseInt(radio.value);
                        selected = true;
                    }
                });
                if (!selected) {
                    unanswered = true;
                }
            });

            const resultDiv = document.getElementById("result");

            if (unanswered) {
                resultDiv.textContent = "Please answer all questions before submitting.";
                return;
            }

            if (score <= 21) {
                resultDiv.textContent = `Your score is ${score}. This indicates low anxiety.`;
            } else if (score <= 35) {
                resultDiv.textContent = `Your score is ${score}. This indicates moderate anxiety.`;
            } else {
                resultDiv.textContent = `Your score is ${score}. This indicates potentially concerning levels of anxiety.`;
            }
        }
    </script>
</body>
</html>
