rm -rfv *
rm -rfv .php_cs .travis.yml .swagger-codegen .swagger-codegen-ignore
read -p "Path to swagger codegen jar relative to this dir:" swagger
read -p "Git Commit Message (eg. 'v<ccp-api-version> swagger-<swagger-codegen-version>'):" msg
java -jar $swagger generate -i https://esi.evetech.net/latest/swagger.json?datasource=tranquility -l php --git-repo-id "esi-php-client" --git-user-id "jbs1"  --release-note "$msg"
mv SwaggerClient-php/.[!.]* .
mv SwaggerClient-php/* .
rm -rfv SwaggerClient-php
git add -A
git commit -a -m "$msg"
echo "Everything done... Execute 'git push' to push the api updates"
