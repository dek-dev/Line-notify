# Document
To create a token, go to the following link:
https://notify-bot.line.me/en/
and follow the instructions.

How to create a LINE Notify token
1. Log in to LINE with your email and password.
2. Click the three dots next to your name in the top right corner, then select "My page".
3. Click "Generate token".
4. Enter a name for the token and select whether you want it to connect to a group or a single user.

To create a token for a group:
1. In the LINE app, add LINE Notify as a friend.
2. Invite "LINE Notify" to the group you want to connect the token to.

Set up Node Js
```
npm install
npm start
```

try ```http://0.0.0.0:8000/create```

postman boby -> raw 

```json
{
    "message": "hi wutdy",
    "token": "TpjBXWfYXuzLd0KYav7qBe7BnDt9tNzByf7KskHCNL3"
}
