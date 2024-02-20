### Countries

Method (GET) [https://star-fish.myanmargateway.net/api/countries](https://star-fish.myanmargateway.net/api/countries)

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

Method (POST) [ https://star-fish.myanmargateway.net/api/auth/local/submitOTP](https://star-fish.myanmargateway.net/api/auth/local/submitOTP)  
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

Method (POST) [https://star-fish.myanmargateway.net/api/auth/login](https://star-fish.myanmargateway.net/api/auth/login)  
Field (emailOrPhone , password, deviceId)

Method (POST) [ https://star-fish.myanmargateway.net/api/auth/logout](https://star-fish.myanmargateway.net/api/auth/logout)  
Field (deviceId),

Method (GET) [ https://star-fish.myanmargateway.net/api/auth/userData](https://star-fish.myanmargateway.net/api/auth/userData)  
Field (token (Header)),

## Grade & Lesson & Game

#### Grades

Method (GET) [ https://star-fish.myanmargateway.net/api/grades ](https://star-fish.myanmargateway.net/api/grades)  
Field (token (Header))

#### Lessons

Method (GET) [ https://star-fish.myanmargateway.net/api/lessons ](https://star-fish.myanmargateway.net/api/lessons)  
Field (token ,grade_id, (Header))

#### Units

Method (GET) [ hhttps://star-fish.myanmargateway.net/api/units ](https://star-fish.myanmargateway.net/api/units)  
Field (token ,lesson_id, grade_id, (Header))

#### Spec-game

Method (GET) [ https://star-fish.myanmargateway.net/api/game ](https://star-fish.myanmargateway.net/api/game)  
Field (token ,unit_id, lesson_id (Header)) - for subUnit (game_id)

#### End-Match

#### End-Match

Method (GET) [https://star-fish.myanmargateway.net/api/end_match](https://star-fish.myanmargateway.net/api/end_match)
Field (token, game_id, lesson_id, point (Header))

### Lock & Unlock

Method (POST) [https://star-fish.myanmargateway.net/api/control](https://star-fish.myanmargateway.net/api/control)  
Field (Body) (games eg - "1,2,3" or "all" , status eg - "lock" or "unlock")

### Check games (lock/unlock)

Method(POST) [https://star-fish.myanmargateway.net/api/control/check](https://star-fish.myanmargateway.net/api/control/check)  
Field (Body) (status eg - "lock" & "unlock" )

### Check games (lock/unlock Lesson)

Method(POST) [https://star-fish.myanmargateway.net/api/control/lesson](https://star-fish.myanmargateway.net/api/control/lesson)  
Field (Body) (lesson_id ,status eg - "lock" & "unlock" )

> # Subscription Plans

### Plan List

Method (GET) [https://star-fish.myanmargateway.net/api/subscription/plans](https://star-fish.myanmargateway.net/api/subscription/plans)  
Field (token (Header))

### Purchase Plan

Method (POST) [https://star-fish.myanmargateway.net/api/subscription/purchase](https://star-fish.myanmargateway.net/api/subscription/purchase)  
Field (token, grade_id, subscription_id (Header))

### Remove Grade

<!-- Method (POST) [https://star-fish.myanmargateway.net/api/subscription/removePlan](https://star-fish.myanmargateway.net/api/subscription/removePlan)
(Delete Subscription Grade and games (Header)) -->

### ====================================================

# Point

### Display Student Point

(Method: GET) [https://star-fish.myanmargateway.net/api/points/{student_id}](https://star-fish.myanmargateway.net/api/points)

### Add Point

(Method: POST) [https://star-fish.myanmargateway.net/api/points](https://star-fish.myanmargateway.net/api/points)  
Field = student_id , point

# Reward

### Display All Reward

(Method: GET) [https://star-fish.myanmargateway.net/api/reward](https://star-fish.myanmargateway.net/api/reward).

### Display Student Reward

(Method: GET) [https://star-fish.myanmargateway.net/api/reward/{student_id}](https://star-fish.myanmargateway.net/api/reward).

### Buy Reward

(Method: POST) [https://star-fish.myanmargateway.net/api/reward](https://star-fish.myanmargateway.net/api/reward)  
Field = student_id , reward_id , reward_point

### ====================================================

# Chat

### Display all Chating Messages

(Method: GET) [https://star-fish.myanmargateway.net/api/chat](https://star-fish.myanmargateway.net/api/chat)
Field ( header ) = token

### Chatting

(Method: POST) [https://star-fish.myanmargateway.net/api/chat](https://star-fish.myanmargateway.net/api/chat)
Field ( body ) = student_id , message

### Set NickName

(Method: POST) [https://star-fish.myanmargateway.net/api/chat/nick](https://star-fish.myanmargateway.net/api/chat/nick)
Field ( body ) = student_id , nickName

### ====================================================

# Assessments

### Get All Assessments

(Method: GET) [https://star-fish.myanmargateway.net/api/assessment](https://star-fish.myanmargateway.net/api/assessment)
Field ( header ) = student_id , grade_id

### Enter into Game

(Method: GET) [https://star-fish.myanmargateway.net/api/assessment/game](https://star-fish.myanmargateway.net/api/assessment/game)
Field ( header ) = id , disable

### End Match

(Method: GET) [https://star-fish.myanmargateway.net/api/assessment/end_match](https://star-fish.myanmargateway.net/api/assessment/end_match)
Field ( header ) = student_id , grade_id , assess_game_id , point
