const fs = require('fs');

try {
    fs.writeFileSync('C:\\Temp\\weather.html', 'Hello!', 'utf8');
    console.log('Success!');
} catch (err) {
    console.error(err);
}