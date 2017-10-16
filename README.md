# esi-php-client

This is the repo for the swagger generated PHP client for EVE Online's esi API.


## How to update

Download the proper [swagger-codegen](https://github.com/swagger-api/swagger-codegen#compatibility). The version with which the pervious client was generated can be found [here](.swagger-codegen/VERSION). Composer has to be installed on the machine. Then just remove the old SwaggerClient-php and generate teh new one.

```bash
# inside git repo
rm -rfv SwaggerClient-php .swagger-codegen
java -jar <path to jar>/<swagger jar> generate -i https://esi.tech.ccp.is/latest/swagger.json?datasource=tranquility -l php
composer install -d SwaggerClient-php
```


### Note on swagger-codegen versions 

The current stable version of 2.2.3 leads to `Exception in thread "main" java.lang.RuntimeException: Could not generate api file for 'Assets'`  
while the SNAPSHOT versions of 2.2.3 and 3.0.0 lead to Accesstoken not being used properly and authentication failing.
Version 2.2.2 and below seem to be working fine.
