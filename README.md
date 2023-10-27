### Countries  
Method (GET) [https://star-fish.myanmargateway.net/api/countries]( https://star-fish.myanmargateway.net/api/countries) 

### Name Check  
Method (POST) [https://star-fish.myanmargateway.net/api/auth/nameCheck](https://star-fish.myanmargateway.net/api/auth/nameCheck)



## LOCAL 

### Register
Method (POST) [https://star-fish.myanmargateway.net/api/auth/local/register](https://star-fish.myanmargateway.net/api/auth/local/register)  
Field (name, phone, password, country_id, city_id, age, agreeToPolicy, deviceId)  
### Request OTP
Method (POST) [https://star-fish.myanmargateway.net/api/auth/local/requestOTP](https://star-fish.myanmargateway.net/api/auth/local/requestOTP)  
Field (phone, token)  


### Submit OTP
Method (POST) [ https://star-fish.myanmargateway.net/api/auth/local/submitOTP]( https://star-fish.myanmargateway.net/api/auth/local/submitOTP)  
Field (phone, token, otp)



## GLOBAL

### Register
Method (POST) [https://star-fish.myanmargateway.net/api/auth/global/register](https://star-fish.myanmargateway.net/api/auth/global/register)  
Field (name, phone, password, country_id, city_id, age, agreeToPolicy, deviceId)

Method (POST) [https://star-fish.myanmargateway.net/api/auth/global/requestOTP](https://star-fish.myanmargateway.net/api/auth/global/requestOTP)  
Field (email, token)

Method (POST) [https://star-fish.myanmargateway.net/api/auth/global/submitOTP](https://star-fish.myanmargateway.net/api/auth/global/submitOTP)  
Field (email, token, otp)


## BOTH

Method (POST) [https://star-fish.myanmargateway.net/api/auth/login]( https://star-fish.myanmargateway.net/api/auth/login)  
Field (username , password, deviceId)

Method (POST) [ https://star-fish.myanmargateway.net/api/auth/logout]( https://star-fish.myanmargateway.net/api/auth/logout)  
Field (deviceId),

