

Countries  (Method: GET) : https://star-fish.myanmargateway.net/api/Countries


Local-Register (Method: POST) : https://star-fish.myanmargateway.net/api/local/auth/register
eg. name, phone, password, country_id, city_id, age, agreeToPolicy, deviceId (formData)


Local-Request OTP (Method: POST) : https://star-fish.myanmargateway.net/api/local/auth/requestOTP
eg. phone, token

Local-Submit OTP (Method: POST) : https://star-fish.myanmargateway.net/api/local/auth/submitOTP
eg. phone, token, otp

Local - Login (Method: POST) : https://star-fish.myanmargateway.net/api/local/auth/login
eg. username or phone, password, deviceId,

Local - Logout (Method: POST) :  https://star-fish.myanmargateway.net/api/local/auth/logout
eg. deviceId, Phone
