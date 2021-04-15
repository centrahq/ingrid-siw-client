Overrides some code generated for the client, because ingrid's API spec does not match what they actually return. until they fix it the client shouldn't be regenerated.

# ingrid-siw-client
Client for Ingrid's SIW api

How to update this code:

git clone this repo

Run `swagger-codegen generate -l php -i https://api.ingrid.com/v1/siw/_/swagger.json -o siw-client`

`cp -r siw-client/SwaggerClient-php/lib/ <path-to-repo>/lib/`

update the composer dep in centrahq/silk repo :)
