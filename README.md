# PHP-Login-With-Github
Login with Github account via PHP &amp; Mysqli  
![Login-With-Github-By-carry0987](./image/sign-in-with-github.svg)

## Usage
If you don't have `Github OAuth ClientID`, just go here to generate yours:
https://github.com/settings/applications/new

Then enter the `ClientID` &amp; `ClientSecret` [here](https://github.com/carry0987/PHP-Login-With-Github/blob/master/github_config.php#L9-L11), and also set your `Authorization callback URL`:
```php
$clientID = 'Your_Github_OAuth_ClientID';
$clientSecret = 'Your_Github_OAuth_ClientSecret';
$redirectURL = 'Your_Github_Auth_CallbackURL';
```
