

Countries (Method: GET) : https://star-fish.myanmargateway.net/api/countries

NameCheck (Method: POST) : https://star-fish.myanmargateway.net/api/auth/nameCheck

=========
# LOCAL
=========
Register (Method: POST) : https://star-fish.myanmargateway.net/api/auth/local/register
field. name, phone, password, country_id, city_id, age, agreeToPolicy, deviceId

Request OTP (Method: POST) : https://star-fish.myanmargateway.net/api/auth/local/requestOTP
field. phone, token

Submit OTP (Method: POST) : https://star-fish.myanmargateway.net/api/auth/local/submitOTP
field. phone, token, otp



=========
# Global
=========
Register (Method: POST) : https://star-fish.myanmargateway.net/api/auth/global/register
field. name, phone, password, country_id, city_id, age, agreeToPolicy, deviceId

Request OTP (Method: POST) : https://star-fish.myanmargateway.net/api/auth/global/requestOTP
field. email, token

Submit OTP (Method: POST) : https://star-fish.myanmargateway.net/api/auth/global/submitOTP
field. email, token, otp

==========
# Both
==========

Login (Method: POST) : https://star-fish.myanmargateway.net/api/auth/login
field. username , password, deviceId,

Logout (Method: POST) :  https://star-fish.myanmargateway.net/api/auth/logout
field. deviceId,

