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

Method (POST) [ https://star-fish.myanmargateway.net/api/auth/userData]( https://star-fish.myanmargateway.net/api/auth/userData)  
Field (token),

# Game

#### Grades
Method (GET) [ http://localhost:8000/api/grades ](http://localhost:8000/api/grades)  
Field (token (Header))

#### Lessons
Method (GET) [ http://localhost:8000/api/lessons ](http://localhost:8000/api/lessons)  
Field (token ,grade, (Header))

### Games
Method (GET) [ http://localhost:8000/api/games ](http://localhost:8000/api/games)  
Field (token ,lesson, (Header))

### Spec-game
Method (GET) [ http://localhost:8000/api/game ](http://localhost:8000/api/game)  
Field (token ,game, (Header))

### ======================================================================


## Point
### Point (Method: GET) [https://star-fish.myanmargateway.net/api/points/{student_id}](https://star-fish.myanmargateway.net/api/points).


### Add Point (Method: POST)  [https://star-fish.myanmargateway.net/api/points](https://star-fish.myanmargateway.net/api/points).
field = student_id , point


## Reward
### Display All Reward (Method: GET) [https://star-fish.myanmargateway.net/api/reward](https://star-fish.myanmargateway.net/api/reward).

### Display Student Reward (Method: GET) [https://star-fish.myanmargateway.net/api/reward/{student_id}](https://star-fish.myanmargateway.net/api/reward).

### Buy Reward (Method: POST) [https://star-fish.myanmargateway.net/api/reward](https://star-fish.myanmargateway.net/api/reward).
field = student_id , reward_id , reward_point
