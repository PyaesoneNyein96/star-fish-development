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

Method(POST) [https://star-fish.myanmargateway.net/api/control/category](https://star-fish.myanmargateway.net/api/control/category)  
Field (Body) (category (category name) ,status eg - "lock" & "unlock" )

> # Subscription Plans

### Plan List

Method (GET) [https://star-fish.myanmargateway.net/api/subscription/plans](https://star-fish.myanmargateway.net/api/subscription/plans)  
Field (token (Header))

### Purchase Plan

#### - Request Prepay_Id

Method (POST) [https://star-fish.myanmargateway.net/api/payment/request_prepay_id](https://star-fish.myanmargateway.net/api/payment/request_prepay_id)  
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

(Method: GET) [https://star-fish.myanmargateway.net/api/reward/all](https://star-fish.myanmargateway.net/api/reward/all).
Field ( header ) = token

### Display Each Reward

(Method: GET) [https://star-fish.myanmargateway.net/api/reward/each](https://star-fish.myanmargateway.net/api/reward/each).
Field ( header ) = token , name

### Display all Profiles

(Method: GET) [https://star-fish.myanmargateway.net/api/reward/profiles](https://star-fish.myanmargateway.net/api/reward/profiles).
Field ( header ) = token

### Display Student Rewards (or) Profiles

(Method: GET) [https://star-fish.myanmargateway.net/api/reward](https://star-fish.myanmargateway.net/api/reward).
Field ( header ) = token , type (eg. "profile" or "achieve")

### Buy Reward

(Method: POST) [https://star-fish.myanmargateway.net/api/reward](https://star-fish.myanmargateway.net/api/reward)  
Field ( body ) = token , reward_id , reward_point

# Profile

### Update Profile

(Method: POST) [https://star-fish.myanmargateway.net/api/profile/update](https://star-fish.myanmargateway.net/api/profile/update)  
Field ( body ) = token , reward_id

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
Field ( body ) = student_id , nick_name

### ====================================================

# Assessments

### Get All Assessments

(Method: GET) [https://star-fish.myanmargateway.net/api/assessment](https://star-fish.myanmargateway.net/api/assessment)
Field ( header ) = token

### Enter into Game

(Method: GET) [https://star-fish.myanmargateway.net/api/assessment/game](https://star-fish.myanmargateway.net/api/assessment/game)
Field ( header ) = assess_game_id

### End Match

(Method: GET) [https://star-fish.myanmargateway.net/api/assessment/end_match](https://star-fish.myanmargateway.net/api/assessment/end_match)
Field ( header ) = token , assess_game_id , point

### Version Check

### Android

(Method: GET) [https://star-fish.myanmargateway.net/api/auth/versionCheck/android](https://star-fish.myanmargateway.net/api/auth/versionCheck/android)

### IOS

(Method: GET) [https://star-fish.myanmargateway.net/api/auth/versionCheck/ios](https://star-fish.myanmargateway.net/api/auth/versionCheck/ios)

### Banner Images

(Method: GET) [https://star-fish.myanmargateway.net/api/banners](https://star-fish.myanmargateway.net/api/banners)

 #  MISSIONS

* ### Repetitive Mission

### Repetitive Lessons List

(Method: GET) [https://star-fish.myanmargateway.net/api/mission/repetitive/lesson-list](https://star-fish.myanmargateway.net/api/mission/repetitive/lesson-list) Field (header) = token, page, perPage

### Repetitive bonus claim

(Method: GET) [https://star-fish.myanmargateway.net/api/mission/repetitive/claim_lesson](https://star-fish.myanmargateway.net/api/mission/repetitive/claim_lesson) Field (header) = token, lesson_id, count

+ ### Daily Bonus

### Daily bonus List

(Method: GET) [https://star-fish.myanmargateway.net/api/mission/daily/bonus](https://star-fish.myanmargateway.net/api/mission/daily/bonus) Field (header) = token

### Daily Login Bonus Claim

(Method: GET) [https://star-fish.myanmargateway.net/api/mission/daily/claim](https://star-fish.myanmargateway.net/api/mission/daily/claim) Field (header) = token, (first or second or daily)


<!-- + ### Login Bonus

### Login Bonus List

(Method: GET) [https://star-fish.myanmargateway.net/api/mission/login/bonus](https://star-fish.myanmargateway.net/api/mission/login/bonus) Field (header) = token

### Login Bonus Claim

(Method: GET) [https://star-fish.myanmargateway.net/api/mission/login/claim](https://star-fish.myanmargateway.net/api/mission/login/claim) Field (header) = token, (days) -->
