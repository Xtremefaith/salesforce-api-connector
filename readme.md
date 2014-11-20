# Salesforce API Connector for WordPress
This WordPress plugin makes it easy to connect your site to SalesForce Force.com to make API request. It uses the ['password'](https://www.salesforce.com/us/developer/docs/api_rest/Content/intro_understanding_username_password_oauth_flow.htm) `grant_type` with an API User's Credentials.

## For Example:

- **Customer Portal** - If you ever wanted to create a custom customer portal solution this would be foundational to doing just that
- **Reports** - Perhaps you wanted a live piece of data to display in a widget, post, or page, with this API connector you could easily make a request to a reporting class in your organization and make it happen
- **Directory** - Wanting a simple way to manage your organizations staff on your WordPress site? With a quick API call to a custom APEX class you can now export a custom SOQL result to your WordPress environment and display it on a page

## Features

- **OAuth 2.0 Integration** - I want to be able to click "Login with Salesforce!" through the WordPress admin and be authenticate and API user's credentials to any organization
- **REST/SOAP Request** - I want to handle REST/SOAP API request
- **Error Handling** - This plugin should handle any errors from API request, (i.e. `ERROR: function is not available on this org` when a request to your organization doesn't exist in a class )
- **Flexibility** - This plugin will serve as a foundation to many in-house projects so its purpose is to be simple, well-documented, and mostly invisible to the development process

# Help Wanted

Are you excited about this project?! I am and I believe it could benefit many people and organizations as it combines two extremely large platforms in a powerful way. I would really appreciate any help you are willing to contribute: **advice, code, direction, etc** *-Please message me directly letting me know your interest, every little bit helps* More details about the mission and progress, including screenshots and whiteboard outlines can be found on [the documentation page](http://xtremefaith.github.io/Salesforce-API-Connector/)

# Current To Do List

- [Create a managed package](http://salesforce.stackexchange.com/questions/56752/how-to-create-a-managed-application-and-namespace-for-rest-api) - Anyone can respond to this public form to help progress this
- Create a request for a `request_token`
- Use `request_token` to get an `access_token`
- Use access token to make an API call to Salesforce
- Securely store credentials in WordPress database
- Setup OAuth 2.0 as new process for getting `access_token`

# Contributors

+ Nick Worth | [@Xtremefaith](http://twitter.com/Xtremefaith) or [Email me directly](mailto:nick@divtruth.com)