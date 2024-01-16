
const express = require('express')
const bodyParser = require('body-parser')
const axios = require('axios');
const app = express()
const qs = require('qs');
app.use(bodyParser.json())
app.use(bodyParser.urlencoded({ extended: false }))

// Constants
const PORT = 8000;
const HOST = '0.0.0.0';

app.get('/', (req, res) => {
    res.send('running line notify')
})

app.post('/create', (req, res) => {
    //https://notify-bot.line.me/en/
    // EkJwE95iOUxqBadlFUHHFlgSkd2ItJMyXI0h8Obez5o
    // w49DxOJoDCQ0kT3odzHMNcoXrZlIGPLW0D9LByZJLph hos app
    let data = req.body;
    let message = data.message;
    const refine_data = qs.stringify({ message });
    axios({
        method: "post",
        url: "https://notify-api.line.me/api/notify",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer "+data.token,

        },
        data: refine_data
    })
        .then((response) => {
            console.log("response "+response);
        })
        .catch((err) => {
            console.log("error "+err);
        });

    res.send('success')
})

app.listen(PORT, HOST, () => {
    console.log(`Running on http://${HOST}:${PORT}`);
  });