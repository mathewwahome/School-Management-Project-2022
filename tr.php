<!DOCTYPE html>
<html>
<head>
    <title>canvas test</title>
    <style type="text/css">
                .container {
          width: 100%;
          height: 100vh;
          display: flex;
          justify-content: center;
          align-items: center;
        }
    </style>
</head>
<body>
<div class="container">
<canvas width="200" height="200"></canvas>
</div>
</body>
<script>
    let ctx = document.querySelector("canvas").getContext("2d");

    const results = [
        {mood: "Angry", total: 1499, shade: "#0a9627"},
        {mood: "Happy", total: 478, shade: "#960A2C"},
        {mood: "Melancholic", total:332, shade: "#332E2E"},
        {mood: "Gloomy", total: 195, shade: "#F73809"}
    ];

    let sum = 0;
    let totalNumberOfPeople = results.reduce((sum, {total}) => sum + total, 0);
    let currentAngle = 0;

    for (let moodValue of results) {
        //calculating the angle the slice (portion) will take in the chart
        let portionAngle = (moodValue.total / totalNumberOfPeople) * 2 * Math.PI;
        //drawing an arc and a line to the center to differentiate the slice from the rest
        ctx.beginPath();
        ctx.arc(100, 100, 100, currentAngle, currentAngle + portionAngle);
        currentAngle += portionAngle;
        ctx.lineTo(100, 100);
        //filling the slices with the corresponding mood's color
        ctx.fillStyle = moodValue.shade;
        ctx.fill();
    }

</script>
</html>