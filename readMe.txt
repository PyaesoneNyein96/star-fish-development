

Countries  (Method: GET) : https://star-fish.myanmargateway.net/api/Countries

=========
# LOCAL
=========
Register (Method: POST) : https://star-fish.myanmargateway.net/api/auth/local/register
field. name, phone, password, country_id, city_id, age, agreeToPolicy, deviceId

Request OTP (Method: POST) : https://star-fish.myanmargateway.net/api/auth/local/requestOTP
field. phone, token

Submit OTP (Method: POST) : https://star-fish.myanmargateway.net/api/auth/local/submitOTP
field. phone, token, otp

Login (Method: POST) : https://star-fish.myanmargateway.net/api/auth/local/login
field. username or phone, password, deviceId,

Logout (Method: POST) :  https://star-fish.myanmargateway.net/api/auth/local/logout
field. deviceId, Phone


=========
# Global
=========
Register (Method: POST) : https://star-fish.myanmargateway.net/api/auth/global/register
field. name, phone, password, country_id, city_id, age, agreeToPolicy, deviceId

Request OTP (Method: POST) : https://star-fish.myanmargateway.net/api/auth/global/requestOTP
field. phone, token

Submit OTP (Method: POST) : https://star-fish.myanmargateway.net/api/auth/global/submitOTP
field. phone, token, otp

Login (Method: POST) : https://star-fish.myanmargateway.net/api/auth/global/login
field. username or phone, password, deviceId,

Logout (Method: POST) :  https://star-fish.myanmargateway.net/api/auth/global/logout
field. deviceId, Phone
