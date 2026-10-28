const events = require('events');
const fs = require('fs');

const getHTMLnashor = require('./weatherTemplate.js');

const weatherEmitternashor = new events.EventEmitter();

weatherEmitternashor.on('sunny_alert', function (){

    let canvasDrawingScriptnashor = `

    // Draw the green sun
    ctx.fillStyle = 'green';
    ctx.beginPath();
    ctx.arc(150, 150, 40, 0, Math.PI * 2);
    ctx.fill();

    // Draw the sun rays
    ctx.strokeStyle = 'green';
    ctx.lineWidth = 4;

    for (let i = 0; i < 12; i++) {
        let angle = (i * Math.PI) / 6;

        let x1 = 150 + Math.cos(angle) * 50;
        let y1 = 150 + Math.sin(angle) * 50;

        let x2 = 150 + Math.cos(angle) * 70;
        let y2 = 150 + Math.sin(angle) * 70;

        ctx.beginPath();
        ctx.moveTo(x1, y1);
        ctx.lineTo(x2, y2);
        ctx.stroke();
    }

    </script>
    </body>
    </html>
`;
    
    let outputHTMLnashor = getHTMLnashor() + canvasDrawingScriptnashor;

    fs.writeFileSync('weather.html', outputHTMLnashor, 'utf8');
    console.log("Success: weather.html has been generated!");
});

weatherEmitternashor.emit('sunny_alert');

