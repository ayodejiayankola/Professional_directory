## Professional Directory

A prototype for allowing end users can search for artisans/professionals based on services and location search query. Allows vendor signup and registration via phone number

## Features

-   Created an API to register a new artisan as a user.
-   Created an API to allow registered artisan as a user login with credentials.
-   Created an API to call for a list of all artisan registered .
-   Created an API to call for a single artisan through registered user id .
-   Created an API to perform a search query on artisan registered using the business address(location) and service as search parameter.

## API documentation

## Reister a new User as an artisan

Returns json data for registered user.

-   URL
    /register
    -Method:
    POST
    -URL Params
    Required:
    name=[string]
    business_name=[string]
    service=[string]
    business_addres=[string]
    phone=[string]
    password=[string]
    password_confirmation=[string]

-Data Params

requests.post('/register', 'AuthController@register');

-Success Response:

Code: 200
Content: {
"user": {
"name": "desmond",
"business_name": "agent tailoring",
"service": "sewing",
"business_address": "lagos",
"phone": "078695040134",
"updated_at": "2019-08-26 21:20:06",
"created_at": "2019-08-26 21:20:06",
"id": 13
},
"access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImEzMThmNjc3ZWRkMzJkODljY2FhODUyNTE2MDkyYTg3YzgxZDFjYmZiNjkzZTFkZDU0NmM2ZDY1ODQ1OGVlOTJlZTc2MGFiZDQ1NTM2YzBmIn0.eyJhdWQiOiIxIiwianRpIjoiYTMxOGY2NzdlZGQzMmQ4OWNjYWE4NTI1MTYwOTJhODdjODFkMWNiZmI2OTNlMWRkNTQ2YzZkNjU4NDU4ZWU5MmVlNzYwYWJkNDU1MzZjMGYiLCJpYXQiOjE1NjY4NTQ0MDgsIm5iZiI6MTU2Njg1NDQwOCwiZXhwIjoxNTk4NDc2ODA3LCJzdWIiOiIxMyIsInNjb3BlcyI6W119.2m7Ny7eRfSdBrgcyqoFBqYbKfGzGzMzSGC7fE8Ku5nEUq3j5o7gn1Hk4IPvrbnCTI2MwUcOQkPm-4_Ew2KQ8mIUmojFFoIjtqCxhWePW8ZNpSCm7yB7NYPTBSb_cgh0ZnuO\_\_ecPbEuKEqHhxHzm7V8mdsRZ1KRzpIP1PDvA-bazds65kfM8RRwTOScifI2Mx99_eKo0HKcPBPcDId77MGSef9fWyZWx0w5dBiIeqnkps-Hw4RVBVDi26h-AhdiRK3eNI5vBTzBpU6v8r4nApjCuwIgx5LvOWVogwHnMpmCDGog4WJQwE4GKbt3XVhQEAAJQCn2pe042XXYWGsTn68YnSMWVaS74nXRWcjs0u89kGxYccwEgWjdRa2JdfGJ7IrTYVVNdvzWPJMEMGSX1CXzclGgHSOyP4FiZVZmgbNO81NBesVGqyaTFMoRs-dZaF2KyTdPGGiAlRjWJHL753jJmWlsWLRxpG9DUa7tPA7qaSV-nj1aeUoQ7pB_Zx1rat60iaYGY3vy6UuxDh00opOVVSz5ysydw-EgqePbF8sJFnxCf-zScWhZm49J6FhKKQ2PTnWiSZsGMxhbN_l5xhFP1BxBdt3Klf8BDZRhE4IAPDzTrpwkNSSPfCA6rdOzliT9mgWMaTO-m841aDTgx4LpWWZWv-j0jroZyT19xfiw"
}

-Sample Call:

\$.ajax({
url: "/register",
dataType: "json",
type : "POST",
success : function(r) {
console.log(r);
}
});

##Login as a register user/artisan

Returns json data about a single user.

-   URL
    /login
    -Method:
    POST
    -URL Params
    Required:
    phone=[string]
    password=[string]

-Data Params
requests.post('/login', 'AuthController@login');

-Success Response:

Code: 200
Content:{
"user": {
"id": 13,
"name": "desmond",
"business_name": "agent tailoring",
"service": "sewing",
"business_address": "lagos",
"phone": "078695040134",
"verification_code": null,
"phone_verified_at": null,
"created_at": "2019-08-26 21:20:06",
"updated_at": "2019-08-26 21:20:06"
},
"access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjQyNjRmYzlhNDg3ZTdhZTNmOWNmNzcwMjNhYzlmMTE0NzY3MWM2ZWU2YjE0ZmM2Y2FkOGY0YmExOGM2OGQwODQ5YjRlMzEzM2MzNzFlNWZkIn0.eyJhdWQiOiIxIiwianRpIjoiNDI2NGZjOWE0ODdlN2FlM2Y5Y2Y3NzAyM2FjOWYxMTQ3NjcxYzZlZTZiMTRmYzZjYWQ4ZjRiYTE4YzY4ZDA4NDliNGUzMTMzYzM3MWU1ZmQiLCJpYXQiOjE1NjY4NTUwNDQsIm5iZiI6MTU2Njg1NTA0NCwiZXhwIjoxNTk4NDc3NDQ0LCJzdWIiOiIxMyIsInNjb3BlcyI6W119.dhMXPVw3nm2fB-ex9ZQY0Gt8p0ce2gBjkP4g5SxN4d45rVm94Gp5ADbdSn3KQ4_VwME6biq3uQJTMRMJfv2uIWvcu4BcwjvHCEA9cP2ccK2l9YrP6oCpciuqfRvu9vM-VtQT2J8KA5Njm_7-2V4j3BuBBz0liBcn56Je6y3-TsVzf-J2L7pemoVjQXP_w-IVmjwRxXwkB480S_qocsbsKcGTilovQBQkcrnUm1_Mtbnf3jsRMrrfEf7UCq7zwwFOFFnppzBIH-UkpO1grAY1Mej1O4cAONpwGj-Yy3NNqv7awZWkG5EUAmR4lfmk4ATpVoYwUG8pgKQF500w_wnWujL88wUExbzt9J72cLDLIc5-j8xLgOB7S47QxMjGvj5tmoKZDH1CwFuM0uE4gugbI0iv8yd1K0Z1xyzdozE-5LVYW0qtmKxKKKiTmVbqREGdJM4IQiatsS5JHXier3ZxoYEdoTmbSEIYl6KmBerPwITKOTNFiCav8FHVfDDTlTtMbugp19eMhGQDR0PtrhNijQ-OoOipKr6IxjLRWL5sKWtr4JzlvpkbUGkRCssOWmZ_w1UgnCXF66eQR-vyGgxpnq1jbPPfGeI7rWwuL2zn1aeDcE6dgbmay4DdCsVxgSLyOcC_jked4NWnbJjdH0qkOGJQHy0rjWVjlJ9oKLe13LI"
}

-Sample Call:

\$.ajax({
url: "/login",
dataType: "json",
type : "POST",
success : function(r) {
console.log(r);
}
});

##Search query for artisan based on location(business) and service

Returns json data about all register users based on search made

-   URL
    /search?service=sewing&business_address=lagos
    -Method:
    GET
    -URL Params
    Required:
    business_address=[string]
    service=[string]

-Data Params
requests.get('/search', 'UserController@search');

-Success Response:

Code: 200
Content:[
{
"id": 13,
"name": "desmond",
"business_name": "agent tailoring",
"service": "sewing",
"business_address": "lagos",
"phone": "078695040134"
}
]

-Sample Call:

\$.ajax({
url: "/search",
dataType: "json",
type : "GET",
success : function(r) {
console.log(r);
}
});

##Show User
Returns json data about a single user.

-   URL
    users/:id
    -Method:
    GET
    -URL Params
    Required:
    id=[integer]

-Data Params
None

-Success Response:

Code: 200
Content:[
{
"id": 13,
"name": "desmond",
"business_name": "agent tailoring",
"service": "sewing",
"business_address": "lagos",
"phone": "078695040134"
}
]

-   Error Response:

Code: 404 NOT FOUND
Content: { error : "User doesn't exist" }
OR

Code: 401 UNAUTHORIZED
Content: { error : "You are unauthorized to make this request." }

-Sample Call:
\$.ajax({
url: "/user/13",
dataType: "json",
type : "GET",
success : function(r) {
console.log(r);
}
});
