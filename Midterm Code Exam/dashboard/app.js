const events = require('events');
const fs = require('fs');
const getDashboardLayoutnashor = require('./dashboardHelper');

const monitorEmitternashor = new events.EventEmitter();
let logCount = 0;

console.log ("---Staring Live Loop---");

const pingTimer = setInterval(function() {
    logCount++;

    fs.appendFileSync('server_pings.txt', "Ping timestamp update recorded!\n");
    console.log("Ping saved to text file. Total: " + logCount);

    if (logCount === 3) {
        clearInterval(pingTimer);
        monitorEmitternashor.emit('generate_report');
    }
}, 2000);

monitorEmitternashor.on ('generate_report', function(){
    console.log ("\n--- Processing Files ---");

    const fileContentsnashor = fs.readFileSync('server_pings.txt').toString();
    console.log("Succesfully read from server_pings.txt\n" + fileContentsnashor);

    let browserCanvasScriptnashor = `
        ctx.fillStyle = '#00ff00';
        ctx.fillRect(40, 50, 100, 100);

        ctx.beginPath();
        ctx.moveTo(100,100);
        ctx.lineTo(450,100);
        ctx.lineWidth = 6;
        ctx.strokeStyle = '#00aa00';
        ctx.stroke();
    `;

    let totalPayloadnashor = getDashboardLayoutnashor() + browserCanvasScriptnashor;

    fs.writeFileSync('dashboard.html', totalPayloadnashor);
    console.log("Success! [dashboard.html] has been updated on the filesystem.");
});