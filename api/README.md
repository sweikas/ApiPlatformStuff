# To get started
1. `docker-compose build --pull --no-cache`
2. `docker-compose up -d `
3. `docker-compose exec php bin/console doctrine:migrations:migrate`
4. There should be a user already created in the db. You need to use it to get jwt token in order to access all other endpoints.
Send a POST request to `localhost/authentication_token`, with body `{
   "email": "test@test.com",
   "password": "test"
   }`
5. Use the token you've got to play around with all other endpoints.
