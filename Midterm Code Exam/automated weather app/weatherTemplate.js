const getHTMLnashor = function () {
    return `
    <!DOCTYPE html>
    <html>
    <head>
        <title> Automated Weather App </title>
    </head>
        <body>

        <h1> Baron Dela Fuente, 2nd Year - BSIT </h1>
        <canvas id = "bisaya" width = "300" height = "300" style = "background-color:  #e0f7fa; border: 2px solid #00acc1;">
        </canvas>

        <script>
            const canvas = document.getElementById('bisaya');
            const ctx = canvas.getContext('2d');
    `
};

module.exports = getHTMLnashor;